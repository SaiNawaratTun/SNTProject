<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Condo;


class Amenities extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function condo(){

        return $this->belongsToMany(Condo::class, 'amenities_condos', 'amenities_id', 'condos_id');
    }
}
