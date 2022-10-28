<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductDetail;
use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Product::truncate();
        ProductDetail::truncate();

        for($i=0; $i<30; $i++){
            $product_name = $faker->sentence(2);
            $product = Product::create([
                'name' => $product_name,
                'slug' => Str::slug($product_name,'-'),
                'description' => $faker->sentence(6),
                'price' => $faker->randomFloat(3,1,20)
            ]);

            $detail = $product->detail()->create([
                'show_slider' => rand(0,1),
                'show_day_opportunity' => rand(0,1),
                'show_featured' => rand(0,1),
                'show_bestseller' => rand(0,1),
                'show_discount' => rand(0,1),
            ]);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    }
}
