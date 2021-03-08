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
        //Product Seeder for single Product
//         DB::table('products')->insert([
//             'name' => 'Cotton Saree',
//             "price" => "Rs.1500",
//             "description" => "Cotton Handloom Saree With Unstitched Blouse",
//             "category" => "Saree",
//             "gallery"=> "D:\laravel\img-project\GC-Mustard-Golden.jpg",
//  ]);

       //Product Seeder for Multiple Products

       DB::table('products')->insert([
       [    
        'name' => 'Cotton Saree',
        "price" => "Rs.1500",
        "description" => "Cotton Handloom Saree With Unstitched Blouse",
        "category" => "Saree",
        "gallery"=> "D:\laravel\img-project\GC-Mustard-Golden.jpg",
       ],
       [    
        'name' => 'Silk Saree',
        "price" => "Rs.20000",
        "description" => "Silk Handloom Saree With Unstitched Blouse",
        "category" => "Saree",
        "gallery"=> "D:\laravel\img-project\GC-Red-Wedding.jpg",
       ],
       [    
        'name' => 'Cotton Saree',
        "price" => "Rs.2500",
        "description" => "Cotton Handloom Saree With Unstitched Blouse",
        "category" => "Saree",
        "gallery"=> "D:\laravel\img-project\Pink-Yellow-Saree.jpg",
       ],
       [    
        'name' => 'Banarsee Saree',
        "price" => "Rs.1550",
        "description" => "Banarsee Handloom Saree With Unstitched Blouse",
        "category" => "Saree",
        "gallery"=> "D:\laravel\img-project\Blue-White-Saree.jpg",
       ],
       [    
        'name' => 'Synthetic Saree',
        "price" => "Rs.1200",
        "description" => "Synthetic Handloom Saree With Unstitched Blouse",
        "category" => "Saree",
        "gallery"=> "D:\laravel\img-project\GC-Sky-Blue.jpg",
       ],
]);


    }
}
