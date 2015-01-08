<?php

class ProductsTableSeeder extends Seeder {
    
    public function run() {
        $product = new product;
        $product->title = '6D Cube';
        $product->category_id = '1';
        $product->vendor_id = '1';
        $product->description = 'This is a 6D cube';
        $product->price = 50;
        $product->stock = '1';
        $product->image = 'public/img/6dcube.jpg';
        $product->save();

        $product = new product;
        $product->title = 'Dreamer Mask';
        $product->category_id = '1';
        $product->vendor_id = '1';
        $product->description = 'This dreamer mask is very strange';
        $product->price = 40;
        $product->stock = '1';
        $product->image = 'public/img/dreamermask.jpg';
        $product->save();

        $product = new product;
        $product->title = 'Mobilius Nautilus';
        $product->category_id = '1';
        $product->vendor_id = '2';
        $product->description = 'What a strange name';
        $product->price = 1033;
        $product->stock = '1';
        $product->image = 'public/img/mobiliunautilius.jpg';
        $product->save();

        $product = new product;
        $product->title = '120 Cell';
        $product->category_id = '1';
        $product->vendor_id = '2';
        $product->description = 'So many cells!';
        $product->price = 1033;
        $product->stock = '1';
        $product->image = 'public/img/120cell.jpg';
        $product->save();

        $product = new product;
        $product->title = 'Wired Stag';
        $product->category_id = '1';
        $product->vendor_id = '1';
        $product->description = 'This stag is amazing';
        $product->price = 10;
        $product->stock = '1';
        $product->image = 'public/img/stag.jpg';
        $product->save();


        $product = new product;
        $product->title = 'Mini Flying Pig';
        $product->category_id = '5';
        $product->vendor_id = '2';
        $product->description = 'Becaus why not';
        $product->price = 5;
        $product->stock = '1';
        $product->image = 'public/img/flyingpig.jpg';
        $product->save();

        $product = new product;
        $product->title = 'Small Rocking Chair';
        $product->category_id = '5';
        $product->vendor_id = '3';
        $product->description = 'Take a seat!';
        $product->price = 1033;
        $product->stock = '1';
        $product->image = 'public/img/chair.jpg';
        $product->save();

        $product = new product;
        $product->title = 'Tiny Mecha';
        $product->category_id = '5';
        $product->vendor_id = '2';
        $product->description = 'Anything in its path will die!';
        $product->price = 10;
        $product->stock = '1';
        $product->image = 'public/img/mech.jpg';
        $product->save();

    }
}