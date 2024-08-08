<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $products = DB::table('products')->chunkById(2, function (Collection $users) {
        //     $i = 1;
        //     foreach ($users as $user) {
        //         echo $i." " . $user->id . '_' . $user->name;
        //         $i++;
        //      echo '<br/>';

        //     }
        //      echo '<hr/>';
        // });
        // $products = DB::table('products')->lazyById()->select(['id','name'])->each(function ($user) {
        //     echo '' . $user['id'] . '_' . $user['name'];
        //     echo '<br/>';
        // });
        // $products = DB::table("products")->count();
        // $products = DB::table("products")->max('price');
        // $products = DB::table("products")->avg('price');
        // $products = DB::table("products")->get('price as p');
        // $products = DB::table("products")->distinct()->get('name');
        $products = DB::table("products")->select('name');
        $user=$products->addSelect('description')->get();
        return $user;
        // return view('allproducts',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = DB::table("products")->insert([
            "name" => "Harshit Kikani",
            'slug' => "harshit-kikani-",
            'category' => "Fashion",
            "description" => "Hi, I am Harshit Kikani!",
            "email" => "h@h1.com",
            "password" => "12345",
            "price" => "234.54",
            "city" => "Bhavnager",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
