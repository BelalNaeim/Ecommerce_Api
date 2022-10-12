<?php

namespace Database\Factories;

use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Review::class;

    public function definition()
    {
        return [
            //
            'product_id'=>function(){
            return Product::all()->random();
            },
            'customer'=>$this->faker->name,
            'review'=>$this->faker->paragraph,
            'star'=>$this->faker->numberBetween(0,5)
        ];
    }
}
