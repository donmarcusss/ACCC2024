<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'vehicle_manufacturer',
        'vehicle_type',
        'vehicle_model',
        'description',
        'status',
        'booking_date',
        

        
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); // Define the relationship
    }
    

    public function getFormattedIdAttribute()
    {
        return 'BOOK-' . str_pad($this->id, 5, '0', STR_PAD_LEFT);
    }
    
    public function jobOrder()
    {
        return $this->hasMany(JobOrder::class, 'task_id');
    }

    public function appointments()
{
    return $this->hasMany(Appointment::class);
}
  
}
