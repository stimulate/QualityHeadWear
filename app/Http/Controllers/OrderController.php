<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Models\Order;
use App\Http\Models\OrderItem;
use App\Http\Models\User;
use App\Http\Models\Cap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Orders.index');
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        if(Cart::count() > 0 && $request != null){
        $this->validate($request,[
            'firstName' => 'required', 
            'lastName' => 'required', 
            'address' => 'required',
            'city' => 'required', 
            'postalCode' => 'required',
            'state' => 'required',
            'phoneNumber' => 'required|string|min:2|max:15'        
        ]);
        $user_id = Auth::id();
        $user = Auth::user();
        $o = new Order();
        $o->firstName = $request ->input('firstName'); 
        $o->lastName = $request ->input('lastName');
        $o->address = $request ->input('address'); 
        $o->city = $request ->input('city'); 
        $o->postalCode = $request ->input('postalCode'); 
        $o->phoneNumber = $request ->input('phoneNumber'); 
        $o->state = $request ->input('state'); 
        $o->orderDate = date("jS \of F Y h:i:s A", time());        
        $o->user_id = $user_id;
        $o->subtotal = Cart::subtotal();
        $o->gst = Cart::tax();
        $o->grandtotal = Cart::total();
        $o->save();        
        
        $v = Cart::content();
        foreach ($v as $k){
    
        $Order_item = new OrderItem();        
        $Order_item->cap_id = $k->id;         
        $Order_item->quantity = $k->qty;
        $Order_item->created_at = $o->created_at;
        $Order_item->order_id = $o->id;
        $Order_item->save();        
        //$orderItem = [OrderItem::find($Order_item->id)];
        $cap = [$k->name,$k->qty, $k->price];
        echo var_dump($cap);
        }
         $cur_Order = Order::find($o->id);                
       
        Cart::destroy();}
        return view('Orders.purchased',['cur'=>$cur_Order,'cap'=>$cap,'email'=>$user->email]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Http\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(order $order)
    {
        return view('admin/orders');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Http\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Http\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Http\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order)
    {
        //
    }
}
