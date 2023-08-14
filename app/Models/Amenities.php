<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Condo;
use App\Models\Apartment;


class Amenities extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function condo(){

        return $this->belongsToMany(Condo::class, 'amenities_condos', 'amenities_id', 'condos_id');
    }

    public function apartment(){

        return $this->belongsToMany(Apartment::class, 'amenities_apartments', 'amenities_id', 'appartment_id');
    }
}
