<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $fillable=[
        'stars_rated','post_id','user_id',
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function posts()
    {
        return $this->belongsTo('App\Models\Post');
    }
}
