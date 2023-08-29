<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Str;
use Carbon\Carbon;
use App\Models\ClientAdvice;
use App\Models\AccommodationRate;
use App\Models\OtherAdvice;
use App\Models\RestaurantRate;
use App\Models\TourLeadRate;
use App\Models\TourRate;
use App\Models\VehicleRate;

class FormAdminController extends Controller
{

    public function index() {

        $listForm = ClientAdvice::paginate(10);

        return view('list-form', [
            'listForm' => $listForm
        ]);
    }

    public function show($advice) {
        $clientAdvice = ClientAdvice::find($advice);
        return view('form-details', compact('clientAdvice'));
    }

    public function search(Request $request)
    {
        $nameOrNum = $request->key_search;
        $listForm = ClientAdvice::where('client_name', 'like', "%{$nameOrNum}%")->orWhere('phone_number', 'like', "%{$nameOrNum}%")->paginate(10);
        return view('list-form', [
            'listForm' => $listForm
        ]);
    }

    public function chart() {
        $tourRate = TourRate::get();
        $accommodationRate = AccommodationRate::get();
        $clientAdvice = ClientAdvice::get();
        $restaurantRate = RestaurantRate::get();
        $tourLeadRate = TourLeadRate::get()->where('foreign','0');
        $foreignTourLeadRate = TourLeadRate::get()->where('foreign','1');
        $otherAdvice = OtherAdvice::get();
        $vehicleRate = VehicleRate::get();
        return view('rate-chart', compact('tourRate', 'accommodationRate', 'clientAdvice', 'restaurantRate', 'tourLeadRate', 'otherAdvice', 'vehicleRate','foreignTourLeadRate'));
    }

    public function filterRateByDate(Request $request) {
        $cvFromDate = str_replace('/', '-', $request->from_date);
        $cvToDate = str_replace('/', '-', $request->to_date);
        $from = date('Y-m-d', strtotime($cvFromDate));
        $to = date('Y-m-d', strtotime($cvToDate));
        $tourRate = TourRate::whereBetween('created_at', [$from, $to])->get();
        $accommodationRate = AccommodationRate::whereBetween('created_at', [$from, $to])->get();
        $clientAdvice = ClientAdvice::whereBetween('created_at', [$from, $to])->get();
        $restaurantRate = RestaurantRate::whereBetween('created_at', [$from, $to])->get();
        $tourLeadRate = TourLeadRate::where('foreign','0')->whereBetween('created_at', [$from, $to])->get();
        $foreignTourLeadRate = TourLeadRate::where('foreign','1')->whereBetween('created_at', [$from, $to])->get();
        $otherAdvice = OtherAdvice::whereBetween('created_at', [$from, $to])->get();
        $vehicleRate = VehicleRate::whereBetween('created_at', [$from, $to])->get();
        return view('rate-chart', compact('tourRate', 'accommodationRate', 'clientAdvice', 'restaurantRate', 'tourLeadRate', 'otherAdvice', 'vehicleRate','foreignTourLeadRate'));
    }

}
