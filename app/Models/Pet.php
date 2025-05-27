<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{   
    protected $fillable = ['name', 'type', 'weight', 'user_id'];


    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function queries()
    {
        return $this->hasMany(Querie::class);
    }

}
