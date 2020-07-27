<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Readymadeproduct;
use App\Virtualproduct;

class FilterproController extends Controller
{
    public function getreadymadefilterproduct($url = null,$filter=null){

        try {

        // preg_match_all('!\d+!', $filter, $matches);
            $matches = array_map("intval", explode(",", $filter));


        	$category = Category::where('slug', $url)->first();

            $data = Readymadeproduct::orderBy('id', 'DESC')->whereJsonContains('category', $category->id)->whereJsonContains('category', $matches)->paginate(4);

            return response()->json($data);
        }catch (\Exception $e) {
            $error = $e->getMessage();
            return view('error.404')->with('error');
        }
    }

    public function getvirtualfilterproduct($url = null,$filter=null){
        try {
        	$data = $filter;

        	$category = Category::where('slug', $url)->first();

            $data = Virtualproduct::orderBy('id', 'DESC')->whereJsonContains('category', $category->id)->whereJsonContains('category', $data[0])->paginate(4);

            return response()->json($data);
        }catch (\Exception $e) {
            $error = $e->getMessage();
            return view('error.404')->with('error');
        }
    }
}
