<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use UUID;

    protected $fillable = [
        'exam_id',
        'question',
        'option_1',
        'option_2',
        'option_3',
        'option_4',
        'option_5',
        'answer',
    ];

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }
}
