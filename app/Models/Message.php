<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use SoftDeletes;

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