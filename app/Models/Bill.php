<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $table = 'bill';
    public $timestamps = false;
    protected $fillable = [
        'lname',
        'fname',
        'address',
        'contact'
    ];
}
