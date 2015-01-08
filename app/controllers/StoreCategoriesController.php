<?php

class StoreCategoriesController extends \BaseController {

	 public function __construct() {
        parent::__construct();
        $this->beforeFilter('csrf', array('on'=> 'post'));
        $this->beforeFilter('auth', array('only'=> array('postAddtocart', 'getCart', 'getRemoveitem')));
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('store.category')
            ->with('products', Product::where('category_id', '=', $cat_id)
            ->paginate(2))
            ->with('category', Category::find($cat_id));
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

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($cat_id)
	{
		return View::make('store.category')
            ->with('products', Product::where('category_id', '=', $cat_id)
            ->paginate(2))
            ->with('category', Category::find($cat_id));
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
		//
	}


}
