<?php

class ProductsController extends BaseController {

     public function __construct() {
        parent::__construct();
        $this->beforeFilter('csrf', array('on' => 'post'));
        $this->beforeFilter('admin');
    }

    public function index()
    {
        $categories = array();
        
        foreach(Category::all() as $category) {
            $categories[$category->id] = $category->name;
        }

        return View::make('products.index')
            ->with('products', Product::all())
            ->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function postCreate()
    {
        $validator = Validator::make(Input::all(), Product::$rules);

        if ($validator->passes()) {
            $product = new Product;
            $product->category_id = Input::get('category_id');
            $product->title = Input::get('title');
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