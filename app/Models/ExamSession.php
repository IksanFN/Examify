<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;

class ExamSession extends Model
{
    use UUID;

    protected $fillable = [
        'exam_id',
        'name',
        'start_time',
        'end_time',
    ];

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }
}
