<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourLeadRate extends Model
{
    use HasFactory;
    protected $table = 'tour_lead_rate';
    protected $fillable = [];
    protected $guarded = ['id'];

}
