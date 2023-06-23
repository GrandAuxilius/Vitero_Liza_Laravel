<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tempo_bill extends Model
{
    use HasFactory;
    protected $table = 'tempo_bill';
    public $timestamps = false;
    protected $fillable = [
        'prev',
        'client'
    ];
}
