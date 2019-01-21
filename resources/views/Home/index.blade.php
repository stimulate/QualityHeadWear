@extends('layout')

@section('title', 'Home')

@section('content')

    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:90%;margin:0 auto;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/images/show1.jpg" alt="c1" style="width: 100%;height:560px;">
            </div>

            <div class="item">
                <img src="/images/show2.jpg" alt="c2" style="width: 100%;height:560px;">
            </div>

            <div class="item">
                <img src="/images/show3.jpg" alt="c3" style="width: 100%;height:560px;">
            </div>

            <div class="item">
                <img src="/images/show4.jpg" alt="c4" style="width: 100%;height:560px;">
            </div>

            <div class="item">
                <img src="/images/show5.jpg" alt="c5" style="width: 100%;height:560px;">
            </div>

        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div style="padding-bottom:80px; padding-left:40px">
        <ul class="slide">
            <li>
                <div class="round">
                    <span class="thumb"><img src="/images/Beanie.gif" alt="BoaterImage" /></span>
                </div>
                <br />
                <span class="caption" style="font-family:Verdana;font-size:25px">Beanie</span>
            </li>
            <li>
                <div class="round">
                    <span class="thumb"><img src="/images/Boater.gif" alt="BoaterImage" /></span>
                </div>
                <br />
                <span class="caption" style="font-family:Verdana;font-size:25px">Boater</span>
            </li>
            <li>
                <div class="round">
                    <span class="thumb"><img src="/images/felthat.gif" alt="BoaterImage" /></span>
                </div>
                <br />
                <span class="caption" style="font-family:Verdana;font-size:25px">Felthat</span>
            </li>
            <li>
                <div class="round">
                    <span class="thumb"><img src="/images/Stetson.gif" alt="BoaterImage" /></span>
                </div>
                <br />
                <span class="caption" style="font-family:Verdana;font-size:25px">Stetson</span>
            </li>
            <li>
                <div class="round">
                    <span class="thumb"><img src="/images/Fedora.gif" alt="BoaterImage" /></span>
                </div>
                <br />
                <span class="caption" style="font-family:Verdana;font-size:25px">Fedora</span>
            </li>
        </ul>
    </div> 

@endsection