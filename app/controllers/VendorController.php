<?php

class VendorController extends \BaseController {

	public function __construct() {
        parent::__construct();
        $this->beforeFilter('csrf', array('on' => 'post'));
    }
	public function index()
	{
		return View::make('vendor.index')
			->with('products', Product::where('vendor_id', '=', Auth::id())->get());
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// var_dump(Category::all()); die();
		return View::make('vendor.newproduct');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
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
		$product = Product::find($id);
        if ($product) {
            File::delete('public/' . $product->image);
            $product->delete();
            return Redirect::to('admin/products')
            ->with('message', 'Product Deleted');
        }
        return Redirect::to('admin/products')
        ->with('message', 'Something went wrong, not found in db');
	}


}
