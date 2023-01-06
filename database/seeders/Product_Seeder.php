<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Product_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Apple MacBook',
                'price'=>'500000',
                'category'=>'Laptop',
                'gallery'=>"https://images.pexels.com/photos/4669986/pexels-photo-4669986.jpeg",
                'description'=>'Apple Laptop'
           ],
           [
            'name'=>'Apple Watch',
            'price'=>'100000',
            'category'=>'Smart Watch',
            'gallery'=>"https://images.pexels.com/photos/437037/pexels-photo-437037.jpeg",
            'description'=>'Smart Watch'
           ],
           [
            'name'=>'iPad',
            'price'=>'15000',
            'category'=>'Smart Tablet',
            'gallery'=>"https://images.pexels.com/photos/1334597/pexels-photo-1334597.jpeg",
            'description'=>'Smart Tablet'
           ],
           [
            'name'=>'Samsung Tablet',
            'price'=>'50000',
            'category'=>'Smart Tablet',
            'gallery'=>"https://images.pexels.com/photos/430546/pexels-photo-430546.jpeg",
            'description'=>'Smart Tablet'
           ],
           [
            'name'=>'AirPods',
            'price'=>'25000',
            'category'=>'Hanfree',
            'gallery'=>"https://images.pexels.com/photos/1646704/pexels-photo-1646704.jpeg",
            'description'=>'Hanfree'
           ],
           [
            'name'=>'MI PowerBank',
            'price'=>'10000',
            'category'=>'Charger',
            'gallery'=>"https://images.pexels.com/photos/4812315/pexels-photo-4812315.jpeg",
            'description'=>'Charger'
           ]
        ]);
    }
}
