@extends('layout/layout')

@section('title', 'Home')

@section('content')
<div id="container">
        <video autoplay muted loop>
          <source src="https://onedrive.live.com/download.aspx?cid=F88388C1E2132AB9&resid=F88388C1E2132AB9%212198&canary=kNE2XvutcEc1YKC%2F2EEyASfivh2LT65TWCjJrr84wkw%3D9&ithint=%2Emp4" type="video/mp4">
        </video>
      </div>
      <div class="tech-slideshow">
        <div class="mover-1"></div>
        <div class="mover-2"></div>
      </div>
      <style>
            * {
                margin-top: 0; padding: 0;
              }
               
              #container {
                {{--  overflow: hidden;  --}}
                height: 400px;
                background: #edeae8;
                position: relative;
              }
               
              video {
                position: absolute;                         
                margin-top:275px;
                /* Vertical and Horizontal center*/
                left: 50%; top: 50%;
                transform: translate(-50%, -50%);
              }
              .tech-slideshow {
                height: 450px;
                max-width: 100%;
                margin: 0 auto;
                position: relative;
                overflow: hidden;
                transform: translate3d(0, 0, 0);
              }
              
              .tech-slideshow > div {
                height: 450px;
                width: 9700px;
                background: url(/images/cap/sprites.png);
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                transform: translate3d(0, 0, 0);
              }
              .tech-slideshow .mover-1 {
                animation: moveSlideshow 60s linear infinite;
              }
              .tech-slideshow .mover-2 {
                opacity: 0;
                transition: opacity 0.5s ease-out;
                background-position: 0 -450px;
                animation: moveSlideshow 20s linear infinite;
              }
              .tech-slideshow:hover .mover-2 {
                opacity: 1;
              }
              
              @keyframes moveSlideshow {
                100% { 
                  transform: translateX(-66.6666%);  
                }
              }
            
      </style>
    {{-- <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:90%;margin:0 auto;">
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
    </div> --}}
    <script>
            var video = document.querySelector('video')
            , container = document.querySelector('#container');
           
          var setVideoDimensions = function () {
            // Video's intrinsic dimensions
            var w = video.videoWidth
              , h = video.videoHeight;
             
            // Intrinsic Ratio
            // Will be more than 1 if W > H and less if W < H
            var videoRatio = (w / h).toFixed(2);
             
            // Get the container's computed styles
            //
            // Also calculate the min dimensions required (this will be
            // the container dimentions)
            var containerStyles = window.getComputedStyle(container)
              , minW = parseInt( containerStyles.getPropertyValue('width') )
              , minH = parseInt( containerStyles.getPropertyValue('height') );
             
            // What's the min:intrinsic dimensions
            //
            // The idea is to get which of the container dimension
            // has a higher value when compared with the equivalents
            // of the video. Imagine a 1200x700 container and
            // 1000x500 video. Then in order to find the right balance
            // and do minimum scaling, we have to find the dimension
            // with higher ratio.
            //
            // Ex: 1200/1000 = 1.2 and 700/500 = 1.4 - So it is best to
            // scale 500 to 700 and then calculate what should be the
            // right width. If we scale 1000 to 1200 then the height
            // will become 600 proportionately.
            var widthRatio = minW / w
              , heightRatio = minH / h;
             
            // Whichever ratio is more, the scaling
            // has to be done over that dimension
            if (widthRatio > heightRatio) {
              var newWidth = minW;
              var newHeight = Math.ceil( newWidth / videoRatio );
            }
            else {
              var newHeight = minH;
              var newWidth = Math.ceil( newHeight * videoRatio );
            }
             
            video.style.width = newWidth + 'px';
            video.style.height = newHeight + 'px';
          };
           
          video.addEventListener('loadedmetadata', setVideoDimensions, false);
          window.addEventListener('resize', setVideoDimensions, false);

        
    </script>
    
    {{-- <div style="padding-bottom:80px; padding-left:40px">
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
    </div>  --}}

@endsection