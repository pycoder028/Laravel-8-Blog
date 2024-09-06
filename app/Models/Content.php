<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    protected $table = 'content';

    protected $fillable = [
        'S_blog',
        's_mission',
        'S_vision',
        'f_blog'
    ];


}
