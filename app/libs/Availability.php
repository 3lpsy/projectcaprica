<?php 

class Availability {
    public static function display($stock) {
        if ($stock == 0) {
            echo "Out of Stock";
        }
        else if($stock ==1) {
            echo "In Stock";
        }
    }

    public static function displayClass($stock) {
        if ($stock == 0) {
            echo "outofstock";
        }
        else if($stock ==1) {
            echo "instock";
        }
    }
}