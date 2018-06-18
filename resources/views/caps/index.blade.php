@extends('layout')

@section('title', 'Caps')

@section('content')
<p style="margin:10px">
    <a href="{{route('caps.create')}}">Create New</a>
</p>

<form action="{{route('caps.index')}}" method="get" class="search-form">
    <div class="form-actions no-color">
        <p>           
            Find by name/price: 
             <i class="fa  fa-search search-icon"></i>
             <input value="{{ request()->input('searchStr')}}" type="text" name="searchStr" id="searchStr" placeholder="Search for product" />
            <input type="submit" value="Search" class="btn btn-default" /> |
            <a href="{{route('caps.index')}}">Back to Full List</a>
        </p>
    </div>
</form>
<table class="table table-hover">
    <thead>  
        <tr>            
            <th>
               <a href="{{url('caps/'.'?sort=desc')}}"> Name</a>
            </th>
            <th>
                Price
            </th>
            <th>
                Image
            </th>
            <th>
                Description
            </th>
            <th>
                Supplier
            </th>
            <th>
                Category
            </th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($caps as $c)
        {           
        <tr>           
            <td>
                {{$c ->name}}
            </td>
            <td>
                {{$c ->price}}
            </td>
            <td>
                <img style="width: 200px; height: 200px;" src="{{$c ->image}}" alt="Cap Image" />
            </td>
            <td>
                {{$c ->description}}
            </td>
            <td>
                {{$c ->supplier->name}}
            </td>
            <td>
                {{$c ->category->name}}
            </td>
            <td>
                <a href="{{route('caps.edit', $c ->id)}}" >Edit</a> |
                <a href="{{route('caps.show', $c ->id)}}">Details</a> |
                <a href="{{route('delete', $c ->id)}}">Delete</a>
            </td>
        </tr>
        }
        @endforeach
    </tbody>
</table>
<div class="text-center">
    {!!$caps->links();!!}
</div>


@endsection