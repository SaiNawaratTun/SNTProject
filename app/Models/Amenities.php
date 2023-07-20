<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenities extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function condo(){

        return $this->belongsToMany(Condo::class, 'condo_amenities', 'amenities_id', 'condo_id');
    }
}
