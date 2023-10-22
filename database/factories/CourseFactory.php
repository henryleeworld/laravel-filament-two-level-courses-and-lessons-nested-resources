<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'company_id' => Company::factory(),
        ];
    }
}
