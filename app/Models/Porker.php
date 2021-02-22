<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Porker extends Model
{
    protected $fillable = [
        'email',
        'f_suit',
        'f_number',
        's_suit',
        's_number'
    ];
}
