<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;

class ExamGroup extends Model
{
    use UUID;

    protected $fillable = [
        'exam_id',
        'exam_session_id',
        'student_id',
    ];

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }

    public function examSession()
    {
        return $this->belongsTo(ExamSession::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
