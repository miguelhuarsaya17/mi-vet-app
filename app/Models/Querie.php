<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Querie extends Model
{
    protected $fillable = ['querie_date', 'description', 'quote_id', 'user_id', 'pet_id'];
    public function quotes()
    {
        return $this->belongsTo(Quote::class);
    }

    public function pets()
    {
        return $this->belongsTo(Pet::class);
    }
    public function diagnoses()
    {
        return $this->hasMany(Diagnose::class);
    }
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
    // Querie.php
    public function user()
    {
        return $this->hasOneThrough(User::class, Quote::class, 'id', 'id', 'quote_id', 'user_id');
    }
}
