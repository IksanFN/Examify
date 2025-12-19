<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use UUID;

    protected $fillable = [
        'name',
        'class_code',
        'description',
    ];
}
