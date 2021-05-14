<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Company::class;

    /**
     * @return array
     */
    public function definition()
    {
        return [
            'name'      => $this->faker->name(),
            'email'     => $this->faker->safeEmail(),
            'logo'      => 'it is logo',
            'website'   => $this->faker->name()
        ];
    }
}
