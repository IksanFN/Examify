<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use UUID;

    protected $fillable = [
        'name',    
    ];
}
