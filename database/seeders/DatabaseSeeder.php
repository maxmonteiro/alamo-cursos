<?php

namespace Database\Seeders;

use App\Models\Models\Course;
use App\Models\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();

        Course::create([
            'name' => 'Técnico em Informática', 
            'workload'  => 800
        ]);
        Course::create([
            'name' => 'Análise de Sistemas', 
            'workload'  => 1800
        ]);

        Student::create([
            'name' => 'John Doe',
            'enrollment' => '201902asdf'
        ]);
        Student::create([
            'name' => 'Maria Hill',
            'enrollment' => '201902gfse'
        ]);
        Student::create([
            'name' => 'Sarah Heyes',
            'enrollment' => '201902gfse'
        ]);
        Student::create([
            'name' => 'kim Shawn',
            'enrollment' => '202001sfse'
        ]);
        Student::create([
            'name' => 'Claire Kahn',
            'enrollment' => '202001sasf'
        ]);
        Student::create([
            'name' => 'William Lesa',
            'enrollment' => '202001sfwd'
        ]);
    }
}
