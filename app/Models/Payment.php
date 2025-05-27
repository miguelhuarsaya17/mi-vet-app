<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{   
    protected $fillable = ['amount', 'payments_date', 'method', 'invoice_id'];
    
    public function invoices()
    {
        return $this->hasOne(Invoice::class);
    
    }
}
