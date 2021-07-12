<?php

namespace Database\Factories;

use App\Models\Sitelinks;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SitelinkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sitelinks::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'icon' => 'home',
            'url' => $this->faker->url,
            'parentId' => $this->faker->randomNumber(),
            'params' => $this->faker->sentence,
            'active' => 1,
        ];
    }
}
