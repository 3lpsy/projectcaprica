<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', function() {
    return Redirect::to('store/home');
});

Route::resource('admin/categories', 'CategoriesController');
Route::resource('admin/products', 'ProductsController');
// Route::controller('users', 'UsersController');
Route::resource('admin/test', 'TestController');
Route::resource('store/product', 'StoreProductsController');
Route::resource('store/search', 'StoreSearchController');
Route::resource('store/category', 'StoreCategoriesController');
Route::resource('store/cart', 'StoreCartController');
Route::resource('store/home', 'StoreHomeController');
Route::resource('store/users', 'StoreUsersController');
Route::resource('users/auth', 'UsersAuthController');
Route::resource('store/wishlist', 'StoreWishListController');
Route::resource('vendor/products', 'VendorController');
Route::resource('store/orderhistory', 'StoreOrderHistoryController');

Route::post('/users/auth/signin', function (){
    $message = Input::get('message');
    if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) 
    {
        return Redirect::to('/')->with('message', 'Thanks for signing in');
    }
    return Redirect::to('users/auth')
    ->with('message', 'Email/Password Invalid');
});


Route::get('signout', function (){
    Cart::destroy();
    Auth::logout();
    return Redirect::to('users/auth')
    ->with('message', 'Signed Out!');
});

Route::post('addproduct', function (){
    $validator = Validator::make(Input::all(), Product::$rules);

        if ($validator->passes()) {
            $product = new Product;
            $product->category_id = Input::get('category_id');
            $product->title = Input::get('title');
            $product->vendor_id = Auth::user()->id;
            $product->description = Input::get('description');
            $product->price = Input::get('price');
            $image = Input::file('image');
            $filename = date('Y-m-d-H:i:s') . "-" . $image->getClientOriginalname();
            $path = public_path('img/products/' . $filename);
            Image::make($image->getRealPath())->resize(460, 249)->save($path);
            $product->image = "img/products/" . $filename;
            $product->save();

            return Redirect::to('admin/products')
            ->with('message', 'Product Created');
        }

        return Redirect::to('admin/products')
        ->with('message', 'Something went wrong')
        ->withErrors($validator)
        ->withInput();
});



Route::post('togglestock', function ()
    {
        $product = Product::find(Input::get('id'));

        if ($product) {
            $product->availability = Input::get('availability');
            $product->save();
            return Redirect::to('admin/products')->with('message', 'Product Updated');
        }
        
        return Redirect::to('admin/products')->with('message', 'Product not found');
    } );

Route::post('checkout/bitcoin', function () {
    $total = Input::get('amount');
    $address = Input::get('email');
    $btctotal = file_get_contents('https://blockchain.info/tobtc?currency=USD&value='. $total);
    echo '<p class="btc"> Please send '. $btctotal . ' btc to: <br> 19tAup3pjX9hBvvQtAaBTsdWdM9F7ft86B <br> <br> Or via coinbase to address: <br>'. $address. ' </p>';
});
