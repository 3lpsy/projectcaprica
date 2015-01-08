<?php

class CategoriesController extends BaseController {
    
    public function __construct() {
        parent::__construct();
        $this->beforeFilter('csrf', array('on' => 'post'));
        $this->beforeFilter('admin');
    }

    public function index()
    {
        return View::make('categories.index')
            ->with('categories', Category::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $validator = Validator::make(Input::all(), Category::$rules);
        if ($validator->passes()) {
            $category = new Category;
            $category->name = Input::get('name');
            $category->save();
            return Redirect::to('admin/categories')
            ->with('message', 'Category Created');
        }

        return Redirect::to('admin/categories')
        ->with('message', 'Something went wrong. Cateogry Not Created')
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
        $category = Category::find(Input::get('id'));
        if ($category) {
            $category->delete();
            return Redirect::to('admin/categories')
            ->with('message', 'Category Deleted');
        }
        return Redirect::to('admin/categories')
        ->with('message', 'Something went wrong, not found in db');
    }
}