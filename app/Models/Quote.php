<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{   
    protected $fillable = ['quote_date', 'shift','reason' , 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function queries()
    {
        return $this->hasOne(Querie::class);
    }
}
