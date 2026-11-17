<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create ([
            "name" => "Introduction to Batik Racing",
            "lecturer" => "Dr. Darren Batik",
            "course_date" => "2026-01-15",
            "sks" => 3,
            "participants" => 100,
            "must_be_taken" => true
        ]);
        Course::create ([
            "name" => "Advanced Batik Racing Techniques",
            "lecturer" => "Dr. Darren Batik",
            "course_date" => "2026-02-01",
            "sks" => 4,
            "participants" => 75,
            "must_be_taken" => true
        ]);
        Course::create ([
            "name" => "Batik Racing Project Management",
            "lecturer" => "Dr. Darren Batik",
            "course_date" => "2026-03-10",
            "sks" => 2,
            "participants" => 50,
            "must_be_taken" => false
        ]);
        Course::create ([
            "name" => "Batik Racing Design Principles",
            "lecturer" => "Dr. Darren Batik",
            "course_date" => "2026-04-05",
            "sks" => 3,
            "participants" => 25,
            "must_be_taken" => false
        ]);
    }
}
