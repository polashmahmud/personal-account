<?php

namespace Database\Factories;

use App\Models\Bazar;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class BazarFactory extends Factory
{
    protected $model = Bazar::class;

    public function definition()
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'title'      => $this->faker->word(),
            'amount'     => $this->faker->word(),
            'increase'   => $this->faker->randomFloat(),
            'type'       => $this->faker->word(),
        ];
    }
}
