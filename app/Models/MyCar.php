<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyCar extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'vehicle_name',
        'vehicle_type',
        'vehicle_manufacturer',
        'vehicle_model',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the vehicle that the car belongs to.
     */
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }


    public function vehicleType()
    {
        return $this->belongsTo(VehicleType::class, 'vehicle_type', 'id');
    }

    public function vehicleManufacturer()
    {
        return $this->belongsTo(VehicleManufacturer::class, 'vehicle_manufacturer', 'id');
    }

    public function vehicleModel()
    {
        return $this->belongsTo(VehicleModel::class, 'vehicle_model', 'id');
    }
}
