<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $faker->sentance(3, true),
            'description' => $faker->sentance(6, true),
            'price' => $faker->numberBetween(25, 150),
            'author_id' => $faker->numberBetween(1, 50),
        ];
    }
}
