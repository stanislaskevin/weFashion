<?php

namespace App\Http\Controllers;
use App\Product;
use App\Categories;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->categories) {
            $products = Product::with('categories')->whereHas('categories', function ($query){
                $query->where('slug', request()->categories);
            })->paginate(6);
        } else {
            $products = Product::with('categories')->paginate(6);
        }
        return view('shop.index', compact('products'));
    }
    /** Controller solde */
    public function solde()
    {
        $products = Product::get()->where('solde');
        $products = Product::paginate(6);
        return view('shop.index', compact('products'));
    }

    public function show($reference)
    {
        $products = Product::where('reference', $reference)->firstOrFail();
        return view('shop.show')->with('products', $products);
    }
}