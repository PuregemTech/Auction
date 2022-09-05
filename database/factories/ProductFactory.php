<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->bothify('pencil'),
            "user_id" =>   $this->faker->randomElement([1, 10]),
            
            'condition' => "new",
            "category_name" => "nkad",
            "cover_image" => $this->faker->image('public/assets/images', 400, 300),
            "uniqueId" => $this->faker->randomElement([1, 2]),
            
            'description' => $this->faker->text(1000),
            "starting_date" => "11",
            "ending_date" => $this->faker->dateTimeThisMonth(),
            "ended_bid" =>$this->faker->randomElement([1, 2]),
            "price" => "1000",
            "category"=>$this->faker->randomElement([1, 5]),
        ];
    }
}
