<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create( 
            [
            
            'name' => 'Tablet',
            'description' => 'In your github fork, you need to keep your master branch clean, by clean I mean without any changes, like that you can create at any .',
            'image' => 'https://cdn.vox-cdn.com/thumbor/zsN7pwvp2pmF8Jpbtg7iNGLo1CY=/0x0:1500x1000/1200x800/filters:focal(630x380:870x620)/cdn.vox-cdn.com/uploads/chorus_image/image/58941723/akrales_160708_1123_A_0039.0.0.jpg',
            'price' => '95'
        
          ]

    );
        Product::create(
        [
            
            'name' => 'Blue roses',
            'description' => 'In your github fork, you need to keep your master branch clean, by clean I mean without any changes, like that you can create at any .',
            'image' => 'https://images.pexels.com/photos/67636/rose-blue-flower-rose-blooms-67636.jpeg?auto=compress&cs=tinysrgb&h=350',
            'price' => '95'
        
        ]


    );
    }
}
