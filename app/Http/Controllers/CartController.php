<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Models\ShoppingCart;
use App\Http\Models\Cap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartItems = Cart::content();
        return view('Cart.index',compact('cartItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addItem(Request $request,$id)
    {
        $cap = Cap::find($id);

        Cart::add($id,$cap->name,1,$cap->price);
        return back();
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $qty = $request->qty;
     // $cap_id = $request->cap_id;
      //$rowId = $request->rowId;
      Cart::update($id,$qty); // for update
      //$cartItems = Cart::content(); // display all new data of cart
     // return view('Cart.index', compact('cartItems'))->with('status', 'cart updated');
      return back();
     }

    /**
     * Remove the specified resource from storage.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return back();
    }
    
       /**
     * Remove all resources from storage.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function clear()
    {
        Cart::destroy();
        return back();
    }

    
}
