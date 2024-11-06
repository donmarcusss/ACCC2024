<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobOrder extends Model
{
    use HasFactory;
    protected $fillable = [
        'booking_id',
        'first_name',
        'user_id',
        'vehicle_manufacturer',
        'vehicle_type',
        'vehicle_model',
        'status',
        'task_id',
        'total',

        

        
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); // Assuming your User model is in App\Models\User
    }

    // Define the relationship with the Task model
    public function task()
    {
        return $this->belongsTo(Task::class); // Assuming your Task model is in App\Models\Task
    }
    
    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id');
    }
    
    public function getFormattedIdAttribute()
    {
        return 'JO-' . str_pad($this->id, 5, '0', STR_PAD_LEFT);
    }


    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id');
    }

  
}