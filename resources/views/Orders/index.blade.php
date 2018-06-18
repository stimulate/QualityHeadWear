@extends('layout')

@section('title', 'Order Placement')

@section('content')

<h3>Please Fill in Addressee''s Information</h3>
@if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif
<hr />
<div class="row" style="margin:30px">
    <div class="col-md-4">
        {{ Form::open(['route'=>'orders.store', 'method'=>'POST'])}}        
        <div class="row">
                <div class="col-md-9">         
                        {!! Form::label('firstName', 'First Name') !!}  
                        <div class="form-group">                
                            {!! Form::text('firstName',NULL, ['class'=>'form-control', 'id'=>'firstName',
                            'placeholder'=>'First Name']) !!}                                    
                        </div>
                </div>
           </div>
           <div class="row">
                <div class="col-md-9">         
                        {!! Form::label('lastName', 'Last Name') !!}  
                        <div class="form-group">                
                            {!! Form::text('lastName',NULL, ['class'=>'form-control', 'id'=>'lastName',
                            'placeholder'=>'Last Name']) !!}                                    
                        </div>
                </div>
           </div>
           <div class="row">
                <div class="col-md-9">         
                        {!! Form::label('address', 'Address') !!}  
                        <div class="form-group">                
                            {!! Form::text('address',NULL, ['class'=>'form-control', 'id'=>'address',
                            'placeholder'=>'Street Address']) !!}                                    
                        </div>
                </div>
           </div>
           <div class="row">
                <div class="col-md-9">         
                        {!! Form::label('city', 'City') !!}  
                        <div class="form-group">                
                            {!! Form::text('city',NULL, ['class'=>'form-control', 'id'=>'city',
                            'placeholder'=>'City']) !!}                                    
                        </div>
                </div>
           </div>
           <div class="row">
                <div class="col-md-9">         
                        {!! Form::label('postalCode', 'Postal Code') !!}  
                        <div class="form-group">                
                            {!! Form::text('postalCode',NULL, ['class'=>'form-control', 'id'=>'postalCode',
                            'placeholder'=>'Postal Code']) !!}                                    
                        </div>
                </div>
           </div>
           <div class="row">
                <div class="col-md-9">         
                        {!! Form::label('state', 'State') !!}  
                        <div class="form-group">                
                            {!! Form::text('state',NULL, ['class'=>'form-control', 'id'=>'state',
                            'placeholder'=>'State']) !!}                                    
                        </div>
                </div>
           </div>
           <div class="row">
                <div class="col-md-9">         
                        {!! Form::label('phoneNumber', 'Phone Number') !!}  
                        <div class="form-group">                
                            {!! Form::text('phoneNumber',NULL, ['class'=>'form-control', 'id'=>'phoneNumber',
                            'placeholder'=>'Phone Number']) !!}                                    
                        </div>
                </div>
           </div>
           <div class="form-group">                
                {!! Form::submit('Submit', ['class'=>'btn btn-success']) !!}                
               
            </div>
        {{Form::close()}}        
    </div>
</div>

<div>
    <a href="{{route('member')}}">Back to List</a>
</div>

@endsection