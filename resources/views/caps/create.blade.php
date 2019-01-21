@extends('layout/layout')

@section('title', 'Create')

@section('content')
<h4>Cap</h4>
<hr />
<div class="row" style="margin:30px">
    <div class="col-md-4">
        {{ Form::open(['route'=>'caps.store', 'method'=>'POST', 'enctype'=>'multipart/form-data'])}}        
        @include('caps.form')
        {{Form::close()}}        
    </div>
</div>

<div>
    <a href="{{route('caps.index')}}">Back to List</a>
</div>
@endsection