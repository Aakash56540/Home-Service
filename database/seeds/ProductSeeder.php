<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product= new \App\Product([
            'imagePath'=>'/images/electric-repair.jpeg',
            'title'=>'Electrician',
            'description'=>'We are responsible to manage the electric connection and shortage of electric wires ',
            'price'=>'799'
        ]);
        $product->save();

        $product= new \App\Product([
            'imagePath'=>'/images/images.jpg',
            'title'=>'AC & Repair',
            'description'=>'We are responsible to manage the AC repair connection and shortage of wires.',
            'price'=>'899'
        ]);
        $product->save();

        $product= new \App\Product([
            'imagePath'=>'/images/carpenter.jpg',
            'title'=>'Carpenter',
            'description'=>'We are responsible to manage the Carpenter connection and shortage of Carpenter.',
            'price'=>'699'
        ]);
        $product->save();

        $product= new \App\Product([
            'imagePath'=>'/images/plumber-main.jpg',
            'title'=>'Plumber',
            'description'=>'We are responsible to manage the Plumber connection and shortage of Plumber. ',
            'price'=>'999'
        ]);
        $product->save();

        $product= new \App\Product([
            'imagePath'=>'/images/pain.jpg',
            'title'=>'Painter',
            'description'=>'We are responsible to manage the Painter connection and shortage of Painter.',
            'price'=>'599'
        ]);
        $product->save();

        $product= new \App\Product([
            'imagePath'=>'/images/pest-control.jpg',
            'title'=>'Pest Control',
            'description'=>'We are responsible to manage the Pest Control and spread it througout the home.',
            'price'=>'799'
        ]);
        $product->save();
    }
}
