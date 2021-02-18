<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Porker extends Model
{
    use HasFactory;
    //テーブル名
    protected $table = 'porkers';

    // 可変項目
    protected  $fillable =
    [
        'hand'
    ];
}
