@extends('adminBSB-example.layouts.app_layout')

@extends('adminBSB-example.layouts.section_top_nav')
@extends('adminBSB-example.layouts.section_sidebar')

@section('title', 'Welcome')

@section('styles')
  <!-- Add custom styles here -->
@endsection

@section('section_content')
  <section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>EDITORS</h2>
        </div>

        <!-- CKEditor -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            CKEDITOR
                            <small>CKEditor is a ready-for-use HTML text editor designed to simplify web content creation. Taken from <a href="http://ckeditor.com/" target="_blank">ckeditor.com</a></small>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <textarea id="ckeditor">
                            <h2>WYSIWYG Editor</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ullamcorper sapien non nisl facilisis bibendum in quis tellus. Duis in urna bibendum turpis pretium fringilla. Aenean neque velit, porta eget mattis ac, imperdiet quis nisi. Donec non dui et tortor vulputate luctus. Praesent consequat rhoncus velit, ut molestie arcu venenatis sodales.</p>
                            <h3>Lacinia</h3>
                            <ul>
                                <li>Suspendisse tincidunt urna ut velit ullamcorper fermentum.</li>
                                <li>Nullam mattis sodales lacus, in gravida sem auctor at.</li>
                                <li>Praesent non lacinia mi.</li>
                                <li>Mauris a ante neque.</li>
                                <li>Aenean ut magna lobortis nunc feugiat sagittis.</li>
                            </ul>
                            <h3>Pellentesque adipiscing</h3>
                            <p>Maecenas quis ante ante. Nunc adipiscing rhoncus rutrum. Pellentesque adipiscing urna mi, ut tempus lacus ultrices ac. Pellentesque sodales, libero et mollis interdum, dui odio vestibulum dolor, eu pellentesque nisl nibh quis nunc. Sed porttitor leo adipiscing venenatis vehicula. Aenean quis viverra enim. Praesent porttitor ut ipsum id ornare.</p>
                        </textarea>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# CKEditor -->
        <!-- TinyMCE -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            TINYMCE
                            <small>Taken from <a href="https://www.tinymce.com" target="_blank">www.tinymce.com</a></small>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <textarea id="tinymce">
                            <h2>WYSIWYG Editor</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ullamcorper sapien non nisl facilisis bibendum in quis tellus. Duis in urna bibendum turpis pretium fringilla. Aenean neque velit, porta eget mattis ac, imperdiet quis nisi. Donec non dui et tortor vulputate luctus. Praesent consequat rhoncus velit, ut molestie arcu venenatis sodales.</p>
                            <h3>Lacinia</h3>
                            <ul>
                                <li>Suspendisse tincidunt urna ut velit ullamcorper fermentum.</li>
                                <li>Nullam mattis sodales lacus, in gravida sem auctor at.</li>
                                <li>Praesent non lacinia mi.</li>
                                <li>Mauris a ante neque.</li>
                                <li>Aenean ut magna lobortis nunc feugiat sagittis.</li>
                            </ul>
                            <h3>Pellentesque adipiscing</h3>
                            <p>Maecenas quis ante ante. Nunc adipiscing rhoncus rutrum. Pellentesque adipiscing urna mi, ut tempus lacus ultrices ac. Pellentesque sodales, libero et mollis interdum, dui odio vestibulum dolor, eu pellentesque nisl nibh quis nunc. Sed porttitor leo adipiscing venenatis vehicula. Aenean quis viverra enim. Praesent porttitor ut ipsum id ornare.</p>
                        </textarea>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# TinyMCE -->
    </div>
  </section>
@endsection

@section('scripts')
  <!-- Ckeditor -->
  <script src="{{ asset('adminBSB-master/plugins/ckeditor/ckeditor.js') }}"></script>

  <!-- TinyMCE -->
  <script src="{{ asset('adminBSB-master/plugins/tinymce/tinymce.js') }}"></script>

  <!-- Custom Js -->
  <script type="text/javascript">
    $(function(){
      //** Do something here with JQuery **//
      //CKEditor
      CKEDITOR.replace('ckeditor');
      CKEDITOR.config.height = 300;

      //TinyMCE
      tinymce.init({
          selector: "textarea#tinymce",
          theme: "modern",
          height: 300,
          plugins: [
              'advlist autolink lists link image charmap print preview hr anchor pagebreak',
              'searchreplace wordcount visualblocks visualchars code fullscreen',
              'insertdatetime media nonbreaking save table contextmenu directionality',
              'emoticons template paste textcolor colorpicker textpattern imagetools'
          ],
          toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
          toolbar2: 'print preview media | forecolor backcolor emoticons',
          image_advtab: true
      });
      tinymce.suffix = ".min";
      tinyMCE.baseURL = "{!! asset('adminBSB-master/plugins/tinymce') !!}";
    });
  </script>
@endsection