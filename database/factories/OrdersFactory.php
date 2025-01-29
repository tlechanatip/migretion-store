<?php

namespace Database\Factories;

use App\Models\Orders;
use App\Models\Customers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orders>
 */
class OrdersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Orders::class;

    public function definition()
    {
        return [
            'customer_id' => Customers::inRandomOrder()->first()->id,
            'order_date' => $this->faker->dateTimeThisYear(),
            'total_amount' => $this->faker->randomFloat(2, 100, 1000),
        ];
    }
}
