<?php

class UsersTableSeeder extends Seeder {
    
    public function run() {
        $user = new User;
        $user->username = 'admin';
        $user->email = 'admin@admin.com';
        $user->is_admin = 1;
        $user->delivery_type = 0;
        $user->description = 'I am the admin of the site';
        $user->city = 'austin';
        $user->state = 'texas';
        $user->postal = 78751;
        $user->vendor_id = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User;
        $user->username = 'scott';
        $user->email = 'scott@ascott.com';
        $user->delivery_type = 0;
        $user->description = 'My name is scott and I am a vendor. Take a look at my options';
        $user->city = 'austin';
        $user->state = 'texas';
        $user->postal = 78751;
        $user->vendor_id = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User;
        $user->username = 'sarah';
        $user->email = 'sarah@ascott.com';
        $user->delivery_type = 0;
        $user->description = 'I make cool gadgets. Take a look!';
        $user->city = 'austin';
        $user->state = 'texas';
        $user->postal = 78751;
        $user->vendor_id = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User;
        $user->username = 'Francis';
        $user->email = 'francis@ascott.com';
        $user->delivery_type = 0;
        $user->description = 'Hello there. My name is Francis';
        $user->city = 'austin';
        $user->state = 'texas';
        $user->postal = 78751;
        $user->vendor_id = 1;
        $user->password = Hash::make('admin');
        $user->save();

        $user = new User;
        $user->username = 'Jeff';
        $user->email = 'jeff@ascott.com';
        $user->delivery_type = 0;
        $user->description = "I'm looking to buy some chess pieces";
        $user->city = 'austin';
        $user->state = 'texas';
        $user->postal = 78751;
        $user->vendor_id = 0;
        $user->password = Hash::make('admin');
        $user->save();

         $user = new User;
        $user->username = 'caroline';
        $user->email = 'caroline@ascott.com';
        $user->delivery_type = 0;
        $user->description = "I need some miniature spaceships for my star trek collection.";
        $user->city = 'austin';
        $user->state = 'texas';
        $user->postal = 78751;
        $user->vendor_id = 0;
        $user->password = Hash::make('admin');
        $user->save();
    }
}