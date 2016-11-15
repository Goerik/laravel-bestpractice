<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'status',
        'message',
        'from_user_id',
        'to_user_id',
    ];

    public function sender()
    {
        return $this->hasOne(User::class, 'id', 'from_user_id');
    }

    public function receiver()
    {
        return $this->hasOne(User::class, 'id', 'to_user_id');
    }
}