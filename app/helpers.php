<?php
use App\Models\Category;

if(!function_exists('categories_list')){
    function categories_list(){
        // return Category::where('parent_id', 0)->get();
        return Category::whereParentId(0)->get();
    }
}

?>