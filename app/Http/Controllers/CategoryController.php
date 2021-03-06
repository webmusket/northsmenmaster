<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function getcategories(){
        try {
        	$categories = Category::orderBy('name', 'ASC')->get();
    		$categories = json_decode(json_encode($categories));

    		return $categories;
        }catch (\Exception $e) {
            $error = $e->getMessage();
            return view('error.404')->with('error');
        }
    }

    public function getFilterId()
    {
        try {
            $colorcategory = Category::where('name','LIKE',"%Color%")->first()->id;
            $colors = Category::where('parent',$colorcategory)->get();

            $seasoncategory = Category::where('name','LIKE',"%Season%")->first()->id;
            $season = Category::where('parent',$seasoncategory)->get();

            $patterncategory = Category::where('name','LIKE',"%Pattern%")->first()->id;
            $pattern = Category::where('parent',$patterncategory)->get();

            $fabriccategory = Category::where('name','LIKE',"%Fabric%")->first()->id;
            $fabric = Category::where('parent',$fabriccategory)->get();

            return [$colors,$season,$pattern,$fabric];
        }catch (\Exception $e) {
            $error = $e->getMessage();
            return view('error.404')->with('error');
        }
    }

    public function updatecategory(Request $request){
        try {

        	$data = $request->all();

            $category = Category::where('parent',$data['parent'])->get();

            $delimiter = '-';



            $slug = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $data['name']))))), $delimiter));

            foreach ($category as $cat) {
                if($cat->name == $data['name']){
                    return "cat name is already exist";
                }
            }

        	$category = new Category;
    		$category->name = $data['name'];
            $category->slug = $slug;
    		$category->parent = $data['parent'];
    		$category->save();

            return $category->id;
        }catch (\Exception $e) {
            $error = $e->getMessage();
            return view('error.404')->with('error');
        }

    }

    
}
