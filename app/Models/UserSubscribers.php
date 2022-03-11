<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSubscribers extends Model
{
    use HasFactory;

    protected $table = "subscriber_user";

    protected $fillable = ['user_id', 'subscriber_id'];
}
