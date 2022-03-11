<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'received',
    ];
    public function users()
    {
        return $this->belongsToMany(User::class,'subscriber_user','subscriber_id','user_id');
    }
}
