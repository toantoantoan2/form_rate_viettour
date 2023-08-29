<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\hasOne;
use Illuminate\Database\Eloquent\Relations\hasMany;
use Illuminate\Database\Eloquent\Model;

class ClientAdvice extends Model
{
    use HasFactory;
    protected $table = 'client_advice';
    protected $guarded = ['id'];
    public function clientOtherAdvice(): hasOne
    {
        return $this->hasOne(OtherAdvice::class, 'advice_id', 'id');
    }

    public function clientLeadTourRate(): hasOne
    {
        return $this->hasOne(TourLeadRate::class, 'advice_id', 'id')->where('foreign','=',0);
    }

    public function clientForeignLeadTourRate(): hasOne
    {
        return $this->hasOne(TourLeadRate::class, 'advice_id', 'id')->where('foreign','=',1);
    }

    public function clientRestaurantRate(): hasOne
    {
        return $this->hasOne(RestaurantRate::class, 'advice_id', 'id');
    }

    public function clientVehicleRate(): hasOne
    {
        return $this->hasOne(VehicleRate::class, 'advice_id', 'id');
    }

    public function clientTourRate(): hasOne
    {
        return $this->hasOne(TourRate::class, 'advice_id', 'id');
    }

    public function clientAccommodationRate(): hasOne
    {
        return $this->hasOne(AccommodationRate::class, 'advice_id', 'id');
    }

}
