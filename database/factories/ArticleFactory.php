<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [   
                'title' => $this->faker->name(),
                'body' => $this->faker->name(),
                'user_id'  => User::all()->random()->id         
        ];
      
        
    }
}
