<?php

namespace Database\Seeders;

use App\Models\Product;
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
       // Product::truncate();

        for($i=0; $i<30; $i++){
            $product_name = $faker->sentence(2);
            DB::table('products')->insert([
                'name' => $product_name,
                'slug' => Str::slug($product_name,'-'),
                'description' => $faker->sentence(6),
                'price' => $faker->randomFloat(3,1,20)
            ]);
        }
    }
}
