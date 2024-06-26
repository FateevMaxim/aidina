<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrackList extends Model
{
    protected $fillable =
        [
            'user_id',
            'track_code',
            'to_china',
            'reg_china',
            'reg_almaty',
            'reg_client',
            'to_shimkent',
            'detail',
            'status',
        ];
    protected $hidden =
        [
            'created_at',
            'updated_at'
        ];
}
