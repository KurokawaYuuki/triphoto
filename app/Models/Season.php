<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Trip;

class Season extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
        'season' => 'required',
    );

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }
}
