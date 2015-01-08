<?php

class WishlistProduct extends Eloquent {

    protected $fillable = array('category_id', 'title', 'description', 'wishlist_id', 'stock', 'price', 'availability', 'user_id' 'image');
    
    protected $table = 'wishlists';

    public function category() {
        return $this->hasMany('WishlistProduct');
    } 

    public function user() {
        return $this->belongsTo('User');
    }
}