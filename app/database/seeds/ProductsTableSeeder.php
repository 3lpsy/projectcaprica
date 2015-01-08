<?php

class ProductsTableSeeder extends Seeder {
    
    public function run() {
        $product = new product;
        $product->title = '6D Cube';
        $product->category_id = '20';
        $product->vendor_id = '1';
        $product->description = 'This is a 6D cube';
        $product->price = 50;
        $product->stock = 1;
        $product->image = 'img/products/6dcube.jpg';
        $product->save();

        $product = new product;
        $product->title = 'Dreamer Mask';
        $product->category_id = '20';
        $product->vendor_id = '1';
        $product->description = 'This dreamer mask is very strange';
        $product->price = 40;
        $product->stock = 1;
        $product->image = 'img/products/dreamermask.jpg';
        $product->save();

        $product = new product;
        $product->title = 'Mobilius Nautilus';
        $product->category_id = '20';
        $product->vendor_id = '2';
        $product->description = 'What a strange name';
        $product->price = 1033;
        $product->stock = 1;
        $product->image = 'img/products/mobiliunnautilius.jpg';
        $product->save();

        $product = new product;
        $product->title = '120 Cell';
        $product->category_id = '20';
        $product->vendor_id = '2';
        $product->description = 'So many cells!';
        $product->price = 1033;
        $product->stock = 1;
        $product->image = 'img/products/120cell.jpg';
        $product->save();

        $product = new product;
        $product->title = 'Wired Stag';
        $product->category_id = '20';
        $product->vendor_id = '1';
        $product->description = 'This stag is amazing';
        $product->price = 10;
        $product->stock = 1;
        $product->image = 'img/products/stag.jpg';
        $product->save();


        $product = new product;
        $product->title = 'Mini Flying Pig';
        $product->category_id = '24';
        $product->vendor_id = '2';
        $product->description = 'Becaus why not';
        $product->price = 5;
        $product->stock = 1;
        $product->image = 'img/products/flyingpig.jpg';
        $product->save();

        $product = new product;
        $product->title = 'Small Rocking Chair';
        $product->category_id = '24';
        $product->vendor_id = '3';
        $product->description = 'Take a seat!';
        $product->price = 1033;
        $product->stock = 1;
        $product->image = 'img/products/chair.jpg';
        $product->save();

        $product = new product;
        $product->title = 'Tiny Mecha';
        $product->category_id = '24';
        $product->vendor_id = '2';
        $product->description = 'Anything in its path will die!';
        $product->price = 10;
        $product->stock = 1;
        $product->image = 'img/products/mech.jpg';
        $product->save();

        $product = new product;
        $product->title = 'Horse Head';
        $product->category_id = '24';
        $product->vendor_id = '1';
        $product->description = 'I wonder what this horse is thinking';
        $product->price = 77;
        $product->stock = 1;
        $product->image = 'img/products/horse.jpg';
        $product->save();

        $product = new product;
        $product->title = 'Doge';
        $product->category_id = '24';
        $product->vendor_id = '1';
        $product->description = 'Very printed. Much eCommerce. Such laravel';
        $product->price = 18;
        $product->stock = 1;
        $product->image = 'img/products/doge.jpg';
        $product->save();

        $product = new product;
        $product->title = 'Heavy Breathing';
        $product->category_id = '24';
        $product->vendor_id = '2';
        $product->description = 'This cat is hungry';
        $product->price = 32;
        $product->stock = 1;
        $product->image = 'img/products/heavybreathing.jpg';
        $product->save();

        $product = new product;
        $product->title = 'Bane Cat';
        $product->category_id = '24';
        $product->vendor_id = '2';
        $product->description = 'You merely adopted the cuteness';
        $product->price = 78;
        $product->stock = 1;
        $product->image = 'img/products/banecat.jpg';
        $product->save();

        $product = new product;
        $product->title = 'Y Wing';
        $product->category_id = '24';
        $product->vendor_id = '1';
        $product->description = 'Pew pew pew';
        $product->price = 10;
        $product->stock = 1;
        $product->image = 'img/products/ywing.jpg';
        $product->save();


        $product = new product;
        $product->title = 'Large Mecha';
        $product->category_id = '24';
        $product->vendor_id = '2';
        $product->description = 'This mecha is built to scale of a replica that is 1/60 the size of the originial';
        $product->price = 58;
        $product->stock = 1;
        $product->image = 'img/products/mecha1.jpg';
        $product->save();

        $product = new product;
        $product->title = 'Master Sword';
        $product->category_id = '24';
        $product->vendor_id = '3';
        $product->description = 'Its dangerous to go alone, take this';
        $product->price = 44;
        $product->stock = 1;
        $product->image = 'img/products/mastersword.jpg';
        $product->save();

        $product = new product;
        $product->title = 'Mosaic Egg';
        $product->category_id = '20';
        $product->vendor_id = '2';
        $product->description = 'This egg is very fragile';
        $product->price = 32;
        $product->stock = 1;
        $product->image = 'img/products/egg.jpg';
        $product->save();


    }
}