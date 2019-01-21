@extends('layout/layout')

@section('title', 'Cap')

@section('content')

        <h2>Caps</h2>
        
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
        <div class="col-md-3 col-sm-3">
        
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:blueviolet;">
                    <h3 class="panel-title" style="color:mintcream;text-align:center;">
                        Categories
                    </h3>
                </div>
                <ul class="list-group list-unstyled">
                    <li><a  class="list-group-item">All</a></li>
                    @foreach ($category as $c)
                    {
                        <li class="ca"><a href="{{route('member_sort', $c->category)}}" class="list-group-item">{{$caps0->category->name}}</a></li>
                    }     
                    @endforeach   
                </ul>
            </div>
        </div>
        <div class="col-md-9 col-sm-9">  
        
                <row>
                    @foreach ($caps as $c)
                    {                        
                        <div class="col-md-4 col-sm-6" style="margin-top:30px;">
                            <span class="thumbnail">
                                <img style="width: 100%;height:250px;" src=.{{$c->image}} alt="Image" onerror="this.onerror = null;">
                                <h4 id="productTitle">{{$c->name}}</h4>
                                <div style="width:100%;height:80px;">{{$c->description}}</div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <p style="font-size:20px;">$<span ID="price">{{$c->price}} </span></p>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <a href="{{route('addItem',$c->id)}}">	<button class="btn btn-info right cart">Add To Cart</button></a>
                                    </div>
                                </div>
                            </span>
                        </div>
                    }
                    @endforeach
                    </row>
        </div>

<div class="text-center">
    {!!$caps->links();!!}
</div>                   
        
@endsection