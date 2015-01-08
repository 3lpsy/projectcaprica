<?php

class StoreCartController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('store.cart')
        ->with('products', Cart::contents());
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
        $quantity = Input::get('quantity');

        Cart::insert(array(
            'id'=>$product->id,
            'name'=>$product->title,
            'price'=>$product->price,
            'image'=>$product->image,
            'quantity'=>$quantity,
            'vendor_id'=>$product->vendor_id
            ));
        return Redirect::to('store/cart');
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
	public function destroy($identifier)
	{
		$item = Cart::item($identifier);
        $item->remove();
        return Redirect::to('store/cart');
	}


}
