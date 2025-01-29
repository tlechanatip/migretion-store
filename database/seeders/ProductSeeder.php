<?php
namespace Database\Seeders;

use App\Models\Order_details;
use App\Models\Customers;
use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class ProductSeeder extends Seeder
{
 /**
 * Run the database seeds.
 */
 public function run(): void
 {
    Customers::factory(1)->create();
    Products::factory(1)->create();
    $Order_datails = Order_details::factory(10)->create();
    $this->call(
        OrderSeeder::class,
    );
 }
}
