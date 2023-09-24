<div class="section banner">
     <div class="tiva-slideshow-wrapper">
      <div id="tiva-slideshow" class="nivoSlider">
        @if(count($sliders) > 0)
        @foreach($sliders as $slider)
        <a href="#">
         <img class="img-responsive" src="{{$slider->image}}" 
         title="{{$slider->name}}" alt="{{$slider->name}}">
        </a>
       @endforeach
       @else
         <img class="img-responsive" src="/front_assets/img/banners/no_banner.jpg">
       @endif
     </div>
   </div>
</div>