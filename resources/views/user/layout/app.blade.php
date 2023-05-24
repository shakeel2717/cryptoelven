<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} {{ env('APP_DESC') }}</title>
    <link rel="stylesheet" href="/assets/vendors/core/core.css">
    <link rel="stylesheet" href="/assets/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/assets/css/demo_2/style.css">
    <link rel="shortcut icon" href="/assets/images/favicon.png" />
</head>

<body>
    <div class="main-wrapper">

        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar">
            <div class="sidebar-header">
                <a href="#" class="sidebar-brand">
                    Noble<span>UI</span>
                </a>
                <div class="sidebar-toggler not-active">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            @include('inc.user.nav')
        </nav>
        <div class="page-wrapper">

            <!-- partial:partials/_navbar.html -->
            <nav class="navbar">
                <a href="#" class="sidebar-toggler">
                    <i data-feather="menu"></i>
                </a>
                <div class="navbar-content">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flag-icon flag-icon-us mt-1" title="us"></i> <span class="font-weight-medium ml-1 mr-1 d-none d-md-inline-block">English</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="languageDropdown">
                                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-us" title="us" id="us"></i> <span class="ml-1"> English </span></a>
                            </div>
                        </li>
                        <li class="nav-item dropdown nav-notifications">
                            <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="bell"></i>
                                <div class="indicator">
                                    <div class="circle"></div>
                                </div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="notificationDropdown">
                                <div class="dropdown-header d-flex align-items-center justify-content-between">
                                    <p class="mb-0 font-weight-medium">0 Notifications</p>
                                    <a href="javascript:;" class="text-muted">Clear all</a>
                                </div>
                                <div class="dropdown-body">

                                </div>
                                <div class="dropdown-footer d-flex align-items-center justify-content-center">
                                    <a href="javascript:;">View all</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown nav-profile">
                            <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="https://via.placeholder.com/30x30" alt="profile">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="profileDropdown">
                                <div class="dropdown-header d-flex flex-column align-items-center">
                                    <div class="figure mb-3">
                                        <img src="https://via.placeholder.com/80x80" alt="">
                                    </div>
                                    <div class="info text-center">
                                        <p class="name font-weight-bold mb-0">{{ auth()->user()->name }}</p>
                                        <p class="email text-muted mb-3">{{ auth()->user()->email }}</p>
                                    </div>
                                </div>
                                <div class="dropdown-body">
                                    <ul class="profile-nav p-0 pt-3">
                                        <li class="nav-item">
                                            <a href="pages/general/profile.html" class="nav-link">
                                                <i data-feather="user"></i>
                                                <span>Profile</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:;" onclick="logoutFunction()" class="nav-link">
                                                <i data-feather="log-out"></i>
                                                <span>Log Out</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- partial -->

            <div class="page-content">

                <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                    <div>
                        <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
                    </div>
                </div>

                <div class="row">
                    <div class="row flex-grow">
                        <div class="col-md-4 grid-margin stretch-card">
                            @include('inc.card',['title' => 'Earning Balance','value' => number_format(balance(auth()->user()->id), 2)])
                        </div>
                        <div class="col-md-4 grid-margin stretch-card">
                            @include('inc.card',['title' => 'Overall Income','value' => number_format(inBalance(auth()->user()->id), 2)])
                        </div>
                        <div class="col-md-4 grid-margin stretch-card">
                            @include('inc.card',['title' => 'Overall Withdraw','value' => number_format(withdraw(auth()->user()->id), 2)])
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row flex-grow">
                        <div class="col-md-3 grid-margin stretch-card">
                            @include('inc.card',['title' => 'Daily Profit','value' => number_format(roiBalance(auth()->user()->id), 2)])
                        </div>
                        <div class="col-md-3 grid-margin stretch-card">
                            @include('inc.card',['title' => 'Profit Delivered','value' => number_format(roiBalanceDelivered(auth()->user()->id), 2)])
                        </div>
                        <div class="col-md-3 grid-margin stretch-card">
                            @include('inc.card',['title' => 'Direct Commission','value' => number_format(directCommission(auth()->user()->id), 2)])
                        </div>
                        <div class="col-md-3 grid-margin stretch-card">
                            @include('inc.card',['title' => 'In-Direct Team Comm.','value' => number_format(inDirectTotalCommission(auth()->user()->id), 2)])
                        </div>
                        <div class="col-md-3 grid-margin stretch-card">
                            @include('inc.card',['title' => 'Team Invested Earning','value' => number_format(passive(auth()->user()->id), 2) ])
                        </div>
                        <div class="col-md-3 grid-margin stretch-card">
                            @include('inc.card',['title' => 'Invested Profit','value' => number_format(userGotRoi(auth()->user()->id), 2) ])
                        </div>
                        <div class="col-md-3 grid-margin stretch-card">
                            @include('inc.card',['title' => 'Invested Profit Estimate','value' => number_format(userWillGetRoi(auth()->user()->id), 2) ])
                        </div>
                        <div class="col-md-3 grid-margin stretch-card">
                            @include('inc.card',['title' => 'Overall Sales','value' => number_format(overallSale(auth()->user()->id), 2) ])
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Active investment Detail</h5>
                                <h3 class="text-uppercase ">
                                    {{ number_format(myPlanCount(auth()->user()->id), 2) }}
                                </h3>
                                <hr>
                                <div id="progressbar1" class="mx-auto"></div>
                                <table class="table table-striped">
                                    <thead class="text-left">
                                        <tr>
                                            <th>Total</th>
                                            <td>${{ number_format(networkCapReach(auth()->user()->id), 2) }}/-
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody class="text-left">
                                        <tr>
                                            <th>Remaining</th>
                                            <td>${{ number_format(networkCapReach(auth()->user()->id) + networkCapRemovedBalance(auth()->user()->id) - networkCap(auth()->user()->id), 2) }}/-
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Achieve</th>
                                            <td>${{ number_format(networkCap(auth()->user()->id) - networkCapRemovedBalance(auth()->user()->id), 2) }}/-
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline mb-2">
                                    <h6 class="card-title mb-0">Projects</h6>
                                </div>
                                <hr>
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th class="pt-0">#</th>
                                                <th class="pt-0">Project Name</th>
                                                <th class="pt-0">Start Date</th>
                                                <th class="pt-0">Due Date</th>
                                                <th class="pt-0">Status</th>
                                                <th class="pt-0">Assign</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>NobleUI jQuery</td>
                                                <td>01/01/2021</td>
                                                <td>26/04/2021</td>
                                                <td><span class="badge badge-danger">Released</span></td>
                                                <td>Leonardo Payne</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>NobleUI Angular</td>
                                                <td>01/01/2021</td>
                                                <td>26/04/2021</td>
                                                <td><span class="badge badge-success">Review</span></td>
                                                <td>Carl Henson</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>NobleUI ReactJs</td>
                                                <td>01/05/2021</td>
                                                <td>10/09/2021</td>
                                                <td><span class="badge badge-info-muted">Pending</span></td>
                                                <td>Jensen Combs</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>NobleUI VueJs</td>
                                                <td>01/01/2021</td>
                                                <td>31/11/2021</td>
                                                <td><span class="badge badge-warning">Work in Progress</span>
                                                </td>
                                                <td>Amiah Burton</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>NobleUI Laravel</td>
                                                <td>01/01/2021</td>
                                                <td>31/12/2021</td>
                                                <td><span class="badge badge-danger-muted text-white">Coming soon</span></td>
                                                <td>Yaretzi Mayo</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>NobleUI NodeJs</td>
                                                <td>01/01/2021</td>
                                                <td>31/12/2021</td>
                                                <td><span class="badge badge-primary">Coming soon</span></td>
                                                <td>Carl Henson</td>
                                            </tr>
                                            <tr>
                                                <td class="border-bottom">3</td>
                                                <td class="border-bottom">NobleUI EmberJs</td>
                                                <td class="border-bottom">01/05/2021</td>
                                                <td class="border-bottom">10/11/2021</td>
                                                <td class="border-bottom"><span class="badge badge-info-muted">Pending</span></td>
                                                <td class="border-bottom">Jensen Combs</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <p class="text-muted text-center text-md-left">Copyright © {{ date('Y') }} {{ env('APP_NAME') }}. All rights reserved</p>
                    <p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Handcrafted With <i class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i> by <a href="https://asanwebs.com/">ASAN WEBS</a> </p>
                </footer>
            </div>
        </div>
        <script src="/assets/vendors/core/core.js"></script>
        <script src="/assets/vendors/chartjs/Chart.min.js"></script>
        <script src="/assets/vendors/jquery.flot/jquery.flot.js"></script>
        <script src="/assets/vendors/jquery.flot/jquery.flot.resize.js"></script>
        <script src="/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
        <script src="/assets/vendors/apexcharts/apexcharts.min.js"></script>
        <script src="/assets/vendors/progressbar.js/progressbar.min.js"></script>
        <script src="/assets/vendors/feather-icons/feather.min.js"></script>
        <script src="/assets/js/template.js"></script>
        <script src="/assets/js/dashboard.js"></script>
        <script src="/assets/js/datepicker.js"></script>
        <script src="/assets/js/custom.js"></script>
</body>

</html>