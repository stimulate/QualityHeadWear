<?php

namespace App\Http\Controllers;

use App\Http\Models\Cap;
use App\Http\Models\ShoppingCart;
use App\Http\Models\Category;
use App\Http\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class CapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $sort = request('sort','asc');
        $category = Category::orderBy('id',$sort);
        $caps0 = Cap::orderBy('name',$sort);                
        $str = $request->input('searchStr');
        if(!empty($str)){
            $caps0->Where('name','LIKE','%'.$str.'%')
                 ->orWhere('price','LIKE','%'.$str.'%')->get();
        }
        $caps=$caps0->paginate(5);
        $user = Auth::user();
        if (Auth::guest()||$user->isUser())
        {              
            return view('caps.user_index', compact('caps','caps0','category','sort'));
        }
        return view('caps.index', compact('caps','caps0','category','sort'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        //echo var_dump(__DIR__ );
        $cags = Category::pluck('name','id');
        $sups = Supplier::pluck('name','id');        
        return view('caps.create',['cags'=>$cags, 'sups'=>$sups]);       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|min:2|max:255',     
            'image' => 'required',
            'price' => 'required',            
        ]);
        
        // $prefix = date('YmdHis-U-',time());
        // $picName= $prefix.basename($_FILES['image']);
        // $pic = $_FILES['image']['tmp_name'];
        $pic = request('image');
        if(!empty($pic))
        { 
            //$picPath = __DIR__.'/../../..'.'/public/images/cap/'.basename($pic).'.jpeg';            
            $picPath = __DIR__.'/../../..'.'/public/images/cap/'.basename($pic).'.jpeg';            
            move_uploaded_file($pic, $picPath);
        }

        $c = Cap::create($request->all()); 
        $c ->image = '/images/cap/'.basename($pic).'.jpeg';
        $c ->save();       
        
        
        return redirect()->route('caps.index')->with('success','Cap created successfully');        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cap  $cap
     * @return \Illuminate\Http\Response
     */
    public function show(Cap $cap)
    {       
        return view('caps.detail',compact('cap'));
    }

    /**
     * Show the form for editing the specified resource.
     *     
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {    
        $cap = Cap::find($id);
        $cags = Category::pluck('name','id');
        $sups = Supplier::pluck('name','id');        
        return view('caps.edit',compact('cap','cags','sups'));         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cap  $cap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Cap $cap)
    {
        $this->validate($request,[
            'name' => 'required|string|min:2|max:255',   
            'price' => 'required',            
        ]);
        $pic = request('image');
        if(!empty($pic))
        { 
            $picPath = __DIR__.'/../../..'.'/public/images/cap/'.basename($pic).'.jpeg';            
            move_uploaded_file($pic, $picPath);
        }       
        
       // echo var_dump($cags);
        $cap ->update($request->all());
        $cap ->image = '/images/cap/'.basename($pic).'.jpeg';
        $cap ->save();         
        return redirect()->route('caps.index')->with('success','Cap updated successfully');
    }
    /**
     * Show the info for deleting the specified resource.       
     * @param  \App\Models\Cap  $cap
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cap $cap)
    {  
       // $cap = Cap::find($id);
        $cap->delete();
        return redirect()->route('caps.index')->with('success','Cap deleted successfully'); 
        //return view('caps.delete',compact('cap'));         
    }
   
    /**
     * Remove the specified resource from storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function deleteConfirm(Request $request,$id)
    {
        $cap = Cap::find($id);
        $cap ->delete($request->all());
        return redirect()->route('caps.index')->with('success','Cap deleted successfully');
    }
    
    public function getAddToCart(Request $request, $id)
    {
        $cap = Cap::find($id);
        $oldcart = Session::has('cart')?Session::get('cart'):null;
        $cart = new ShoppingCart($oldcart);
        $cart->add($cap, $cap->id); 

        $request->session()->put('cart',$cart);      
        return redirect()->route('caps.index');
    }

    public function getCart(){
        if(Session::has('cart')){
            return view('',['caps' =>null]);
        }
        $oldcart = Session::get('cart');
        $cart = new ShoppingCart($oldcart);
        return view('',['caps'=>$cart->items,'totalPrice' =>$cart->total]);
    }
}
