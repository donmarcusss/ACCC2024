<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;
    protected $table = 'equipments';
    protected $fillable = [
        'equipment_name',
        'equipment_price',
        'equipment_quantity',
        'equipment_unit',
        'service_id',

    ];


    public function quotations()
    {
        return $this->hasMany(Quotation::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    
}
