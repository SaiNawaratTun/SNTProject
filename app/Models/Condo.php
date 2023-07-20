<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condo extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function uploadImage(){

        return $this->hasMany(Image::class, 'condo_id', 'id');
    }

    public function amenities(){

        return $this->belongsToMany(Amenities::class,'condo_amenities', 'condo_id', 'amenities_id');
    }

}
