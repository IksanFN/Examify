<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use UUID;

    protected $fillable = [
        'name',
        'lesson_id',
        'classroom_id',
        'duration',
        'description',
        'random_questions',
        'radom_answers',
        'show_answers',
    ];

    protected $casts = [
        'duration' => 'integer',
    ];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }
}
