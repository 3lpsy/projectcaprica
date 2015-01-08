<?php

class Product extends Eloquent {

    protected $fillable = array('category_id', 'title', 'description', 'price', 'availability', 'stock', 'image');

    public static $rules = array(
        'category_id' => 'required|integer',
        'title' => 'required|min:2',
        'description'=> 'required|min:20',
        'price'=> 'required|numeric',
        'availability'=> 'integer',
        'image'=>'required|image|mimes:jpeg,jpg,png,bmp,gif' 
    );

    public function category() {
        return $this->belongsTo('Category');
    } 

    public function user() {
        return $this->belongsTo('User');
    }
}