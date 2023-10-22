<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companies = [
            Company::find(1),
            Company::find(2)
        ];
        foreach ($companies as $company) {
            Course::factory()
                ->count(10)
                ->has(Lesson::factory()->count(20)->for($company))
                ->create([
                    'company_id' => $company->id,
                ]);
        }
    }
}
