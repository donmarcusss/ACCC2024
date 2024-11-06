<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        // Add task-related fields
        'service_name',
        'equipment_name',
        'note',
        'status',
        'image_path',
        'job_order_id',
        'equipment_price',
        // Other fields...
    ];

    public function jobOrders()
    {
        return $this->belongsTo(JobOrder::class, 'job_order_id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    // Relationship with Equipment model
    public function equipment()
    {
        return $this->belongsTo(Equipment::class, 'equipment_name', 'equipment_name');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
