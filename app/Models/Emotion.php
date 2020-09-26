<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Trip;

class Emotion extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
        'emotion' => 'required',
    );

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }
}
