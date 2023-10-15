@extends('admin.layouts.master')
@section('content')
 <link rel="stylesheet" media="screen, print" href="{{url('/backend_assets/css/formplugins/summernote/summernote.css')}}">
 <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css">
<main id="js-page-content" role="main" class="page-content">
   <div class="subheader">
      <h1 class="subheader-title">
         <i class='subheader-icon fal fa-edit'></i> Blog
      </h1>
   </div>
   <div class="row">
      <div class="col-lg-8">
         <div id="panel-1" class="panel">
            <div class="panel-hdr">
               <h2>
                  Blog Add
               </h2>
            </div>
            <div class="panel-container show">
               <div class="panel-content">
                  <form method="post" action="{{url('/blog/store/')}}" 
                     enctype="multipart/form-data">
                     @csrf
                     <div class="form-row form-group">
                        <div class="col-sm-6">
                           <label class="form-label">
                              Title
                           </label>
                           <input type="text" class="form-control" placeholder="Blog name" name="title">
                           @error('title')
                                 <span class="text-danger">{{$message}}</span>
                           @enderror
                        </div>
                        <div class="col-sm-6">
                           <label class="form-label">Status</label>
                           <select class="form-control" id="example-select" name="status">
                              <option value="1">Active</option>
                              <option value="0">Inactive</option>
                           </select>
                           
                        </div>
                     </div>
                     
                     <div class="form-row form-group">
                        <div class="col-md-12">
                           <label class="form-label">Image</label>
                           <div class="custom-file">
                              <input type="file" class="custom-file-input" name="image">
                              <label class="custom-file-label">Choose file</label>
                              <span class="help-block">
                                  Image should be 870 x 490 px
                              </span>
                              @error('image')
                                 <br>
                                 <span class="text-danger">{{$message}}</span>
                              @enderror
                           </div>
                        </div>
                     </div>
                     <div class="form-row form-group">
                        <div class="col-md-12">
                           <label class="form-label">Status</label>
                           <textarea class="js-summernote" name="description">
                              
                           </textarea>         
                           
                        </div>
                     </div>
                     
                     <button type="submit" class="btn btn-primary waves-effect waves-themed">
                    Add Blog</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>

   
@endsection
@section('scripts')
<script src="{{url('/backend_assets/js/formplugins/summernote/summernote.js')}}"></script>
<script>
            var autoSave = $('#autoSave');
            var interval;
            var timer = function()
            {
                interval = setInterval(function()
                {
                    //start slide...
                    if (autoSave.prop('checked'))
                        saveToLocal();

                    clearInterval(interval);
                }, 3000);
            };

            //save
            var saveToLocal = function()
            {
                localStorage.setItem('summernoteData', $('#saveToLocal').summernote("code"));
                console.log("saved");
            }

            //delete 
            var removeFromLocal = function()
            {
                localStorage.removeItem("summernoteData");
                $('#saveToLocal').summernote('reset');
            }

            $(document).ready(function()
            {
                //init default
                $('.js-summernote').summernote(
                {
                    height: 200,
                    tabsize: 2,
                    placeholder: "Type here...",
                    dialogsFade: true,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['strikethrough', 'superscript', 'subscript']],
                        ['font', ['bold', 'italic', 'underline', 'clear']],
                        ['fontsize', ['fontsize']],
                        ['fontname', ['fontname']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['height', ['height']]
                        ['table', ['table']],
                        ['insert', ['link', 'picture', 'video']],
                        ['view', ['fullscreen', 'codeview', 'help']]
                    ],
                    callbacks:
                    {
                        //restore from localStorage
                        onInit: function(e)
                        {
                            $('.js-summernote').summernote("code", localStorage.getItem("summernoteData"));
                        },
                        onChange: function(contents, $editable)
                        {
                            clearInterval(interval);
                            timer();
                        }
                    }
                });

                //load emojis
                $.ajax(
                {
                    url: 'https://api.github.com/emojis',
                    async: false
                }).then(function(data)
                {
                    window.emojis = Object.keys(data);
                    window.emojiUrls = data;
                });

                //init emoji example
                $(".js-hint2emoji").summernote(
                {
                    height: 100,
                    toolbar: false,
                    placeholder: 'type starting with : and any alphabet',
                    hint:
                    {
                        match: /:([\-+\w]+)$/,
                        search: function(keyword, callback)
                        {
                            callback($.grep(emojis, function(item)
                            {
                                return item.indexOf(keyword) === 0;
                            }));
                        },
                        template: function(item)
                        {
                            var content = emojiUrls[item];
                            return '<img src="' + content + '" width="20" /> :' + item + ':';
                        },
                        content: function(item)
                        {
                            var url = emojiUrls[item];
                            if (url)
                            {
                                return $('<img />').attr('src', url).css('width', 20)[0];
                            }
                            return '';
                        }
                    }
                });

                //init mentions example
                $(".js-hint2mention").summernote(
                {
                    height: 100,
                    toolbar: false,
                    placeholder: "type starting with @",
                    hint:
                    {
                        mentions: ['jayden', 'sam', 'alvin', 'david'],
                        match: /\B@(\w*)$/,
                        search: function(keyword, callback)
                        {
                            callback($.grep(this.mentions, function(item)
                            {
                                return item.indexOf(keyword) == 0;
                            }));
                        },
                        content: function(item)
                        {
                            return '@' + item;
                        }
                    }
                });

            });

        </script>
@endsection