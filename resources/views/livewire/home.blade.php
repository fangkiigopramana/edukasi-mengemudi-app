<div>
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset("img2.jpeg") }}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-9 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-1 animated slideInDown">Pelajari teknik
                                        mengemudi yang aman dan baik</h6>
                                    <h1 class="display-4 text-white mb-4 pb-3 animated slideInDown">Mau Tau Cara Mengemudi Yang Aman?</h1>
                                    <a href="#infografis" class="btn btn-primary py-3 px-5 animated slideInDown">Lebih
                                        lanjut<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset("img2.jpg") }}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-9 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-1 animated slideInDown">Pelajari teknik
                                        mengemudi yang aman dan baik</h6>
                                    <h1 class="display-4 text-white mb-4 pb-3 animated slideInDown">Mau Tau Cara Mengemudi Yang Aman?</h1>
                                    <a href="#infografis" class="btn btn-primary py-3 px-5 animated slideInDown">Lebih
                                        lanjut<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->
    <!-- About Start -->
    <div class="container-xxl py-5" id="infografis">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <div id="carouselExample" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://jogja.polri.go.id/yogyakarta/file/Perhatikan-Rambu-Lalu-Lintas-20240702-110146-0000-3--2.png"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://jogja.polri.go.id/yogyakarta/file/Perhatikan-Rambu-Lalu-Lintas-20240702-110146-0000-3--2.png"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://jogja.polri.go.id/yogyakarta/file/Perhatikan-Rambu-Lalu-Lintas-20240702-110146-0000-3--2.png"
                                        class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1 class="mb-4">Lebih Tahu Tata Cara Mengemudi Lewat Poster Kami</h1>
                    <p class="mb-4">Pelajari berbagai teknik mengemudi melalui infografis
                        yang menarik dan mudah dipahami. Tingkatkan pengetahuan Anda untuk berkendara lebih aman dan
                        efisien.</p>
                    <div class="row g-4 mb-3 pb-3">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                    style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">01</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Mudah untuk dipelajari.</h6>
                                    <span>Pelajari teknik mengemudi yang aman dan efisien dengan mudah melalui
                                        infografis yang menarik.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                    style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">02</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Keamanan Berkendara.</h6>
                                    <span>Dapatkan pengetahuan tentang pentingnya menjaga keamanan berkendara.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route("infografis") }}" class="btn btn-primary py-3 px-5">infografis lainnya<i
                            class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl service py-5" style="background-color: rgb(232, 234, 240)">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                {{-- <h6 class="text-primary text-uppercase">// Our Services //</h6> --}}
                <h1 class="mb-5">Apa pentingnya edukasi dalam mengemudi kendaraan?</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-6">
                    <div class="nav w-100 nav-pills me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <i class="fa fa-car-side fa-2x me-3 text-dark"></i>
                            <h4 class="m-0">Meningkatkan Keselamatan di Jalan Raya</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <i class="fa fa-car fa-2x me-3 text-dark"></i>
                            <h4 class="m-0">Mengurangi Pelanggaran Lalu Lintas</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <i class="fa fa-funnel-dollar fa-2x me-3 text-dark"></i>
                            <h4 class="m-0">Mendukung Penghematan Biaya</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <i class="fa fa-people-carry fa-2x me-3 text-dark"></i>
                            <h4 class="m-0">Membangun Tanggung Jawab Sosial</h4>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-12">
                                    <h3 class="mb-3">Kenapa penting?</h3>
                                    <p class="mb-4">Edukasi membantu pengemudi memahami peraturan lalu
                                        lintas, etika berkendara, dan cara menghadapi situasi darurat. Dengan ini,
                                        risiko kecelakaan
                                        dapat diminimalkan.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100"
                                            src="{{ asset("img/1.png") }}" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-12">
                                    <h3 class="mb-3">Kenapa penting?</h3>
                                    <p class="mb-4">Pemahaman yang baik tentang aturan lalu lintas
                                        membuat pengemudi lebih sadar untuk mematuhi rambu, marka, dan peraturan,
                                        sehingga
                                        pelanggaran lalu lintas dapat dikurangi.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100"
                                            src="{{ asset("img/2.jpg") }}" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-12">
                                    <h3 class="mb-3">Kenapa penting?</h3>
                                    <p class="mb-4">Berkendara dengan aman dan efisien dapat mengurangi
                                        risiko kerusakan kendaraan akibat kecelakaan serta menghemat bahan bakar melalui
                                        teknik
                                        eco-driving yang tepat.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100"
                                            src="{{ asset("img/3.jpg") }}" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-12">
                                    <h3 class="mb-3">Kenapa penting?</h3>
                                    <p class="mb-4">Edukasi mengemudi juga menanamkan rasa tanggung jawab
                                        terhadap pengguna jalan lain, seperti pejalan kaki, pengendara lain, dan
                                        lingkungan sekitar.
                                        Hal ini membantu menciptakan budaya berkendara yang aman dan saling menghormati.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100"
                                            src="{{ asset("img/4.jpg") }}" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Booking Start -->
    <div class="container-fluid bg-primary booking my-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="text-white mb-4">Video Edukasi</h1>
                        <p class="text-white mb-0">Pelajari teknik mengemudi yang aman dan efisien untuk mengurangi
                            risiko kecelakaan dan meningkatkan kenyamanan berkendara. Dapatkan pengetahuan yang berguna
                            dan aplikatif melalui video edukasi kami.</p>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                    <div class="mx-auto mt-4 mb-4 max-w-2xl sm:mt-6 sm:mb-6 lg:mt-8 lg:mb-8 lg:max-w-4xl">
                        <iframe class="w-full rounded-[24px]" height="350" width="350"
                            src="https://www.youtube.com/embed/UnqOmbR2qNs" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->

    <!-- QnA Chat Start -->
    <div class="container-xxl py-5" style="background-color: rgb(232, 234, 240)">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5">Fitur Chat FAQ</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-6">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row">
                                <div class="col-md-12" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100"
                                            src="{{ asset("img/qna.jpg") }}" width="100" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="nav w-100 nav-pills me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" type="button">
                            <i class="fa fa-mobile-alt fa-2x text-primary me-3"></i>
                            <h4 class="m-0">Mobile Friendly</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" type="button">
                            <i class="fa fa-bolt fa-2x text-primary me-3"></i>
                            <h4 class="m-0">Respons Cepat</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" type="button">
                            <i class="fa fa-shield-alt fa-2x text-primary me-3"></i>
                            <h4 class="m-0">Keamanan</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-primary text-start p-4 mb-0"
                            type="button">
                            <i class="fa fa-check fa-2x me-3"></i>
                            <h4 class="m-0">Jawaban Akurat</h4>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- QnA Chat End -->
</div>
