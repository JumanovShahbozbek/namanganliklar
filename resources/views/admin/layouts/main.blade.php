<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/admin/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/admin/assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/admin/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/admin/assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        @include('admin.layouts.navbar')
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                @php
                    $messages = DB::table('messages')
                        ->latest()
                        ->where('status', 0)
                        ->take(4)
                        ->get();
                    
                    $sms = DB::table('messages')
                        ->latest()
                        ->where('status', 0)
                        ->get();
                @endphp
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">
                                <p style="color: red">
                                    {{ count($sms) }}
                                </p> &nbsp;
                                Message
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">

                            @foreach ($messages as $item)
                                <a href="{{ route('admin.messages.show', $item->id) }}" class="dropdown-item">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle" src="/admin/assets/img/user.jpg" alt=""
                                            style="width: 40px; height: 40px;">
                                        <div class="ms-2">
                                            <h6 class="fw-normal mb-0">{{ $item->name }}</h6>
                                            <small>{{ $item->updated_at }}</small>
                                        </div>
                                    </div>
                                </a>
                                <hr class="dropdown-divider">
                            @endforeach

                            @if (count($messages) == 0)
                                <span style="color: red">Xabarlar yoq</span>
                            @else
                                <a href="/admin/messages" class="dropdown-item text-center">See all message</a>
                            @endif

                        </div>
                    </div>
                    @php
                        $audits = DB::table('audits')
                            ->latest()
                            ->where('status', 0)
                            ->take(4)
                            ->get();
                        
                        $audit = DB::table('audits')
                            ->latest()
                            ->where('status', 0)
                            ->get();
                    @endphp
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">
                                <p style="color: red">
                                    {{ count($audit) }}
                                </p> &nbsp;
                                Notificatin
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">

                            @foreach ($audits as $audit)
                                <a href="{{ route('admin.audits.show', $audit->id) }}" class="dropdown-item">
                                    <h6 class="fw-normal mb-0">
                                        @if ($audit->event == 'delete')
                                            Ma`lumot ochirildi
                                        @elseif ($audit->event == 'edit')
                                            Ma`lumot o`zgartirildi
                                        @else
                                            Ma`lumot qo`shildi
                                        @endif
                                    </h6>
                                    <small>{{ $audit->updated_at }}</small>
                                </a>
                                <hr class="dropdown-divider">
                            @endforeach

                            @if (count($audits) == 0)
                                <span style="color: red">O`zgartirishlar yoq</span>
                            @else
                                <a href="/admin/audits" class="dropdown-item text-center">See all notifications</a>
                            @endif
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="/admin/assets/img/user.jpg" alt=""
                                style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">John Doe</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <form action="{{ route('logout') }}" class="logout" method="POST">
                                @csrf
                                <button class="dropdown-item has-icon text-danger"> <i
                                        class="fas fa-sign-out-alt"></i>
                                    Log out</button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            @yield('content')

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                            <br>
                            Distributed By <a class="border-bottom" href="https://themewagon.com"
                                target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/admin/assets/lib/chart/chart.min.js"></script>
    <script src="/admin/assets/lib/easing/easing.min.js"></script>
    <script src="/admin/assets/lib/waypoints/waypoints.min.js"></script>
    <script src="/admin/assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/admin/assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="/admin/assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="/admin/assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>

    <!-- Template Javascript -->
    <script src="/admin/assets/js/main.js"></script>
</body>

</html>
