<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // DB::table('categories')->truncate();
        $id = DB::table('categories')->insertGetId([
            'name' => 'Elektronik',
            'slug' => 'elektronik'
        ]);
        DB::table('categories')->insert(['name' => 'Bilgisayar/Tablet', 'slug' => 'bilgisayar-tablet','sub_category_id' => $id]);
        DB::table('categories')->insert(['name' => 'Telefon', 'slug' => 'telefon','sub_category_id' => $id]);
        DB::table('categories')->insert(['name' => 'Tv ve Ses Sistemleri', 'slug' => 'tv-ses-sistemleri','sub_category_id' => $id]);
        DB::table('categories')->insert(['name' => 'Kamera', 'slug' => 'kamera','sub_category_id' => $id]);

        $id = DB::table('categories')->insertGetId([
            'name' => 'Kitap',
            'slug' => 'kitap'
        ]);
        DB::table('categories')->insert(['name' => 'Edebiyat', 'slug' => 'edebiyat','sub_category_id' => $id]);
        DB::table('categories')->insert(['name' => 'Çocuk', 'slug' => 'cocuk','sub_category_id' => $id]);
        DB::table('categories')->insert(['name' => 'Sınavlara Hazırlık', 'slug' => 'sinavlara-hazirlik','sub_category_id' => $id]);


        DB::table('categories')->insert([
            'name' => 'Dergi',
            'slug' => 'dergi'
        ]);
        DB::table('categories')->insert([
            'name' => 'Mobilya',
            'slug' => 'mobilya'
        ]);
        DB::table('categories')->insert([
            'name' => 'Dekorasyon',
            'slug' => 'dekorasyon'
        ]);
        DB::table('categories')->insert([
            'name' => 'Kozmetik',
            'slug' => 'kozmetik'
        ]);
        DB::table('categories')->insert([
            'name' => 'Kişisel Bakım',
            'slug' => 'kisisel-bakim'
        ]);
        DB::table('categories')->insert([
            'name' => 'Giyim ve Moda',
            'slug' => 'giyim-moda'
        ]);
    }
}
