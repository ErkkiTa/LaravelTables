<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raja extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'rajas';

    public function andurid()
    {
        return $this->hasMany(Anduri::class);
    }
}
