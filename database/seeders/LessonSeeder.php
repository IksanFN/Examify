<?php

namespace Database\Seeders;

use App\Models\Lesson;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lessons = [
            ['id' => Str::uuid(),  'name' => 'Mathematics', 'slug' => 'mathematics'],
            ['id' => Str::uuid(), 'name' => 'Science', 'slug' => 'science'],
            ['id' => Str::uuid(), 'name' => 'History', 'slug' => 'history'],
            ['id' => Str::uuid(), 'name' => 'Geography', 'slug' => 'geography'],
            ['id' => Str::uuid(), 'name' => 'English', 'slug' => 'english'],
        ];

            // General error: 1364 Field 'id' doesn't have a default value (Connection: mysql, SQL: insert ito `lessons` (`name`, `slug`, `updated_at`, `created_at`) values (Mathematics, mathematics, 2025-12-19 10:29:47, 2025-12-19 10:29:47))
            foreach ($lessons as $lesson) {
           Lesson::create($lesson);
        }

    }
}
