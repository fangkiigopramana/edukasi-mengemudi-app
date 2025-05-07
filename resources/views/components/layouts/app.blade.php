<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ config("app.name") }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <!-- Styles -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/custom/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/custom/style.css" rel="stylesheet">

    @livewireStyles

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img src="{{ asset("favicon-32x32.png") }}" style="margin-right: 20px" width="50" height="50" />
            <h2 class="m-0 text-primary">{{ config("app.name") }}</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" wire:navigate
                    class="nav-item nav-link {{ request()->routeIs("home") ? "active" : "" }}">Home</wire:navigate>
                    <a href="/infografis" wire:navigate
                        class="nav-item nav-link {{ request()->routeIs("infografis") ? "active" : "" }}">Infografis</a>
                    <a href="/videos" wire:navigate
                        class="nav-item nav-link {{ request()->routeIs("videos") ? "active" : "" }}">Videos</a>
                    <a href="/chat" wire:navigate
                        class="nav-item nav-link {{ request()->routeIs("chat") ? "active" : "" }}">FAQ</a>
            </div>
        </div>
        <div class="d-none d-lg-flex align-items-center pe-4">
            <img src="{{ asset("img/logo.png") }}" alt="Logo" width="50" height="50">
        </div>

    </nav>
    <!-- Navbar End -->


    <!-- Main Content -->
    <main>
        {{ $slot }}
    </main>

    <div class="container-fluid bg-primary">
        <footer class="container py-5 text-light">
            <div class="row">
                <div class="col-md-6 mb-3 d-flex flex-column align-items-start">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo PKTJ" width="100" height="100" class="mb-3">
                    <p class="text-body-secondary">DIFA RAKHA MUDZAKA</p>
                    <p class="text-body-secondary">Website Edukasi Mengemudi</p>
                    <p class="text-body-secondary">2025</p>
                </div>

                <div class="col-md-6 mb-3">
                    <p class="text-body-secondary text-justify" style="text-align: justify;">Website ini dibuat untuk memberikan edukasi mengenai cara mengemudi yang aman dan benar. Diharapkan dapat membantu pengguna memahami aturan dan teknik mengemudi dengan lebih baik. Selain itu, website ini juga menyediakan berbagai informasi penting terkait keselamatan berkendara. Dengan adanya informasi ini, diharapkan pengguna dapat meningkatkan kesadaran akan pentingnya keselamatan di jalan raya dan menjadi pengemudi yang lebih bertanggung jawab.</p>
                    <ul class="nav row-column gap-5">
                        <li class="nav-item mb-2"><a href="/" wire:navigate class="nav-link p-0 text-body-secondary text-light {{ request()->routeIs('home') ? 'fw-bold' : '' }}">Home</a></li>
                        <li class="nav-item mb-2"><a href="/infografis" wire:navigate class="nav-link p-0 text-body-secondary text-light {{ request()->routeIs('infografis') ? 'fw-bold' : '' }}">Infografis</a></li>
                        <li class="nav-item mb-2"><a href="/videos" wire:navigate class="nav-link p-0 text-body-secondary text-light {{ request()->routeIs('videos') ? 'fw-bold' : '' }}">Videos</a></li>
                        <li class="nav-item mb-2"><a href="/chat" wire:navigate class="nav-link p-0 text-body-secondary text-light {{ request()->routeIs('chat') ? 'fw-bold' : '' }}">FAQ</a></li>
                    </ul>
                </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <p>&copy; 2025 Website Edukasi Mengemudi. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-body-emphasis" href="#" aria-label="Instagram"><svg
                                class="bi" width="24" height="24">
                                <use xlink:href="#instagram" />
                            </svg></a></li>
                    <li class="ms-3"><a class="link-body-emphasis" href="#" aria-label="Facebook"><svg
                                class="bi" width="24" height="24" aria-hidden="true">
                                <use xlink:href="#facebook" />
                            </svg></a></li>
                </ul>
            </div>
        </footer>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    @livewireScripts

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/custom/main.js"></script>
</body>

</html>
