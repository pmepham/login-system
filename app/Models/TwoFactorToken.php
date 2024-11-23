<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TwoFactorToken extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'token',
        'expires_at'
    ];
}
