@extends('layout')

@section('title', 'Details')              
@section('content')

    <h2>Details</h2>

    <div>
        <h4>Cap</h4>
        <hr />
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
                <img style="width: 250px; height: 250px;" src={{$cap->image}} alt="Image"/>
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
    <div>
        <a href="{{route('caps.edit', $cap ->id)}}" >Edit</a> |
        <a href="{{route('caps.index')}}">Back to List</a>
    </div>

@endsection