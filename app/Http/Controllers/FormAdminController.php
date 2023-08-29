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

    public function chart(Request $request) {
        if(isset($request->from_date) && isset($request->to_date)) {
            $from = Carbon::createFromFormat('d/m/Y',$request->from_date);
            $to = Carbon::createFromFormat('d/m/Y',$request->to_date);
        }
        else {
            $from = Carbon::now()->startOfMonth();
            $to = Carbon::now()->endOfMonth();
        }
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
