<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccommodationRate extends Model
{
    use HasFactory;
    protected $table = 'accommodation_rate';
    protected $fillable = [];
    protected $guarded = ['id'];

}
