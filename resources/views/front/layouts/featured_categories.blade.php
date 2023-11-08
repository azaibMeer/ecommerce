@if(count($featured_categories) > 0)
<div class="featured-category">
<div class="container">
    <div class="title-product">
            <h2>FEATURED CATEGORIES</h2>
    </div>
    <div class="tab-content text-center">
        <div class="featured owl-carousel owl-theme">
            @foreach($featured_categories as $category)
            <div class="content-category">
                <div class="content-img">
                    <a href="{{url('/category/'.$category->slug)}}">
                        <img class="img-fluid featured-category-height" src="{{$category->image}}" 
                        alt="{{$category->name}}" title="{{$category->name}}">
                    </a>
                </div>
                <div class="info-category">
                    <h3>
                        <a href="{{url('/category/'.$category->slug)}}">{{$category->name}}</a>
                    </h3>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>
@endif