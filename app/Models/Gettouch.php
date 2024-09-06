<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gettouch extends Model
{
    use HasFactory;

    protected $table = 'gettouch';

    protected $fillable = [
        'name',
        'slug',
        'description'
    ];

}
