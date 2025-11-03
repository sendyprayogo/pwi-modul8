<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    


    public function run(): void
    {
        //query untuk menambah data dummy menggunakan faker pada tabel product
        $faker = \Faker\Factory::create('id_product');
        $faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker));
        

        for ($i=1; $i<=10; $i++){
            DB::table('products')->insert([
            'name_product'=>$faker->foodName(),
            'stock_product'=>$faker->numberBetween(1,50),
            'price_product'=>$faker->randomFloat(2,0,1000),
            'desc_product'=>$faker->sauceName(),
            'id_category'=>$faker->numberBetween(1,3),
            'created_at'=>now()
        ]);
        }
    }
}
