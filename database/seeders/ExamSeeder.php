<?php

namespace Database\Seeders;

use App\Models\Exam;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $exams = [
            ['name' => 'Midterm Exam', 'lesson_id' => '1', 'classroom_id' => '1', 'duration' => 90, 'description' => 'Midterm examination for Class A'],
            ['name' => 'Final Exam', 'lesson_id' => '2', 'classroom_id' => '2', 'duration' => 120, 'description' => 'Final examination for Class B'],
            ['name' => 'Quiz 1', 'lesson_id' => '3', 'classroom_id' => '3', 'duration' => 30, 'description' => 'First quiz for Class C'],
            ['name' => 'Quiz 2', 'lesson_id' => '4', 'classroom_id' => '4', 'duration' => 30, 'description' => 'Second quiz for Class D'],
            ['name' => 'Practice Test', 'lesson_id' => '5', 'classroom_id' => '5', 'duration' => 60, 'description' => 'Practice test for Class E'],
        ];

        foreach ($exams as $exam) {
           Exam::create($exam);
        }
    }
}
