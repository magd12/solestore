<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sneaker extends Model
{
    protected $fillable = ['name', 'colorway', 'release_year', 'description', 'brand_id'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
