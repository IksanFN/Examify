<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use UUID;

    protected $fillable = [
        'exam_id',
        'exam_session_id',
        'question_id',
        'student_id',
        'question_order',
        'answer_order',
        'answer',
        'is_correct',
    ];

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }

    public function examSession()
    {
        return $this->belongsTo(ExamSession::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
