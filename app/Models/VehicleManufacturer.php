<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleManufacturer extends Model
{
    use HasFactory;
    protected $fillable = [
        'manufacturer',
        
    ];


    public function vehicleModels()
    {
        return $this->hasMany(VehicleModel::class);
    }

    // public function manufacturers()
    // {
    //     return $this->belongsTo(VehicleType::class, 'vehicle_type_id');
    // }
    
    // public function models()
    // {
    //     return $this->hasMany(VehicleModel::class, 'vehicle_manufacturer_id');
    // }
}
