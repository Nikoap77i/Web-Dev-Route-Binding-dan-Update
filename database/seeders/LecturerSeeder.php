<?php

namespace Database\Seeders;

use App\Models\Lecturer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lecturer::create([
            "name" => "Dr. John Doe",
            "age" => 45,
            "date_joined" => "2010-08-15",
            "specialization" => "Computer Science",
            "is_active" => true
        ]);
        Lecturer::create([
            "name" => "Dr. Darren Batik",
            "age" => 19,
            "date_joined" => "2023-07-11",
            "specialization" => "Dr Racing",
            "is_active" => true
        ]);
    }
}
