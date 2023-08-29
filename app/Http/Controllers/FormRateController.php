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


class FormRateController extends Controller
{

    public function index() {
        return view('form');
    }

    public function create(Request $req){

        $clientAdvice = ClientAdvice::create([
            'client_name'       => $req->fullname,
            'company_name'      => $req->fullname_company,
            'general_thinking'  => $req->general_thinking,
            'phone_number'      => $req->phone_num,
            'email'             => $req->email,
            'date_of_birth'     => $req->birthday,
            'address'           => $req->address,
            'tour_name'         => $req->tour_name,
            'lead_tour_name'    => $req->tour_lead,
            'start_day'         => $req->start_day,
            'back_day'          => $req->back_day,
        ]);

        $otherAdvice = OtherAdvice::create([
            'advice_id'             => $clientAdvice->id,
            'how_to_know'           => $req->how_to_know,
            'domestic_viettour_before'     => $req->domestic_viettour_before,
            'foreign_viettour_before'      => $req->foreign_viettour_before,
            'tour_factor'           => $req->tour_factor,
            'other_advice'          => $req->other_advice,
            'tour_type_1'           => $req->tour_type_1,
            'tour_type_2'           => $req->tour_type_2,
            'tour_type_3'           => $req->tour_type_3,
            'tour_type_4'           => $req->tour_type_4,
            'tour_type_5'           => $req->tour_type_5,
            'tour_type_other'       => $req->tour_type_other,
        ]);

        $accommodationRate = AccommodationRate::create([
            'advice_id'                 => $clientAdvice->id,
            'accommodation_room'        => $req->accommodation_room,
            'accommodation_position'    => $req->accommodation_position,
            'accommodation_attidude'    => $req->accommodation_attidude,
            'accommodation_other'       => $req->accommodation_other,
        ]);

        $restaurantRate = RestaurantRate::create([
            'advice_id'             => $clientAdvice->id,
            'restaurant_dinner'     => $req->restaurant_dinner,
            'restaurant_clean'      => $req->restaurant_clean,
            'restaurant_attitude'   => $req->restaurant_attitude,
            'restaurant_shopping'   => $req->restaurant_shopping,
            'restaurant_other'      => $req->restaurant_other,
        ]);

        $tourLeadRate = TourLeadRate::create([
            'advice_id'             => $clientAdvice->id,
            'foreign'               => 0,
            'tour_lead_attitude'    => $req->tour_lead_attitude,
            'tour_lead_uniform'     => $req->tour_lead_uniform,
            'tour_lead_friendly'    => $req->tour_lead_friendly,
            'tour_lead_enthusiasm'  => $req->tour_lead_enthusiasm,
            'tour_lead_listen'      => $req->tour_lead_listen,
            'tour_lead_specialize'  => $req->tour_lead_specialize,
            'tour_lead_knowledge'   => $req->tour_lead_knowledge,
            'tour_lead_situation'   => $req->tour_lead_situation,
            'tour_lead_voice'       => $req->tour_lead_voice,
            'tour_lead_other'       => $req->tour_lead_other,
        ]);

        $foreignTourLeadRate = TourLeadRate::create([
            'advice_id'             => $clientAdvice->id,
            'foreign'               => 1,
            'tour_lead_attitude'    => $req->foreign_tour_lead_attitude,
            'tour_lead_uniform'     => $req->foreign_tour_lead_uniform,
            'tour_lead_friendly'    => $req->foreign_tour_lead_friendly,
            'tour_lead_enthusiasm'  => $req->foreign_tour_lead_enthusiasm,
            'tour_lead_listen'      => $req->foreign_tour_lead_listen,
            'tour_lead_specialize'  => $req->foreign_tour_lead_specialize,
            'tour_lead_knowledge'   => $req->foreign_tour_lead_knowledge,
            'tour_lead_situation'   => $req->foreign_tour_lead_situation,
            'tour_lead_voice'       => $req->foreign_tour_lead_voice,
            'tour_lead_other'       => $req->foreign_tour_lead_other,
        ]);

        $tourRate = TourRate::create([
            'advice_id'             => $clientAdvice->id,
            'tour_trip'             => $req->tour_trip,
            'tour_time'             => $req->tour_time,
            'tour_sight_seeing'     => $req->tour_sight_seeing,
            'tour_shopping'         => $req->tour_shopping,
            'tour_other'            => $req->tour_other,
        ]);

        $vehicleRate = VehicleRate::create([
            'advice_id'             => $clientAdvice->id,
            'vehicle_quality'       => $req->vehicle_quality,
            'vehicle_attidude'      => $req->vehicle_attidude,
            'vehicle_safety'        => $req->vehicle_safety,
            'vehicle_clean'         => $req->vehicle_clean,
            'vehicle_other'         => $req->vehicle_other,
        ]);
        return redirect()->route('form-rate.index');
    }
}
