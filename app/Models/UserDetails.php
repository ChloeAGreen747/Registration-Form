<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userDetails extends Model
{
    use HasFactory;

    //fillable means these values are mass assignable
    protected $fillable = [
        'username',
        'password',
        'email',
        'url',
        'date_of_birth'
    ];

    protected $table = "userdetails";
}
