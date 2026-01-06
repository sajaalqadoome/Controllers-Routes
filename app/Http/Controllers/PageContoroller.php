<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\returnArgument;

class PageContoroller extends Controller
{
    public function home()
    {
        $title="Home Page";
        $msg="Welcome to LAravel Controller";

        return view('home',compact('title','msg'));
    }

    public function about()
    {
        return view('about');
    }

 public function contact()
    {
        return view('contact');
    }

public function user($name)
{
    return view('user',['username'=>$name]);
}

public function product()  
{
$product=[
['name'=>'laptop','price'=>800],
['name'=>'Phone','price'=>500]
    ];
return view('products',compact('product'));
}

public function productDetails($name)
{
$product=[
['name'=>'laptop','price'=>800],
['name'=>'Phone','price'=>500]
    ];
    $product=collect($product)->firstWhere('name',$name);
    return view('product-details', compact('product'));



}

}


