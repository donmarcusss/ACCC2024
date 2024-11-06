<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;
    protected $table = 'quotations';
    protected $fillable = [
        'equipment_name',
        'service_name',
        'equipment_price',
        'service_price',
        
    ];


    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    // Relationship to Equipment
    public function equipment()
    {
        return $this->belongsTo(Equipment::class);
    }
}
