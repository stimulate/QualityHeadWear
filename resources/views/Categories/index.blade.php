@extends('layout')

@section('title', 'Categories')

@section('content')

<p style="margin:10px">
    <a href="{{route('categories.create')}}">Create New</a>
</p>

<form action="{{route('categories.index')}}" method="get" class="search-form">
    <div class="form-actions no-color">
        <p>           
            Find by name/description: 
             <i class="fa  fa-search search-icon"></i>
             <input value="{{ request()->input('searchStr')}}" type="text" name="searchStr" id="searchStr" placeholder="Search for product" />
            <input type="submit" value="Search" class="btn btn-default" /> |
            <a href="{{route('categories.index')}}">Back to Full List</a>
        </p>
    </div>
</form>
<table class="table table-hover">
    <thead>  
        <tr>            
            <th>
               <a href="{{url('categories/'.'?sort=desc')}}"> Name</a>
            </th>
            
            <th>
                Description
            </th>
            
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $c)
        {           
        <tr>           
            <td>
                {{$c ->name}}
            </td>
            
            <td>
                {{$c ->description}}
            </td>
            
            <td>
                <a href="{{route('categories.edit', $c ->id)}}" >Edit</a> |
                <a href="{{route('categories.show', $c ->id)}}">Details</a> |
                <a href="{{route('category_delete', $c ->id)}}">Delete</a>
            </td>
        </tr>
        }
        @endforeach
    </tbody>
</table>
<div class="text-center">
    {!!$categories->links();!!}
</div>


@endsection