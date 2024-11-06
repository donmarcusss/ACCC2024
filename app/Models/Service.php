<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $fillable = [
        'service_name',
        // 'service_price',
    ];


    public function quotations()
    {
        return $this->hasMany(Quotation::class);
    }


    public function equipments()
    {
        return $this->hasMany(Equipment::class);
    }

    
}
