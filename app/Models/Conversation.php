<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;
    protected $fillable = [
        'sender_id',
        'receiver_id',
    ];

    // relations

    public function Messages()
    {
        return $this->hasMany(Messages::class);
    }
    public function User()
    {
        return $this->belongsTo(User::class);
    }

}
