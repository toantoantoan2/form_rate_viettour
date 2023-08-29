<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourRate extends Model
{
    use HasFactory;
    protected $table = 'tour_rate';
    protected $fillable = [];
    protected $guarded = ['id'];

}
