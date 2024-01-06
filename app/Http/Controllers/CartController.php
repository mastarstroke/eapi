<?php

namespace App\Http\Controllers;
use Symfony\Component\HttpFoundation\Response;

use App\Models\Cart;
use App\Models\Products;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Http\Resources\CartResource;

use Illuminate\Support\Facades\Auth;
use App\Exceptions\ProductNotBelongsToUser;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Products $product)
    {
        {
            return CartResource::collection(Cart::paginate(20));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCartRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Products $product, StoreCartRequest $request)
    {
        $cart = new Cart;
        $cart->user_id =$request->user_id;
        $cart->products_id =$request->products_id;
        $cart->product =$request->product;
        $cart->price =$request->price;
        $cart->save();
        
        return response([
            'data' => new CartResource($cart)
        ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCartRequest  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCartRequest $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $product, Cart $cart)
    {
        $cart->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function ProductUserCheck($product)
    {
        if(Auth::id()!== $product->user_id){
            throw new ProductNotBelongsToUser;
        }
    }
    
}