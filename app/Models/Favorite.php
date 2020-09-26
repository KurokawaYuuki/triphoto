<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Trip;
use app\Models\User;


class Favorite extends Model
{
    public function users()
    {
        return $this->hasOne(User::class);
    }
    
    public function trip()
    {
        return $this->hasOne(Trip::class);
    }
}
