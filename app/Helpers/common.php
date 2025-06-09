<?php

use App\Models\Category;

function getcategories(){
    return Category::with('children')->where('show_on_home','1')->get();

}



?>