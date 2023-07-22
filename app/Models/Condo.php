<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\amenities;

class Condo extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function uploadImage(){

        return $this->hasMany(Image::class, 'condo_id', 'id');
    }

    public function amenities(){

        return $this->belongsToMany(Amenities::class,'amenities_condos', 'condos_id', 'amenities_id');
    }

}
