<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Prefectures;
use app\Models\Season;
use app\Models\Emotion;
use app\Models\Favorite;
use app\Models\Message;

class Trip extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
        'title' => 'required',
        'comment' => 'required',
    );

    public function prefecture()
    {
        return $this->hasOne(Prefecture::class);
    }

    public function season()
    {
        return $this->hasOne(Season::class);
    }

    public function emotion()
    {
        return $this->hasOne(Emotion::class);
    }

    public function favorite()
    {
        return $this->belongsTo(Favorite::class);
    }

    public function message()
    {
        return $this->belongsTo(Message::class);
    }
}

