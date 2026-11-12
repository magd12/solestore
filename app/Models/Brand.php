<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['name', 'country', 'description'];

    public function sneakers()
    {
        return $this->hasMany(Sneaker::class);
    }
}
