@extends('front.layouts.master')
@section('class', 'blog')
@section('id', 'blog-detail')
@section('content')

<div class="main-content">
        <div id="wrapper-site">
            <div id="content-wrapper">
                <div id="main">
                    <div class="page-home">
                        <div class="container">
                            <div class="content">
                                <div class="row">
                                    <div class="sidebar-3 sidebar-collection col-lg-3 col-md-3 col-sm-4">
                                        <div class="sidebar-block">
                                            <div class="title-block">Recent Blogs</div>
                                            <div class="post-item-content">
                                                <div>
                                                    <div class="late-item">
                                                        <a href="blog-detail.html">
                                                            <p class="content-title">Lorem ipsum dolor sit amet</p>
                                                        </a>
                                                        <span>
                                                            <i class="zmdi zmdi-comments"></i>13 comment</span>
                                                        <span>
                                                            <i class="zmdi zmdi-calendar-note"></i>20 APRIl 2017
                                                        </span>
                                                        <p class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                            nonummy...
                                                        </p>
                                                        <p class="remove">
                                                            <a href="blog-detail.html">READ MORE</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if(isset($blog))
                                    <div class="col-sm-8 col-lg-9 col-md-9 flex-xs-first main-blogs">
                                        <h3>{{$blog->title}}</h3>
                                        <div class="hover-after">
                                            <img src="{{url($blog->image)}}" alt="{{$blog->title}}" 
                                            class="img-fluid">
                                        </div>
                                        <div class="late-item">
                                            <p>
                                                {!!$blog->description!!}
                                            </p>
                                            
                                            
                                            
                                            <div class="border-detail">
                                                <p class="post-info float-left">
                                                    <span>3 minitunes ago</span>
                                                    <span>113 Comments</span>
                                                    <span>TIVATHEME</span>
                                                </p>
                                                <div class="btn-group">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-share"></i>
                                                        <span>Share</span>
                                                    </a>
                                                    <a href="#" class="email">
                                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                                        <span>SEN TO A FRIEND</span>
                                                    </a>
                                                    <a href="#" class="print">
                                                        <i class="zmdi zmdi-print"></i>
                                                        <span>Print</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="admin">
                                            <img src="{{url($blog->post_by->profile)}}" alt="img" class="float-left right" width="100px" height="100px">
                                            <div class="info">
                                                <p>
                                                    <a href="#">
                                                        <span class="content-title">
                                                            {{$blog->post_by->name}}
                                                        </span>
                                                    </a>
                                                    <span>
                                                    	@if($blog->post_by->user_type == 1)
                                                    		Admin
                                                    	@endif
                                                    </span>
                                                </p>
                                                <p class="descript">
                                                    {{$setting->description}}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="reply late-item">
                                            <div class="blog-comment" id="blog-comment">
                                                <h2 class="title-block">Comments</h2>
                                                <img src="img/blog/user1.jpg" alt="img" class="float-left right">
                                            </div>
                                            <div class="comment-content">
                                                <p class="user-title">
                                                    <a href="#">JOHN DOE</a>
                                                    <span class="time">Posted on Mar 17, 2017 at 6:57am /
                                                        <a href="#">repost</a> /
                                                        <span class="green">
                                                            <a href="#">Reply</a>
                                                        </span>
                                                    </span>
                                                </p>
                                                <p class="content-comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor
                                                    incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam.
                                                </p>
                                            </div>
                                            <div class="blog-comment margin-right-comment">
                                                <div class="avatar">
                                                    <img src="img/blog/user2.jpg" alt="img" class="float-left">
                                                </div>
                                                <div class="comment-content">
                                                    <p class="user-title">
                                                        <a href="#">JOHN DOE</a>
                                                        <span class="time">Posted on Mar 17, 2017 at 6:57am /
                                                            <a href="#">repost</a> /
                                                            <span class="green">
                                                                <a href="#">Reply</a>
                                                            </span>
                                                        </span>
                                                    </p>
                                                    <p class="content-comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim
                                                        veniam.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="blog-comment">
                                                <div class="avatar">
                                                    <img src="img/blog/user1.jpg" alt="img" class="float-left right">
                                                </div>
                                                <div class="comment-content">
                                                    <p class="user-title">
                                                        <a href="#">JOHN DOE</a>
                                                        <span class="time">Posted on Mar 17, 2017 at 6:57am /
                                                            <a href="#">repost</a> /
                                                            <span class="green">
                                                                <a href="#">Reply</a>
                                                            </span>
                                                        </span>
                                                    </p>
                                                    <p class="content-comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim
                                                        veniam.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="submit-comment" id="respond">
                                            <h2 class="title-block">Submit comment</h2>
                                            <div id="commentInput">
                                                <form action="#" method="post" id="commentform">
                                                    <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                                    <div class="row">
                                                        <div class="form-group col col-sm-12 col-md-4 ">
                                                            <input type="text" class="inputName form-control" name="name" placeholder="Your Name *">
                                                        </div>
                                                        <div class="form-group col col-sm-12  col-md-4">
                                                            <input type="text" class="inputMail form-control" name="mail" placeholder="Your E-mail *">
                                                        </div>
                                                        <div class="form-group col col-sm-12  col-md-4">
                                                            <input type="text" class="form-control" name="website" placeholder="Your Website">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col col-md-12">
                                                            <textarea tabindex="4" class="inputContent form-control grey" rows="10" name="comment" placeholder="Your Message"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="submit">
                                                        <input type="submit" name="addComment" id="submitComment" class="btn btn-default" value="Send Message">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection