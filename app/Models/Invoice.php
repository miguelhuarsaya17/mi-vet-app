<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{   
    protected $fillable = ['details', 'invoices_date', 'amount', 'status', 'querie_id'];
    public function queries()
    {
        return $this->belongsTo(Querie::class);
    }
    public function payments()
    {
        return $this->hasOne(Payment::class);
    }
}
