@extends('layout/layout')

@section('title', 'Create')

@section('content')
<h4>Category</h4>
<hr />
<div class="row" style="margin:30px">
    <div class="col-md-4">
        {{ Form::open(['route'=>'categories.store', 'method'=>'POST', 'enctype'=>'multipart/form-data'])}}        
        @include('categories.form')
        {{Form::close()}}        
    </div>
</div>

<div>
    <a href="{{route('categories.index')}}">Back to List</a>
</div>
@endsection