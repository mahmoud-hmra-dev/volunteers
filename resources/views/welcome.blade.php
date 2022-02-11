<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>VOTIBA</title>
    <link rel="stylesheet" href="{{ URL::asset('welcome/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('welcome/vendors/owl.carousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('welcome/vendors/owl.carousel/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('welcome/vendors/aos/css/aos.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('welcome/vendors/jquery-flipster/css/jquery.flipster.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('welcome/css/style.css') }}">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">


    <div id="mobile-menu-overlay"></div>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{ URL::asset('welcome/images/logo.svg') }}" alt="Marshmallow"></a>
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
                        <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="#contact">contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  btn btn-success" href="{{ route('login') }}">Log In</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

  
    <div class="page-body-wrapper">
        <section id="home" class="home">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main-banner">
                            <div class="d-sm-flex justify-content-between">
                                <div data-aos="zoom-in-up">
                                    <div class="banner-title">
                                        <h1 class="font-weight-medium">welcome to VOTIBA
                                        </h1>
                                    </div>

                                    <a href="#" class="btn btn-secondary mt-3">Learn more</a>
                                </div>
                                <div class="mt-5 mt-lg-0">
                                    <img src="{{ URL::asset('welcome/images/group.png') }}" alt="marsmello" class="img-fluid" data-aos="zoom-in-up">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="our-process" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6" data-aos="fade-up">

                        <h3 class="font-weight-medium text-dark">time bank</h3>

                        <div class="d-flex justify-content-start mb-3">
                            <img src="{{ URL::asset('welcome/images/tick.png') }}" alt="tick" class="mr-3 tick-icon">
                            <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum vitae ab perspiciatis! Dolorem, ea! Blanditiis quasi quisquam sunt assumenda reprehenderit?</p>
                        </div>
                        <div class="d-flex justify-content-start mb-3">
                            <img src="{{ URL::asset('welcome/images/tick.png') }}" alt="tick" class="mr-3 tick-icon">
                            <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum vitae ab perspiciatis! Dolorem, ea! Blanditiis quasi quisquam sunt assumenda reprehenderit?</p>
                        </div>
                        <div class="d-flex justify-content-start">
                            <img src="{{ URL::asset('welcome/images/tick.png') }}" alt="tick" class="mr-3 tick-icon">
                            <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum vitae ab perspiciatis! Dolorem, ea! Blanditiis quasi quisquam sunt assumenda reprehenderit?</p>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <img src="{{ URL::asset('welcome/images/idea.png') }}" alt="idea" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>



        <section class="contactus" id="contact">
            <div class="container">
                <div class="row mb-5 pb-5">
                    <div class="col-sm-5" data-aos="fade-up" data-aos-offset="-500">
                        <img src="{{ URL::asset('welcome/images/contact.jpg') }}" alt="contact" class="img-fluid">
                    </div>
                    <div class="col-sm-7" data-aos="fade-up" data-aos-offset="-500">
                        <h3 class="font-weight-medium text-dark mt-5 mt-lg-0">Contact US</h3>

                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" placeholder="Name*">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="mail" placeholder="Email*">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" placeholder="Message*" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <a href="#" class="btn btn-secondary">SEND</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer class="footer">
        <div class="footer-top">
            <div class="container">

                <div class="row">

                    <div class="col-6">
                        <div class="row">
                            <div class="col">
                                <div style="align-items: center;" class="col"> <img style="align-items: center;" src="{{ URL::asset('welcome/images/logo.svg') }}" alt="Marshmallow"></div>

                            </div>

                        </div>
                    </div>


                </div>
            </div>

    </footer>
    <script src="{{ URL::asset('welcome/vendors/base/vendor.bundle.base.js') }}"></script>
    <script src="{{ URL::asset('welcome/vendors/owl.carousel/js/owl.carousel.js') }}"></script>
    <script src="{{ URL::asset('welcome/vendors/aos/js/aos.js') }}"></script>
    <script src="{{ URL::asset('welcome/vendors/jquery-flipster/js/jquery.flipster.min.js') }}"></script>
    <script src="{{ URL::asset('welcome/js/template.js') }}"></script>
</body>

</html>