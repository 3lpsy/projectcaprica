<?php

class Wishlist extends Eloquent {

    protected $fillable = array('user_id', 'product_id', 'description', 'category_id', 'title', 'price', 'stock', 'image');

    public function category() {
        return $this->hasMany('WishlistProduct');
    } 

    public function user() {
        return $this->belongsTo('User');
    }


}