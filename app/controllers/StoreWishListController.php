<?php

class StoreWishListController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$user_id = Auth::id();
		return View::make('store.wishlist')
        ->with('products', Wishlist::where('user_id', '=', $user_id)->get());
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$product = Product::find(Input::get('id'));
		$wishlist_product = new Wishlist;
		$wishlist_product->title = $product->title;
		$wishlist_product->description = $product->description;
		$wishlist_product->category_id = $product->category_id;
		$wishlist_product->vendor_id = $product->vendor_id;
		$wishlist_product->price = $product->price;
		$wishlist_product->stock = $product->stock;
		$wishlist_product->user_id = Auth::id();
		$wishlist_product->image = $product->image;
		$wishlist_product->save();

	return Redirect::to('store/wishlist')
		->with('message', 'Successfully added ' . $product->title . ' to wishlist!');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$product = Wishlist::find($id);
        	if ($product) {
            $product->delete();
            return Redirect::to('store/wishlist')
            ->with('message', 'Product Deleted');
        }
        return Redirect::to('store/wishlist')
        ->with('message', 'Something went wrong, not found in db');
	}


}
