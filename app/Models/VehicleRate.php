<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleRate extends Model
{
    use HasFactory;
    protected $table = 'vehicle_rate';
    protected $fillable = [];
    protected $guarded = ['id'];

}
