<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class SellerFactory extends Factory
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
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'condition' => "new",
            "category_name" => "nkad",
            "cover_image" => $this->faker->image('assets/images', 400, 300),
            "uniqueId" => $this->faker->randomText([1, 10]),
            'remember_token' => Str::random(10),
            'description' => $this->faker->text(1000),
            "starting_date" => "11",
            "ending_date" => $this->faker->dateTimeThisMonth(),
            "ending_bid" => "0",
            "ended_price" => "1000",


        ];
    }
}
