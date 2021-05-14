<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Employee::class;

    /**
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'company_id' => 12,
            'email' => $this->faker->email(),
            'phone' => $this->faker->phoneNumber(),
        ];
    }
}
