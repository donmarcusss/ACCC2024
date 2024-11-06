<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleType extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
    ];


    public function vehicleManufacturer()
    {
        return $this->belongsTo(VehicleManufacturer::class);
    }

    public function vehicleModels()
    {
        return $this->hasMany(VehicleModel::class);
    }
}



