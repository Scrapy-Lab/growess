<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubService extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function service(){

        return $this->belongsTo(Service::class);
    }

    public function products(){

        return $this->hasMany(Product::class, 'sub_services_id');
    }
}
