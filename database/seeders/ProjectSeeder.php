<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            "title" => "Darren Website Project",
            "semester" => 1,
            "start_date" => "2023-01-01",
            "end_date" => "2023-06-30",
            "description" => "This is Darren Website's first project.",
            "active" => false
        ]);
        Project::create([
            "title" => "Darren Batik Project",
            "semester" => 6,
            "start_date" => "2026-01-01",
            "end_date" => null,
            "description" => "This is Darren Batik's first project.",
            "active" => true
        ]);

        Project::factory()->count(20)->create();
    }
}
