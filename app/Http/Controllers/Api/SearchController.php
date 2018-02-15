<?php

namespace App\Http\Controllers\Api;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function search(Request $request){
        $error_msg = ['error' => 'No result found. Please try a different keyword'];

        if ($request->has('q')){
            $products = Product::search($request->get('q'))->get();
            return ($products->count()) ? $products : $error_msg;
        }else{
            return $error_msg;
        }
    }
}
