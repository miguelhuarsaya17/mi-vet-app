<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diagnose extends Model
{   
    protected $fillable = ['description', 'treatment', 'querie_id'];
    public function queries()
    {
        return $this->belongsTo(Querie::class);
    }
}
