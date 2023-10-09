@extends('index')

@section('content')
<div class="container-fluid bg-secondary py-5 bg-pants" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h2 class="display-4 text-white animated zoomIn">Our Product</h2>
            <h5 class="pt-5 h5 text-white wow fadeInUp" data-wow-delay="0.2s">T-Shirt Section</h5>
        </div>
    </div>
</div>

<div class="container text-start">
    <div class="row g-1 align-items-start">
        <div class="row col-lg-6 g-0 mb-3 pt-5">
            <div class="section-title position-relative pb-3 mb-5">
                <h1 class="mb-0">T-Shirt</h1>
            </div>
            <p>Di PT Chikal Jaya Makmur, produksi t-shirt kami mencapai puncaknya dengan jumlah impresif sebesar 11.250
                potong setiap bulan. Kami memahami bahwa kualitas adalah elemen kunci dalam memenuhi harapan pelanggan
                kami, dan itulah mengapa kami menempatkan penekanan khusus pada standar kualitas yang tinggi. <br /><br />

                Setiap t-shirt yang keluar dari lini produksi kami melewati proses seleksi bahan baku yang ketat untuk
                memastikan hanya bahan berkualitas terbaik yang digunakan. Selain itu, proses produksi diawasi dengan
                ketat dan teliti, dengan teknologi modern dan mesin-mesin mutakhir yang digunakan untuk menjaga tampilan
                yang rapi, kenyamanan yang tak tertandingi, serta daya tahan yang luar biasa.<br /><br />

                Kami memahami bahwa kepercayaan pelanggan sangat penting, dan itulah mengapa kami berkomitmen untuk
                memberikan kualitas yang terjamin dalam setiap t-shirt yang kami produksi. Ketika Anda memilih t-shirt
                dari PT Chikal Jaya Makmur, Anda bukan hanya mendapatkan pakaian yang modis dan nyaman, tetapi Anda juga
                mendapatkan keyakinan bahwa setiap produk telah melalui proses produksi yang teliti dan ketat untuk
                memastikan standar kualitas yang tinggi.</p>
            <hr>
            <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="d-flex align-items-center mb-3">
                    <i class="fa fa-check text-secondary me-3"></i>Graphic Tees
                </h5>
            </div>
            <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.2s">
                <h5 class="d-flex align-items-center mb-3">
                    <i class="fa fa-check text-secondary me-3"></i>Long Sleeve
                </h5>
            </div>
            <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
                <h5 class="d-flex align-items-center mb-3">
                    <i class="fa fa-check text-secondary me-3"></i>Plain
                </h5>
            </div>
            <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.4s">
                <h5 class="d-flex align-items-center mb-3">
                    <i class="fa fa-check text-secondary me-3"></i>Raglan
                </h5>
            </div>
            <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.5s">
                <h5 class="d-flex align-items-center mb-3">
                    <i class="fa fa-check text-secondary me-3"></i>Striples
                </h5>
            </div>
            <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.7s">
                <h5 class="d-flex align-items-center mb-3">
                    <i class="fa fa-check text-secondary me-3"></i>ETC.
                </h5>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <div class="container mt-5">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade shadow" data-bs-ride="carousel"
                        data-bs-interval="1500">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/tshirtitem1.jpg" class="imgcrs d-block w-100" alt="item1">
                            </div>
                            <div class="carousel-item">
                                <img src="img/tshirtitem2.jpg" class="imgcrs d-block w-100" alt="item2">
                            </div>
                            <div class="carousel-item">
                                <img src="img/tshirtitem3.jpg" class="imgcrs d-block w-100" alt="item3">
                            </div>
                            <div class="carousel-item">
                                <img src="img/tshirtitem4.jpg" class="imgcrs d-block w-100" alt="item4">
                            </div>
                            <div class="carousel-item">
                                <img src="img/tshirtitem5.jpg" class="imgcrs d-block w-100" alt="item5">
                            </div>
                            <div class="carousel-item">
                                <img src="img/tshirtitem6.jpg" class="imgcrs d-block w-100" alt="item6">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-3 mb-5">
        <div class="bg-white">
        <div class="section-title text-center position-relative pb-2 mb-5 mx-auto pt-5 " style="max-width: 600px;">
            <h5 class="fw-bold text-secondary text-uppercase">Our Client</h5>
        </div>
            <div class="owl-carousel vendor-carousel">
                <img src="img/client-1.jpg" alt="">
                <img src="img/client-2.jpg" alt="">
                <img src="img/client-3.jpg" alt="">
                <img src="img/client-4.jpg" alt="">
                <img src="img/client-5.jpg" alt="">
                <img src="img/client-6.jpg" alt="">
                <img src="img/client-7.jpg" alt="">
                <img src="img/client-8.jpg" alt="">
                <img src="img/client-9.jpg" alt="">
                <img src="img/client-10.jpg" alt="">
                <img src="img/client-11.jpg" alt="">
                <img src="img/client-12.jpg" alt="">
            </div>
        </div>
    </div>
</div>
@endsection
