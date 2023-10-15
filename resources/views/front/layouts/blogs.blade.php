@if(count($blogs) > 0)
<div class="container">
   <div class="section mt-0 recent-post">
      <div class="title-product">
        <h2 class="mb-2">Blogs </h2>
      </div>
      <div class="row">
        @foreach($blogs as $blog)
         <div class="col-md-4">
            <div class="item-post">
               <div class="thumbnail-img">
                  <a href="{{url('/blog/'.$blog->slug)}}">
                  <img src="{{url($blog->image)}}" alt="{{$blog->title}}" class="set-blog-img">
                  </a>
               </div>
               <div class="post-content">
                  <div class="post-info">
                     <span class="comment">
                     <i class="fa fa-comments-o" aria-hidden="true"></i>
                     <span>0 Comments</span>
                     </span>
                     <span class="datetime">
                     <i class="fa fa-calendar" aria-hidden="true"></i>
                        <span>{{$blog->created_at->format('F d, Y')}}</span>
                     </span>
                  </div>
                  <div class="post-title">
                     <a href="{{url('/blog/'.$blog->slug)}}">{{$blog->title}}</a>
                  </div>
                  {{--<div class="post-desc">
                     {!!$blog->description!!}
                  </div>--}}
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>
@endif