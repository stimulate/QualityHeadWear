@extends('layout')

@section('title', 'Cart')

@section('content')
<?php if ($cartItems->isEmpty()) { ?>
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">                   
                    <li class="active">Shopping Cart</li>
                </ol>
            </div>
            <div align="center"><h3>The Shopping Cart is empty</h3></div>
        </div>
    </section> <!--/#cart_items-->
<?php } else { ?>
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">                   
                    <li class="active">Shopping Cart</li>
                    
                </ol>
            </div>            
<div id="updateDiv">
                            @if(session('status'))
                                    <div class="alert alert-success">
                                        {{session('status')}}
                                    </div>
                                    @endif
                                      @if(session('error'))
                                    <div class="alert alert-danger">
                                        {{session('error')}}
                                    </div>
                                    @endif
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                           
                            <td class="name">Name</td>
                            <td class="price">Price</td>
                            <td class="quantity">Quantity</td>
                            <td class="total">Total</td>
                            <td></td>
                        </tr>
                    </thead>
                    <?php $count =1;?>
                    @foreach($cartItems as $cartItem)
                    <tbody>
                        <tr>
                            
                            <td>
                                {{$cartItem->name}}                                
                            </td>
                            <td class="cart_price">
                                <p>${{$cartItem->price}}</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                  <input type="hidden" id="rowId<?php echo $count;?>" value="{{$cartItem->rowId}}"/>
                                    <input type="hidden" id="cap_id<?php echo $count;?>" value="{{$cartItem->id}}"/>
                                    <input type="number" size="2" value="{{$cartItem->qty}}" name="qty" id="upCart<?php echo $count;?>"
                                           autocomplete="off" style="text-align:center; max-width:50px; "  MIN="1" MAX="9999">
                                </div>
                                <a class="btn btn-default href="{{route('updateQty',$cartItem->rowId)}}">Update</a>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">${{$cartItem->subtotal}}</p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" style="background-color:red"
                                   href="{{route('removeItem',$cartItem->rowId)}}"><i class="glyphicon glyphicon-trash"></i></a>
                            </td>
                        </tr>
<?php $count++;?>
                    </tbody>  @endforeach
                </table>
            </div>
</div>
        </div>
    </section> <!--/#cart_items-->
               
                <div class="container">
                    <div class="float-md-right">
                        <ul class="list-group" >
                            <li class="list-group-item">Sub Total <span>${{Cart::subtotal()}}</span></li>
                            <li class="list-group-item">GST<span>&emsp;&emsp; ${{Cart::tax()}}</span></li>                            
                            <li class="list-group-item list-group-item-info">Total&emsp; <span>${{Cart::total()}}</span></li>
                        </ul>
                        
                        <a class="btn btn-default check_out" href="{{route('createOrder')}}">Check Out</a>
                        <a class="btn btn-warning" href="{{route('clear')}}">Clear</a>
                    </div>
                    <div class ="row">
                            <a style="margin-top:50px;" class="btn btn-info" role="button" href="{{route('member')}}">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

@endsection