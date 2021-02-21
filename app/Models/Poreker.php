<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poreker extends Model
{
    protected $fillable = [
        'email',
        'first_hand',
        'second_hand',
    ];
}
