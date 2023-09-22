<head>
    <?php include 'partials/head.php' ?>
    <title>
        <?php $title = "HOME";
        echo "$title", "$t" ?>
    </title>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->

    <!-- Topbar End -->

    <!-- Navbar & Carousel Start -->
    <?php include 'partials/nav.php' ?>
    <div class="container-fluid bg-secondary py-5"
        style="margin-bottom: ; background-image: url('img/bgmain.jpg'); background-size: cover;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h2 class="display-4 text-white animated zoomIn mb-5">Chikal Jaya Makmur Garment</h2>
                <a href="#aboutus" class="btn btn-secondary py-md-3 px-md-5 me-3 animated slideInLeft">About
                    Us</a>
            </div>
        </div>
    </div>

    <!-- Navbar & Carousel End -->

    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.2s">
                    <div class="bg-secondary shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-light d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                        </div>
                        <div class="ps-4">
                            <h6 class="text-white mb-0">T-Shirt per Month</h6>
                            <h1 class="text-white mb-0" data-toggle="counter-up">11250</h1>
                            <a href="tshirt.php" class="btn btn-outline-light py-md-1 px-md-3 animated slideInRight">See
                                More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.4s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-secondary d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <img class="w-75" src="img/shirt.jpg" alt>
                        </div>
                        <div class="ps-4">
                            <h6 class="text-secondary mb-0">Shirt per Month</h6>
                            <h1 class="mb-0" data-toggle="counter-up">24000</h1>
                            <a href="shirt.php"
                                class="btn btn-outline-secondary py-md-1 px-md-3 animated slideInRight">See
                                More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-secondary shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <img class="w-75" src="img/outer.jpg" alt>
                        </div>
                        <div class="ps-4">
                            <h6 class="text-white mb-0">Outer per Month</h6>
                            <h1 class="text-white mb-0" data-toggle="counter-up">8750</h1>
                            <a href="outer.php" class="btn btn-outline-light py-md-1 px-md-3 animated slideInRight">See
                                More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.8s">
                    <div class="bg-white shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-secondary d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <img class="w-75" src="img/pants.jpg" alt>
                        </div>
                        <div class="ps-4">
                            <h6 class="text-secondary mb-0">Pants per Month</h6>
                            <h1 class="mb-0" data-toggle="counter-up">11250</h1>
                            <a href="pants.php"
                                class="btn btn-outline-secondary py-md-1 px-md-3 animated slideInRight">See
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Facts Start -->

    <!-- About Start -->
    <div id="aboutus" class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-secondary text-uppercase">About Us</h5>
                        <h1 class="mb-0">CV Chikal Jaya Makmur</h1>
                    </div>
                    <p class="mb-4"><b>CJM-Garment</b> merupakan perusahaan
                        yang bergerak di industri garment, berdiri sejak
                        tahun 1996 berlokasi di Bandung. Kami telah di
                        percaya oleh ratusan klien mulai dari Brand
                        Clothingan, Perusahaan, Instansi Pemerintah,
                        Pendidikan, Organisasi, hingga Komunitas sebagai
                        perusahaan industri garment terbaik.
                        <br><br>
                        Kami selalu berusaha konsisten dan dapat di
                        andalkan, pelayanan terbaik kami berbasis customer
                        satisfaction untuk menyediakan produk garment dengan
                        kualitas terbaik, dengan kontrol yang ketat dan
                        harga yang kompetitif.
                        <br><br>
                        Experience and knowledge yang membuat SDM kami
                        terampil dan cekatan dalam mendesain dan memproduksi
                        produk dengan kualitas export.
                    </p>
                    <!-- <div class="bg-secondary ps-0 d-flex align-items-end justify-content-end"><button><a href="">asdsa</a></button></div> -->
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">

                        <div class="bg-secondary d-flex align-items-center justify-content-center rounded"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Contact Us</h5>
                            <h4 class="text-secondary mb-0">+62 821 2842 9187</h4>
                        </div>
                        <div class="pl-6 col text-end">
                            <div class="pl-6 col text-end">
                                <a href="https://cjm-garment.com/_/cs/rotate?group=1659661 fff       cz    037605&amp;text="
                                    class="btn btn-outline-secondary py-md-3 px-md-5 animated slideInRight">Contact
                                    Us</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel"
                            data-bs-interval="1500">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/carousel1.jpg" class="d-block w-100" style="object-fit: cover;">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/carousel2.jpg" class="d-block w-100" style="object-fit: cover;">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/carousel3.jpg" class="d-block w-100" style="object-fit: cover;">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/carousel4.jpg" class="d-block w-100" style="object-fit: cover;">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/carousel5.jpg" class="d-block w-100" style="object-fit: cover;">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/carousel6.jpg" class="d-block w-100" style="object-fit: cover;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Features Start -->
        <div class="container-fluid py-3 pt-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-3">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h5 class="fw-bold text-secondary text-uppercase">Why Choose
                        Us</h5>
                    <h1 class="mb-0">Our Commitment</h1>
                </div>
                <div class="container-fluid facts py-5 pt-lg-6">
                    <div class="container py-5 pt-lg-0">
                        <div class="row gx-0">
                            <div class="col-lg-3 wow zoomIn" data-wow-delay="0.2s">
                                <div class="bg-secondary shadow-lg d-flex align-items-center justify-content-center p-4"
                                    style="height: 150px;">
                                    <div class="bg-light d-flex align-items-center justify-content-center rounded mb-2"
                                        style="width: 60px; height: 60px;">
                                        <img class="w-75" src="img/award.jpg" alt>
                                    </div>
                                    <div class="ps-4">
                                        <h5 class="text-white mb-0">Quality</h5>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 wow zoomIn" data-wow-delay="0.4s">
                                <div class="bg-white shadow d-flex align-items-center justify-content-center p-4"
                                    style="height: 150px;">
                                    <div class="bg-secondary d-flex align-items-center justify-content-center rounded mb-2"
                                        style="width: 60px; height: 60px;">
                                        <img class="w-75" src="img/comunication.jpg" alt>
                                    </div>
                                    <div class="ps-4">
                                        <h5 class="text-secondary mb-0">Communication</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 wow zoomIn" data-wow-delay="0.6s">
                                <div class="bg-secondary shadow d-flex align-items-center justify-content-center p-4"
                                    style="height: 150px;">
                                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                                        style="width: 60px; height: 60px;">
                                        <img class="w-75" src="img/pertumbuhan.jpg" alt>
                                    </div>
                                    <div class="ps-4">
                                        <h5 class="text-white mb-0">Growth</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 wow zoomIn" data-wow-delay="0.8s">
                                <div class="bg-white shadow d-flex align-items-center justify-content-center p-4"
                                    style="height: 150px;">
                                    <div class="bg-secondary d-flex align-items-center justify-content-center rounded mb-2"
                                        style="width: 60px; height: 60px;">
                                        <img class="w-75" src="img/sinergi.jpg" alt>
                                    </div>
                                    <div class="ps-4">
                                        <h5 class="text-secondary mb-0">Synergy</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="align-items-center justify-content-center pb-5 wow fadeInUp" data-wow-delay="0,5">
            <div class="text-center">
                <div class="position-relative d-flex align-items-center justify-content-center h-50">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/60DGBi_TgHY"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
        <!-- Features Start -->
        <?php include 'partials/backtotop.php' ?>
        <?php include 'partials/footer.php' ?>
        <?php include 'partials/script.php' ?>
</body>