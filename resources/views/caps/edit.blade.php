@extends('layout')

@section('title', 'Edit')

@section('content')
<h4>Cap</h4>
<hr />
<div class="row">
    <div class="col-md-4">   
        {{ Form::open(['route'=>['caps.update',$cap->id], 'method'=>'PATCH', 'enctype'=>'multipart/form-data'])}}              
           
       // {{ Form::model($cap, array('route' => array('caps.update', $cap->id), 'method' => 'PUT')) }}
       // {{ Form::model($cap, ['route'=>['caps.update', $cap->id],'method'=>'PATCH','enctype'=>'multipart/form-data']) }}
           @include('caps.form')           
        {{ Form::close() }}
                   
    </div>
</div>

<div>
    <a href="{{route('caps.index')}}">Back to List</a>
</div>
@endsection