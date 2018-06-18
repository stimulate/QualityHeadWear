@extends('layout')

@section('title', 'Order Placement')

@section('content')

<h2><span class="glyphicon glyphicon-saved"></span>Thank you For Your Purchase!</h2>

<div>
    <h4>The following order will be dispatched as per the details below.</h4>
    <hr />
    <dl class="dl-horizontal">
        <dt>Email</dt>
        <dd>{{$email}}</dd>
        <dt>
            First Name
        </dt>
        <dd>
           {{$cur->firstName}}
        </dd>
        <dt>
            Last Name
        </dt>
        <dd>
            {{$cur->lastName}}
        </dd>
        <dt>
            Address
        </dt>
        <dd>
            {{$cur->address}}
        </dd>
        <dt>
            City
        </dt>
        <dd>
            {{$cur->city}}
        </dd>
        <dt>
            Postal Code
        </dt>
        <dd>
            {{$cur->postalCode}}
        </dd>
        <dt>
            State  
        </dt>
        <dd>
            {{$cur->state}}
        </dd>
        <dt>
            Phone
        </dt>
        <dd>
            {{$cur->phoneNumber}}
        </dd>
        <dt>
            Status
        </dt>
        <dd>
            {{$cur->status}}
        </dd>
        <dt>
            Order Date
        </dt>
        <dd>
            {{$cur->orderDate}}
        </dd>
        <dt>
            Subtotal
        </dt>
        <dd>
            {{$cur->subtotal}}
        </dd>
        <dt>
            GST
        </dt>
        <dd>
            {{$cur->gst}}
        </dd>
        <dt>
            Grand Total
        </dt>
        <dd>
            {{$cur->grandtotal}}
        </dd>
        <dd>
            <table class="table">
                
                    <td></td>
                    <td></td>
                    <td>
                        <label>Subtotal:</label>
                    </td>
                    <td>
                        {{$cur->subtotal}}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <label>GST:</label>
                    </td>
                    <td>
                        {{$cur->gst}}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <label>Grand Total:</label>
                    </td>
                    <td>
                        {{$cur->grandtotal}}
                    </td>
                </tr>
            </table>
        </dd>
    </dl>
</div>
@endsection
