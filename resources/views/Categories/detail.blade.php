@extends('layout')

@section('title', 'Details')              
@section('content')

    <h2>Details</h2>

    <div>
        <h4>category</h4>
        <hr />
        <dl class="dl-horizontal">
            <dt>
                Name
            </dt>
            <dd>
                {{$category->name}}
            </dd>
            <dt>
                Description
            </dt>
            <dd>
               {{$category->description}}
            </dd>
               
        </dl>
    </div>
    <div>
        <a href="{{route('categories.edit', $category ->id)}}" >Edit</a> |
        <a href="{{route('categories.index')}}">Back to List</a>
    </div>

@endsection