<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantRate extends Model
{
    use HasFactory;
    protected $table = 'restaurant_rate';
    protected $fillable = [];
    protected $guarded = ['id'];

}
