<div id="mobile-menu-overlay"></div>
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('welcome') }}"><img src="{{ URL::asset('welcome/images/logo.svg') }}" alt="Marshmallow"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="mdi mdi-menu"> </i></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <div class="d-lg-none d-flex justify-content-between px-4 py-3 align-items-center">
                <img src="{{ URL::asset('welcome/images/logo.svg') }}" class="logo-mobile-menu" alt="logo">
                <a href="javascript:;" class="close-menu"><i class="mdi mdi-close"></i></a>
            </div>
            <ul class="navbar-nav ml-auto align-items-center">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('welcome') }}">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('welcome') }}">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{ route('welcome') }}">contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  btn btn-success" href="{{ route('login') }}">Log In</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<link rel="stylesheet" href="{{ URL::asset('welcome/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('welcome/vendors/owl.carousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('welcome/vendors/owl.carousel/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('welcome/vendors/aos/css/aos.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('welcome/vendors/jquery-flipster/css/jquery.flipster.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('welcome/css/style.css') }}">
    <script src="{{ URL::asset('welcome/vendors/base/vendor.bundle.base.js') }}"></script>
    <script src="{{ URL::asset('welcome/vendors/owl.carousel/js/owl.carousel.js') }}"></script>
    <script src="{{ URL::asset('welcome/vendors/aos/js/aos.js') }}"></script>
    <script src="{{ URL::asset('welcome/vendors/jquery-flipster/js/jquery.flipster.min.js') }}"></script>
    <script src="{{ URL::asset('welcome/js/template.js') }}"></script>