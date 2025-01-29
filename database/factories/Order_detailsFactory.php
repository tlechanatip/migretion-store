<?php

namespace Database\Factories;

use App\Models\Order_details;
use App\Models\Products;
use App\Models\Orders;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orders_details>
 */
class Order_detailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Order_details::class;

    public function definition(): array
    {
        $product = Products::inRandomOrder()->first();
        $quantity = $this->faker->numberBetween(1, 5);

        return [
            'order_id' => Orders::inRandomOrder()->first(),
            'product_id' => $product->id,
            'quantity' => $quantity,
            'price' => $product->price * $quantity,
        ];
    }
}
