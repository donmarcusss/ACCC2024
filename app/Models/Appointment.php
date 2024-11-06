<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'first_name', 
        'last_name', 
        'email', 
        'phone_number', 
        'vehicle_manufacturer', 
        'vehicle_model', 
        'vehicle_type', 
        'description', 
        'booking_date', 
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function booking()
{
    return $this->belongsTo(Booking::class);

}


public function getFormattedIdAttribute()
    {
        // Assuming 'id' is the field you want to format
        // Adjust the formatting logic as needed
        return 'APPO-' . str_pad($this->id, 4, '0', STR_PAD_LEFT);
    }
}
