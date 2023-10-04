@if(count($sliders) > 0)
<div class="section banner">
     <div class="tiva-slideshow-wrapper">
      <div id="tiva-slideshow" class="nivoSlider">
        @foreach($sliders as $slider)
        <a href="{{$slider->link}}">
         <img class="img-responsive fit-into-container" src="{{$slider->image}}" alt="{{$slider->name}}">
        </a>
       @endforeach
     </div>
   </div>
</div>
@endif