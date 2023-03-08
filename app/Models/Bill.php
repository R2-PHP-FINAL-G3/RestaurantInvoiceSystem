<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoiceCode',
        'delivaryFees',
        'totalPrice',
        'customerId',
    ];

    public function customer()
    {
        return $this->belongsTo(related: Customer::class, foreignKey: 'customerId');
    }
}
