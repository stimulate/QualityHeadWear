@extends('layout/layout')

@section('title', 'Edit')

@section('content')
<h2>Delete</h2>

<h3>Are you sure you want to delete this?</h3>
<div>    
    <hr />
    {{ Form::open(['route'=>['caps/deleteConfirm',$cap->id], 'method'=>'DELETE', 'enctype'=>'multipart/form-data'])}}              
       
    <dl class="dl-horizontal">
        <dt>
            Name
        </dt>
        <dd>
            {{$cap->name}}
        </dd>
        <dt>
            Description
        </dt>
        <dd>
           {{$cap->description}}
        </dd>
        <dt>
            Image
        </dt>
        <dd>
            <img style="width: 250px; height: 250px;" src=.{{$cap->image}} alt="Image"/>
        </dd>
        <dt>
            Price
        </dt>
        <dd>
            {{$cap->price}}
        </dd>
        <dt>
            Category
        </dt>
        <dd>
            {{$cap->category->name}}
        </dd>
        <dt>
            Supplier
        </dt>
        <dd>
            {{$cap->supplier->name}}
        </dd>         
    </dl>
</div>

{!! Form::submit('Delete', ['class'=>'btn btn-success']) !!} 
        {!! Form::close() !!}
              
    </div>
</div>

<div>
    <a href="{{route('caps.index')}}">Back to List</a>
</div>
@endsection