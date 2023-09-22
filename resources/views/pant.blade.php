@extends('index')

@section('container')
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <div class="container-fluid bg-secondary py-5 bg-pants" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h2 class="display-4 text-white animated zoomIn">Template Machine</h2>
                <h5 class="pt-5 h5 text-white wow fadeInUp" data-wow-delay="0.2s">Pants Section</h5>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-secondary text-uppercase">Template Machine</h5>
                <h1 class="mb-0">BAGIAN CELANA YANG DIKERJAKAN MESIN OTOMATIS</h1>
            </div>
            <div class="align-items-center justify-content-center">
                <div class="text-center">
                    <div class="position-relative d-flex align-items-center justify-content-center h-50">
                        <img class="w-50 wow zoomIn" data-wow-delay="0.1s" src="img/pant.png" style="object-fit: contain;"
                            draggable="false">
                    </div>
                </div>
            </div>
            <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container py-5">
                    <div class="row g-5">
                        <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                            <div
                                class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center shadow-lg">
                                <h4 class="mb-3">Kantong Depan</h4>
                                <div id="carouselKantongDepan" class="carousel slide" data-ride="carousel"
                                    data-interval="2000" data-pause="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="img/kantong_depan.jpg" alt="Slide 1">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/kantong_depan1.jpg" alt="Slide 2">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/kantong_depan2.jpg" alt="Slide 3">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/kantong_depan3.jpg" alt="Slide 3">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/kantong_depanh1.jpg" alt="Slide 3">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/kantong_depanh2.jpg" alt="Slide 3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                            <div
                                class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center shadow-lg">
                                <h4 class="mb-3">Golphi</h4>
                                <div id="carouselGolphi" class="carousel slide" data-ride="carousel"
                                    data-interval="2000" data-pause="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="img/golphi.jpg" alt="Slide 1">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/golphi1.jpg" alt="Slide 2">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/golphi2.jpg" alt="Slide 3">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/golphi3.jpg" alt="Slide 3">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/golphih1.jpg" alt="Slide 3">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/golphih2.jpg" alt="Slide 3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                            <div
                                class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center shadow-lg">
                                <h4 class="mb-3">Inseam & Outseam</h4>
                                <div id="carouselInoutseam" class="carousel slide" data-ride="carousel"
                                    data-interval="2000" data-pause="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="img/inoutseam.jpg" alt="Slide 1">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/inoutseam1.jpg" alt="Slide 2">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/inoutseam2.jpg" alt="Slide 3">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/inoutseam3.jpg" alt="Slide 3">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/inoutseamh1.jpg" alt="Slide 3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                            <div
                                class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center shadow-lg">
                                <h4 class="mb-3">Waistband Celana</h4>
                                <div id="carouselWaistband" class="carousel slide" data-ride="carousel"
                                    data-interval="2000" data-pause="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="img/waistband.jpg" alt="Slide 1">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/waistband1.jpg" alt="Slide 2">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/waistband2.jpg" alt="Slide 3">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/waistband3.jpg" alt="Slide 3">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/waistbandh1.jpg" alt="Slide 3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                            <div
                                class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center shadow-lg">
                                <h4 class="mb-3">Dart Celana</h4>
                                <div id="carouselDart" class="carousel slide" data-ride="carousel"
                                    data-interval="2000" data-pause="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="img/dart.jpg" alt="Slide 1">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/dart1.jpg" alt="Slide 2">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/dart2.jpg" alt="Slide 3">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/dart3.jpg" alt="Slide 3">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/darth1.jpg" alt="Slide 3">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/darth2.jpg" alt="Slide 3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                            <div
                                class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center shadow-lg">
                                <h4 class="mb-3">Bibir Saku</h4>
                                <div id="carouselBibir" class="carousel slide" data-ride="carousel"
                                    data-interval="2000" data-pause="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="img/bibir.jpg" alt="Slide 1">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/bibir1.jpg" alt="Slide 2">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/bibir2.jpg" alt="Slide 3">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/bibir3.jpg" alt="Slide 3">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/bibirh1.jpg" alt="Slide 3">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/bibirh2.jpg" alt="Slide 3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
