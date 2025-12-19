<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classrooms = [
            ['id' => Str::uuid(), 'name' => 'Class A', 'class_code' => 'class-a'],
            ['id' => Str::uuid(), 'name' => 'Class B', 'class_code' => 'class-b'],
            ['id' => Str::uuid(), 'name' => 'Class C', 'class_code' => 'class-c'],
            ['id' => Str::uuid(), 'name' => 'Class D', 'class_code' => 'class-d'],
            ['id' => Str::uuid(), 'name' => 'Class E', 'class_code' => 'class-e'],
        ];

        foreach ($classrooms as $classroom) {
           Classroom::create($classroom);
        }
    }
}
