@extends('layouts.app_layout')

@extends('layouts.section_top_nav')
@extends('layouts.section_sidebar')

@section('title', 'Update')

@section('styles')
  <!-- Add custom styles here -->
@endsection

@section('section_content')
  <section class="content">
    <div class="container-fluid">
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <a href="{{ route('user.index') }}" class="btn bg-blue-grey btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">arrow_back</i>
                            </a>
                            Update a {{ ucwords(explode('.', request()->route()->getName())[0]) }}
                        </h2>
                        {{-- <ul class="header-dropdown m-r--5">
                            <li class="">
                                <a href="javascript:void(0);" class="btn btn-primary waves-effect ">
                                    <i class="material-icons">add_to_queue</i>&nbsp;Add
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul> --}}
                    </div>
                    <div class="body">
                        @if (session('message'))
                            <div class="alert alert-{{ session('type') }}">
                            {!! session('message') !!}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('user.update') }}" enctype="multipart/form-data" id="form-input">
                            <div class="row">
                                <div class="col-lg-6 col-xs-12">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $user->id }}">
                                    <div class="form-group">
                                        <label>Name *</label>
                                        <div class="form-line @error('name') error focused @enderror">
                                            <input type="text" id="" class="form-control" name="name" placeholder="Enter name" required value="{{ $user->name }}">
                                        </div>
                                        @error('name')
                                            <label class="error">{{ $message }}</label>
                                        @enderror
                                    </div>

                                    <div class="input-group">
                                        <label>Email Address *</label>
                                        <div class="form-line @error('email') error focused @enderror">
                                            <input type="email" class="form-control" name="email" placeholder="Enter email address" value="{{ $user->email }}" required autocomplete="off">
                                        </div>
                                        @error('email') 
                                            <label class="error" for="email">{{ $message }}</label>
                                        @enderror
                                    </div>

                                    <div class="input-group">
                                        <label>Choose Branch *</label>
                                        <div class="form-line @error('id_branch') error focused @enderror">
                                            @foreach ($branches as $branch)
                                                <input type="checkbox" name="id_branch[]" id="id-branch-{{ $branch->id }}" class="filled-in chk-col-blue" value="{{ $branch->id }}" {{ in_array($branch->id, $user->branch->pluck('id')->toArray()) ? 'checked' : '' }}>
                                                <label for="id-branch-{{ $branch->id }}">{{ $branch->code }}</label>&nbsp;&nbsp;
                                            @endforeach
                                            @error('id_branch') 
                                                <label class="error" for="id_branch">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-xs-12">
                                    <div class="input-group">
                                        <label>Password *</label>
                                        <div class="form-line @error('password') error focused @enderror">
                                            <input type="password" class="form-control form-password" name="password" placeholder="Enter password" value="{{ old('password') }}" autocomplete="off">
                                        </div>
                                        @error('password') 
                                            <label class="error" for="email">{{ $message }}</label>
                                        @enderror
                                    </div>

                                    <div class="input-group">
                                        <label>Retype Password *</label>
                                        <div class="form-line @error('password2') error focused @enderror">
                                            <input type="password" class="form-control form-password" name="password2" placeholder="Retype password" value="{{ old('password2') }}" autocomplete="off">
                                        </div>
                                        @error('password2') 
                                            <label class="error" for="email">{{ $message }}</label>
                                        @enderror
                                    </div>
                                    <input type="checkbox" id="show-hide-password" class="filled-in chk-col-blue">
                                    <label for="show-hide-password" id="show-hide-password-label">Show Password</label>
                                </div>
                            </div>
        
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect" id="btn-submit">Submit</button>
                            <button type="reset" class="btn btn-warning m-t-15 waves-effect">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>
  </section>
@endsection

@section('scripts')
    <!-- Custom Js -->
    <script type="text/javascript">
        $(function () {
            $('#form-input').on('submit', function () { 
                $('#btn-submit').text('Loading...').prop('disabled', true);
            });

            $('#show-hide-password').click(function(){
                if($(this).is(':checked')){
                    $('.form-password').attr('type','text');
                }else{
                    $('.form-password').attr('type','password');
                }
            });
        });
    </script>
@endsection