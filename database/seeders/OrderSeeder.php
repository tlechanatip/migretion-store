<?php

namespace Database\Seeders;

use App\Models\Orders_details;
use App\Models\Orders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // สร้างคำสั่งซื้อ 20 รายการ
        Orders::factory(1)->create()->each(function ($order) {
            // Ordersdetails::factory(rand(1, 5))->create(['order_id' => $order->id]);
        });
    }
}
