@extends('layouts.app')
@section('content')




<link rel="stylesheet" href="{{ URL::asset('log/css/style.css') }}">
<link rel="stylesheet" href="{{ URL::asset('log/fonts/icomoon/style.css') }}">
<link rel="stylesheet" href="{{ URL::asset('log/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('log/css/bootstrap.min.css') }}">

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">





<body >





{{--  --}}
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                
                <img src="{{ URL::asset('log/images/undraw_remotely_2j6y.svg ') }}" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6 contents">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="mb-4">
                          
                            <h3>Sign In </h3>
                            <p class="mb-4">{{ trans('panel.site_title') }}</p>
                        </div>
                        <form  method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group first">
                                <label for="username">Username</label>
                                <input name="email" type="text" class="form-control" id="username">
                                @if($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif

                            </div>
                            <div class="form-group last mb-4">
                                <label for="password">Password</label>
                                <input name="password" type="password" class="form-control" id="password">
                                @if($errors->has('password'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </div>
                            @endif

                            </div>

                            <div class="d-flex mb-5 align-items-center">
                                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                   <input type="checkbox" checked="checked"/>
                                   <div class="control__indicator"></div>
                                </label>
                                <span class="ml-auto">
                                    @if(Route::has('password.request'))
                                    <a class="forgot-pass" href="{{ route('password.request') }}" >Forgot Password</a>
                                    @endif
                                 



                            </div>

                            <input type="submit" value="Log In" class="btn btn-block btn-primary">

                            <span class="d-block text-left my-4 text-muted">&mdash; or register  &mdash;</span>
                       

                        </form>
                        <div class="form-group">
                           
                                   <button id="btnregister" class="btn btn-block btn-primary" > register</button>
                           
                      
                             <a style="display: none" id="register" class="btn btn-block btn-primary" href="{{ route('register') }}">register</a>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<script>
     var register = document.getElementById("register");
     var btnregister = document.getElementById("btnregister");
     document.getElementById("btnregister").addEventListener("click", function(){
         register.click();

     });
     

</script>
{{--  --}}
<script src="{{ URL::asset('log/js/jquery-3.3.1.min.js') }}"></script>

<script src="{{ URL::asset('log/js/popper.min.js') }}"></script>

<script src="{{ URL::asset('log/js/bootstrap.min.js') }}"></script>

<script src="{{ URL::asset('log/js/main.js') }}"></script>


@endsection






