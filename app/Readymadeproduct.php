<?php

namespace App;

use Cartalyst\Tags\TaggableTrait;
use Cartalyst\Tags\TaggableInterface;
use Illuminate\Database\Eloquent\Model;

class Readymadeproduct extends Model implements TaggableInterface
{
	use TaggableTrait;

    public $currency;

    protected $casts = [
        'product_additional' => 'array',
        'category' => 'array'
    ];

    // public function __construct(){
    //     $this->currency = currency()->setUserCurrency('EUR');
    // }

    public function getRegularPriceAttribute($val)
    {

        $locale = currency()->getUserCurrency();

        return currency($val, 'USD',  $locale);
    }

    public function getSalePriceAttribute($val)
    {

        $locale = currency()->getUserCurrency();

        return currency($val, 'USD',  $locale);
    }

    public function getPurchasePriceAttribute($val)
    {
        
        $locale = currency()->getUserCurrency();

        return currency($val, 'USD',  $locale);
    }

    //const CATEGORY = 'category';


    // $user =  Readymadeproduct::find($id);

    // $user->category = explode(',', $user->category);

    // $user->save();

    //protected $category = explode(',', ['category']);
    // protected $category;

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::creating(function ($model){
    //         $model->category = explode(',', ['category']);
    //     });
    // } 

 //    $user = Readymadeproduct::firstOrNew(array('name' => Input::get('name')));
	// $user->foo = Input::get('foo');
	// $user->save();

    


}
