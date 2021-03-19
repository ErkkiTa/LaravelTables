<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anduri extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'anduris';

    public function rada()
    {
        return $this->belongsTo(Raja::class, 'raja_id');
    }
}
