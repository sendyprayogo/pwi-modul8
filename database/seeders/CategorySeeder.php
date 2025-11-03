<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('category_product')->insert([[
            'id_category'=>'1',
            'category_name'=>'Makanan US',
            'description'=>'Berisikan list makanan sedap khas Eropa',
            'created_at'=>now()
            ],[
                'id_category'=>'2',
                'category_name'=>'Makanan Asia',
                'description'=>'Berisikan list makanan sedap khas Asia',
                'created_at'=>now()
            ],[
                'id_category'=>'3',
                'category_name'=>'Makanan Ringan',
                'description'=>'Berisikan list makanan ringan',
                'created_at'=>now()
            ]
        ]);
    }
}
