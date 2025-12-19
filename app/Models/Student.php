<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use UUID;

    protected $fillable = [
        'classroom_id',
        'nisn',
        'name',
        'password',
        'gender',
    ];

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }
}
