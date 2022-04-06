<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'book_id'=>mt_rand(1,50),
            'content' =>collect($this->faker->paragraphs(mt_rand(5,10)))->map(fn($p)=>"<p>$p</p>")->implode('')
        ];
    }
}
