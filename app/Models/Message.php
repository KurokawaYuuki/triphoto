<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\User;
use app\Models\Trip;

class Message extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
        'message' => 'required',
    );

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function trip()
    {
        return $this->hasOne(Trip::class);
    }
}
