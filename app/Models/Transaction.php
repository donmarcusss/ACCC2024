<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'transactions'; // Ensure this is correct
    protected $fillable = ['total', 'balance', 'down_payment', 'status'];


    public function transactions()
{
    return $this->hasMany(Transaction::class);
}

public function jobOrder()
{
    return $this->belongsTo(JobOrder::class);
}
}
