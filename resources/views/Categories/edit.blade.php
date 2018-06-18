@extends('layout')

@section('title', 'Edit')

@section('content')
<h4>category</h4>
<hr />
<div class="row">
    <div class="col-md-4">   
        {{ Form::model($category, array('route' => array('categories.update', $category->id), 'method'=>'PATCH')) }}             
           @include('categories.form')           
        {{ Form::close() }}
                   
    </div>
</div>

<div>
    <a href="{{route('categories.index')}}">Back to List</a>
</div>
@endsection