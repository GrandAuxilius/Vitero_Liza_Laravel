<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class USers extends Model
{
    protected $fillable = ['username', 'password', 'name'];
    
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}