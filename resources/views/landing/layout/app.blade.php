<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{ env('APP_DESC') }}">
    <meta name="author" content="ASAN Webs Development">
    <meta name="keywords" content="{{ env('APP_DESC') }}">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="../css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/landing/images/favicon.png" type="image/png">
    <link rel="stylesheet" href="/landing/plugins/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="/landing/css/style.min.css">
</head>

<body>

    <script>
        var pre = document.createElement("div");
        pre.innerHTML = '<div class="loader-wrapper"><div class="loader">Loading...</div></div>';
        document.body.insertBefore(pre, document.body.firstChild);

        document.addEventListener("DOMContentLoaded", function(event) {
            document.body.className += " loaded"
        });
    </script>

    <div class="container-fluid p-0 overflow-hidden">

        <nav class="navbar navbar-expand-lg navbar-light border-bottom">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <h3 class="text-uppercase">{{ env('APP_NAME') }}</h3>
                </a>
                <button class="navbar-toggler btn" id="navbarToggler" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-menu" id="navbarMenu">
                    <div class="navbar-nav ms-md-auto">
                        <a class="nav-item nav-link" href="{{ route('login') }}" target="_blank">Sign In</a>
                        <a class="nav-item nav-link" href="{{ route('register') }}" target="_blank">Create new Account</a>
                        <a class="nav-item nav-link" href="{{ route('user.dashboard') }}" target="_blank">Dashboard</a>
                        <a class="btn btn-outline-primary rounded-pill btn-sm px-3 mt-2 mt-md-0" href="{{ route('register') }}" target="_blank"><span class="feather icon-shopping-cart me-1"></span> Sign Up</a>
                    </div>
                </div>
            </div>
        </nav>

        <section class="landing-header">
            <!-- <img src="images/header-bg2.png" class="landing-header-bg d-none d-md-block" alt="header-bg"> -->
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 d-none">
                        <ul class="nav mb-5 justify-content-start justify-content-lg-center d-none d-sm-flex">
                            <a href="#" class="d-flex align-items-center btn btn-sm py-1 btn-primary rounded-pill me-2 mb-2 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="NobleUI HTML Version"><img src="images/logos/html.png" class="me-2" width="16" alt=""> <span>HTML</span></a>
                            <a href="https://nobleui.com/laravel/" target="_blank" class="d-flex align-items-center btn btn-sm py-1 btn-outline-primary rounded-pill me-2 mb-2 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="NobleUI Laravel Version"><img src="images/logos/laravel.png" class="me-2" width="16" alt=""> <span>Laravel</span></a>
                            <a href="https://nobleui.com/angular/" target="_blank" class="d-flex align-items-center btn btn-sm py-1 btn-outline-primary rounded-pill me-2 mb-2 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="NobleUI Angular Version"><img src="images/logos/angular.png" class="me-2" width="16" alt=""> <span>Angular</span></a>
                            <!-- <a href="https://nobleui.com/reactjs/" target="_blank" class="d-flex align-items-center btn btn-sm py-1 btn-outline-primary rounded-pill me-2 mb-2 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="NobleUI ReactJs Version"><img src="./images/logos/scss.png" class="me-2" width="16" alt=""> <span>ReactJs</span></a>
              <a href="https://nobleui.com/vuejs/" target="_blank" class="d-flex align-items-center btn btn-sm py-1 btn-outline-primary rounded-pill mb-2 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="NobleUI VueJs Version"><img src="./images/logos/gulp.png" class="me-2" width="16" alt=""> <span>VueJs</span></a> -->
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="d-flex align-items-start">
                            <h1 class="mb-4 fw-light text-primary"><span class="noble-ui-logo">{{ env('APP_NAME') }}</span></h1>
                        </div>
                        <h3 class="mb-4">Unlocking the Potential of Trading: Empowering Your Investments</h3>
                        <p class="mb-4 text-muted">Experience the power of our back-end trading operations, driving your investments towards success. Advanced Algorithms for Enhanced Trading Performance</p>
                        <a class="btn btn-primary rounded-pill px-3 btn-sm me-2" href="{{ route('register') }}">Join Free Today</a>
                        <a class="btn btn-outline-primary rounded-pill px-3 btn-sm" href="{{ route('login') }}" target="_blank"><span class="feather icon-shopping-cart me-1"></span> Sign in</a>
                    </div>
                    <div class="col-lg-7">
                        <div class="dashboard-img">
                            <img src="{{ asset('landing/banner.png') }}" class="img-fluid landing-header-bg d-none d-lg-block" alt="header-bg">
                        </div>
                    </div>
                </div>
            </div>

            <div class="animation-effect-1">
                <i class="feather icon-circle effect-icon text-primary"></i>
            </div>
            <div class="animation-effect-2">
                <i class="feather icon-heart effect-icon text-danger"></i>
            </div>
            <div class="animation-effect-3">
                <i class="feather icon-triangle effect-icon text-info"></i>
            </div>
            <div class="animation-effect-4">
                <i class="feather icon-thumbs-up effect-icon text-success"></i>
            </div>
            <div class="animation-effect-5">
                <i class="feather icon-square effect-icon text-info"></i>
            </div>
            <div class="animation-effect-6">
                <i class="feather icon-octagon effect-icon text-primary"></i>
            </div>
            <div class="animation-effect-7">
                <i class="feather icon-gift effect-icon text-danger"></i>
            </div>
        </section>

        <section class="why">
            <div class="container">
                <header class="section-header">
                    <!-- <small>works</small> -->
                    <h2>Why Choose <span class="fw-bolder">{{ env('APP_NAME') }}</span></h2>
                    <hr>
                    <p class="lead text-muted">Expert Back-End Trading: Maximizing Your Investment Returns.</p>
                </header>
                <div class="row">
                    <div class="col-md-6 col-xl-4 grid-margin item">
                        <div class="card">
                            <div class="card-body">
                                <div class="icon my-4 d-flex align-items-center justify-content-center">
                                    <i class="feather icon-code icon-xxl text-primary"></i>
                                </div>
                                <div class="d-flex flex-column align-items-center text-center">
                                    <h5 class="mb-3">Extensive Market Knowledge:</h5 class="mb-3">
                                    <p class="text-muted">Stay ahead of the curve with our deep understanding of the cryptocurrency landscape.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 grid-margin item">
                        <div class="card">
                            <div class="card-body">
                                <div class="icon my-4 d-flex align-items-center justify-content-center">
                                    <i class="feather icon-smartphone icon-xxl text-primary"></i>
                                </div>
                                <div class="d-flex flex-column align-items-center text-center">
                                    <h5 class="mb-3">Proven Track Record:</h5 class="mb-3">
                                    <p class="text-muted">Trust our history of delivering consistent and impressive investment returns.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 grid-margin item">
                        <div class="card">
                            <div class="card-body">
                                <div class="icon my-4 d-flex align-items-center justify-content-center">
                                    <i class="feather icon-message-square icon-xxl text-primary"></i>
                                </div>
                                <div class="d-flex flex-column align-items-center text-center">
                                    <h5 class="mb-3">Innovative Technology Solutions:</h5 class="mb-3">
                                    <p class="text-muted">Experience the power of cutting-edge tools and platforms for seamless investment management.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 grid-margin item">
                        <div class="card">
                            <div class="card-body">
                                <div class="icon my-4 d-flex align-items-center justify-content-center">
                                    <i class="feather icon-feather icon-xxl text-primary"></i>
                                </div>
                                <div class="d-flex flex-column align-items-center text-center">
                                    <h5 class="mb-3">Personalized Investment Approach:</h5 class="mb-3">
                                    <p class="text-muted">Benefit from tailored strategies that align with your unique financial goals and risk tolerance.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 grid-margin item">
                        <div class="card">
                            <div class="card-body">
                                <div class="icon my-4 d-flex align-items-center justify-content-center">
                                    <i class="feather icon-edit icon-xxl text-primary"></i>
                                </div>
                                <div class="d-flex flex-column align-items-center text-center">
                                    <h5 class="mb-3">Secure and Transparent Operations:</h5 class="mb-3">
                                    <p class="text-muted">Rest easy knowing that your investments are safeguarded by robust security measures and transparent processes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 grid-margin item">
                        <div class="card">
                            <div class="card-body">
                                <div class="icon my-4 d-flex align-items-center justify-content-center">
                                    <i class="feather icon-gift icon-xxl text-primary"></i>
                                </div>
                                <div class="d-flex flex-column align-items-center text-center">
                                    <h5 class="mb-3">Expert Team of Professionals:</h5 class="mb-3">
                                    <p class="text-muted">Rely on our team of seasoned professionals who bring years of industry expertise to optimize your investment portfolio.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="animation-effect-1">
                <i class="feather icon-circle effect-icon text-primary"></i>
            </div>
            <div class="animation-effect-2">
                <i class="feather icon-heart effect-icon text-danger"></i>
            </div>
            <div class="animation-effect-3">
                <i class="feather icon-triangle effect-icon text-info"></i>
            </div>
            <div class="animation-effect-4">
                <i class="feather icon-thumbs-up effect-icon text-success"></i>
            </div>
            <div class="animation-effect-5">
                <i class="feather icon-square effect-icon text-info"></i>
            </div>
            <div class="animation-effect-6">
                <i class="feather icon-octagon effect-icon text-primary"></i>
            </div>
            <div class="animation-effect-7">
                <i class="feather icon-gift effect-icon text-danger"></i>
            </div>
        </section>

        
        <section class="faq">
            <div class="container">
                <header class="section-header">
                    <!-- <small>works</small> -->
                    <!-- <h2>FAQ</h2> -->
                    <h2>Frequently Asked Questions</h2>
                    <hr>
                    <p class="lead text-muted">Rest easy knowing that your investments are safeguarded by robust security measures and transparent processes.</p>
                </header>
                <div class="accordion col-md-10 col-lg-8 col-xxl-7 mx-auto" id="accordionExample">
                    <div class="accordion-item border mb-3">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What is the minimum withdrawal amount?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Answer: The minimum withdrawal amount is $30.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border mb-3">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Is there a withdrawal fee?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Answer: Yes, there is a withdrawal fee of 3%.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border mb-3">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How does the Direct Bonus work?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Answer: The Direct Bonus is a reward earned when you refer someone directly to our platform and they make an investment.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border mb-3">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                What is the Indirect Level Bonus?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Answer: The Indirect Level Bonus is a multi-level commission earned on the investments made by your referred members up to 10 levels deep.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border mb-3">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Are there any ranks and rewards bonuses?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Answer: Yes, we offer various ranks and rewards bonuses based on your performance and achievements within our investment program.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border mb-3">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                How long does it take to process a withdrawal?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Answer: We strive to process all withdrawal requests within 24 hours, ensuring you receive your funds in a timely manner.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="request-feature py-5">
            <div class="container">
                <h2 class="mb-3">Download PDF for All the Detail</h2>
                <p class="mb-3 text-muteds">Trust our history of delivering consistent and impressive investment returns.</p>
                <a href="{{ asset('assets/cryptoelevn.pdf') }}" target="_blank" class="btn btn-primary btn-sm">Download now <span class="feather icon-arrow-right"></span></a>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-uppercase">{{ env('APP_NAME') }}</h3>
                        <hr>
                        <p class="text-muted tx-14s pe-xl-5 me-md-4 mb-5 mb-md-0">Behind the scenes of our investment website, our robust trading infrastructure powers our back-end operations. With cutting-edge technology, advanced trading algorithms, and real-time market data, we create an environment that maximizes your investment potential. Our goal is to generate consistent returns and help you grow your wealth over time.</p>
                    </div>
                    <div class="col-6 col-md-3">
                        <h6 class="text-muted mb-4 fw-bold">Quick links</h6>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('login') }}" target="_blank" class="tx-14">Sign In</a></li>
                            <li><a href="{{ route('register') }}" target="_blank" class="tx-14">Create Account</a></li>
                            <li><a href="{{ route('user.dashboard') }}" target="_blank" class="tx-14">Go to Dashboard</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3">
                        <h6 class="text-muted mb-4 fw-bold">Find Us</h6>
                        <div class="d-flex">
                            <a href="javascript:;">
                                <i class="feather icon-twitter icon-sm me-3"></i>
                            </a>
                            <a href="javascript:;">
                                <i class="feather icon-facebook icon-sm me-3"></i>
                            </a>
                            <a href="javascript:;">
                                <i class="feather icon-instagram icon-sm me-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="footer-bottom py-3">
            <div class="container">
                <div class="d-flex align-items-center justify-content-center">
                    <p class="text-muted">Copyright © {{ date('Y') }} <a href="#" target="_blank" class="text-muted">{{ env('APP_NAME') }}</a>.</p>
                </div>
            </div>
        </div>

    </div>

    <script src="/landing/plugins/jquery/jquery.min.js"></script>
    <script src="/landing/plugins/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="/landing/js/script.js"></script>

</body>

</html>