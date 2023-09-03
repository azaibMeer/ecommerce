<div class="container position">
   <div class="section menu-banner d-xs-none">
      <div class="tiva-verticalmenu block">
         <div class="box-content">
            <div class="verticalmenu" role="navigation">
               @if(count($categories) > 0 )
               <ul class="menu level1">
                @foreach($categories as $main_category)
                  <li class="item parent">
                     <a href="#" class="hasicon" title="SIDE TABLE">
                    {{$main_category->name}}
                    </a>
                      
                    @if(count($main_category->children) > 0)
                     <div class="dropdown-menu">
                        <div class="menu-items">
                           <ul>
                            @foreach($main_category->children as $child)
                              <li class="item parent-submenu parent">
                                 <a href="{{url('/category/'.$child->id)}}" 
                                    title="{{$child->name}}">{{$child->name}}</a>
                                 <span class="show-sub fa-active-sub"></span>
                                 <div class="dropdown-submenu">
                                    <div class="menu-items">
                                        @if(count($child->children) > 0)
                                       <ul>
                                            @foreach($child->children as $sub_child)
                                          <li class="item ">
                                             <a href="{{url('/category/'.$sub_child->id)}}" 
                                                title="{{$sub_child->name}}">
                                                {{$sub_child->name}}</a>
                                          </li>
                                            @endforeach
                                       </ul>
                                       @endif
                                    </div>
                                 </div>
                              </li>
                              @endforeach
                           </ul>
                         
                        </div>
                     </div>
                     @endif
                  </li>
                  @endforeach
               </ul>
               @endif
            </div>
         </div>
      </div>
   </div>
</div>