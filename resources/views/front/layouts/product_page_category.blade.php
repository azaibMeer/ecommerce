@if(count($categories) > 0)
<div class="sidebar-block">
<div class="title-block">Categories</div>
<div class="block-content">
   @foreach($categories as $main_category)
   <div class="cateTitle hasSubCategory open level1">
      @if(count($main_category->children) > 0)
      <span class="arrow collapse-icons collapsed" data-toggle="collapse" 
      data-target="#{{$main_category->id}}">
      <i class="zmdi zmdi-minus"></i>
      <i class="zmdi zmdi-plus"></i>
      </span>
      @endif
      <a class="cateItem" href="{{url('/category/'.$main_category->slug)}}">{{$main_category->name}}</a>
      <div class="subCategory collapse" id="{{$main_category->id}}" aria-expanded="true" role="status">
         @foreach($main_category->children as $sub_category)
         <div class="cateTitle">
            <a href="{{url('/category/'.$sub_category->slug)}}" class="cateItem">{{$sub_category->name}}</a>
         </div>
         @endforeach
      </div>
   </div>
   @endforeach
</div>
</div>
@endif