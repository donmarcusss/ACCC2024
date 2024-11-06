<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleModel extends Model
{
    use HasFactory;
    protected $fillable = [

        'vehicle_type_id',
        'vehicle_manufacturer_id',
        'model',
    ];


    public function vehicleType()
    {
        return $this->belongsTo(VehicleType::class);
    }

    public function vehicleManufacturer()
    {
        return $this->belongsTo(VehicleManufacturer::class);
    }

}
