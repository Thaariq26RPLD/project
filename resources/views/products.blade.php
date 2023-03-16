@extends('layout.main')

@section('container')
        <!--====== Start Preloader ======-->
        <div class="preloader">
            <div class="loader">
                <img src=" {{ asset('images/loader.png') }}" alt="loader">
            </div>
        </div>
        <!--====== End Preloader ======-->
     
        <!--====== Start Hero Section ======-->
        <section class="hero-area">
            <div class="breadcrumbs-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-title">
                                <h1 class="title">SEMUA PRODUK </h1>
                                <ul class="breadcrumbs-link">
                                    <li><a href="index2.html">Home</a></li>
                                    <li class="active">Produk</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><br>
        <!--====== End Hero Section ======-->
        <!--====== Start Products Section ======-->
        <section class="products-area pt-50 pb-50">
            <div class="container">

                    <div class="row height d-flex justify-content-center align-items-center">

                      <div class="col-md-8">

                        <div class="search mb-5">
                          <i class="fa fa-search"></i>
                          <input type="text" class="form-control" placeholder="Cari Voucher Apa?">
                          <button class="btn btn-warning text-light">Cari</button>
                        </div>
                        
                      </div>
                      
                    </div>

                <div class="products-filter mb-30">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-5">
                            <div class="sort-dropdown d-flex align-items-center">
                                <div class="show-text">
                                    
                                </div>
                               
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="listing-item listing-grid-one mb-45 wow fadeInUp" dta-wow-delay="20ms" style="height: 685px; overflow: hidden;">
                                    <div class="listing-thumbnail">
                                        <img src="{{ asset ('images/uniqlo1.png') }}" alt="Listing Image" style="width: 374px; height: 374px; object-fit: cover">
                                        
                                        <div class="thumbnail-meta d-flex justify-content-between align-items-center">
                                            <div class="meta-icon-title d-flex align-items-center">
                                                <div class="icon">
                                                    <img src="{{ asset ('images/uniqlo.jpeg') }}" alt="">
                                                </div>
                                                <div class="title">
                                                    <h6>UNIQLO</h6>
                                                </div>
                                            </div>
                                            <span class="status st-close">DISKON 25%</span>
                                        </div>
                                    </div>
                                    <div class="listing-content">
                                        <h3 class="title"><a href="kode_uniqlo.html">Jaket</a></h3>
                                        <span class="badge badge-danger">Kadaluwarsa Tanggal 21 Maret</span>
                                        <span class="price" style="  display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; overflow: hidden;">Uniqlo Promo Banyak promo eksklusif yang bisa kamu dapatkan. Raih cashback dan diskon cuma di Uniqlo. Pesan online produk favoritmu hanya di Uniqlo. 100% Original</span><br>
                                        <center> <a href="kode_uniqlo.html" class="btn btn-outline-warning">LIHAT</a></center>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="listing-item listing-grid-one mb-45 wow fadeInUp" dta-wow-delay="20ms" style="height: 685px; overflow: hidden;">
                                    <div class="listing-thumbnail">
                                        <img src="{{ asset('images/Genshin.jpg') }}" alt="Listing Image" style="width: 374px; height: 374px; object-fit: cover">
                                        
                                        <div class="thumbnail-meta d-flex justify-content-between align-items-center">
                                            <div class="meta-icon-title d-flex align-items-center">
                                                <div class="icon">
                                                    <img src=" {{ asset('images/coda2.jpg') }}" alt="">
                                                </div>
                                                <div class="title">
                                                    <h6>CODASHOP</h6>
                                                </div>
                                            </div>
                                            <span class="status st-close">DISKON 60%</span>
                                        </div>
                                    </div>
                                    <div class="listing-content">
                                        <h3 class="title"><a href="kode_codashop.html">Genshin Impact</a></h3>
                                        <span class="badge badge-danger">Kadaluwarsa Tanggal 16 Maret</span>
                                       
                                        <span class="price">Codashop memiliki Banyak promo eksklusif yang bisa kamu dapatkan. Raih cashback dan diskon cuma di Codashop. Pesan online Genesis Crystal hanya di Codashop. 100% aman dan terpercaya</span><br>
                                        <center> <a href="kode_codashop4.html" class="btn btn-outline-warning">LIHAT</a></center>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="listing-item listing-grid-one mb-45 wow fadeInUp" dta-wow-delay="20ms" style="height: 685px; overflow: hidden;">
                                    <div class="listing-thumbnail">
                                        <img src="{{ asset('images/listing/l-1.png') }}" alt="Listing Image" style="width: 374px; height: 374px; object-fit: cover">
                                        
                                        <div class="thumbnail-meta d-flex justify-content-between align-items-center">
                                            <div class="meta-icon-title d-flex align-items-center">

                                                <div class="icon" style="border: 2px solid white;  background-color: rgba(252, 252, 248, 0.926);">
                                                    <img src="{{ asset('images/logo ace.png') }}" alt="" style="object-fit: contain;">
                                                </div>

                                                <div class="title">
                                                    <h6>ACE</h6>
                                                </div>
                                            </div>
                                            <span class="status st-close">DISKON 30%</span>
                                        </div>
                                    </div>
                                    <div class="listing-content">
                                        <h3 class="title"><a href="kode_ace.html">Soeil Kursi Ayun</a></h3>
                                        <span class="badge badge-danger">Kadaluwarsa Tanggal 21 Maret</span>
                                        <span class="price">Hadirkan kenyamanan bersantai di halaman rumah Anda dengan menggunakan Soleil kursi ayun 3 dudukan. Kursi terbuat dari material berkualitas yang kokoh.</span><br>
                                        <center> <a href="kode_ace.html" class="btn btn-outline-warning">LIHAT</a></center>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="listing-item listing-grid-one mb-45 wow fadeInUp" dta-wow-delay="20ms" style="height: 685px; overflow: hidden;">
                                    <div class="listing-thumbnail">
                                        <img src="{{ asset ('images/listing/htl1.png') }}" alt="Listing Image" tyle="width: 374px; height: 374px; object-fit: cover">
                                        
                                        <div class="thumbnail-meta d-flex justify-content-between align-items-center" >
                                            <div class="meta-icon-title d-flex align-items-center">

                                                <div class="icon" style="border: 2px solid white;  background-color: rgba(252, 252, 248, 0.926);">
                                                    <img src=" {{ asset ('images/client/02.png') }}" alt="Client Image">                                          
                                                </div>
                                                <div class="title">
                                                    <h6>HOTEL</h6>
                                                </div>
                                            </div>
                                            <span class="status st-close">DISKON 30%</span>
                                        </div>
                                    </div>
                                    <div class="listing-content">
                                        <h3 class="title"><a href="kode_hotel.html">Majapahit Hotel Kamar Classic (1 King Size Bed)</a></h3>
                                        <span class="badge badge-danger">Kadaluwarsa Tanggal 21 Maret</span>
                                        <span class="price">Dapatkan diskon ekstra 150k untuk penyewaan Majapahit Hotel Classic di Hotels.com!</span>
                                        <center> <a href="kode_hotel.html" class="btn btn-outline-warning">LIHAT</a></center>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="listing-item listing-grid-one mb-45 wow fadeInUp" dta-wow-delay="20ms" style="height: 685px; overflow: hidden;">
                                    <div class="listing-thumbnail">
                                        <img src="{{ asset ('images/uniqlo2.png') }}" alt="Listing Image" style="width: 374px; height: 374px; object-fit: cover">
                                        
                                        <div class="thumbnail-meta d-flex justify-content-between align-items-center">
                                            <div class="meta-icon-title d-flex align-items-center">
                                                <div class="icon">
                                                    <img src="{{ asset('images/uniqlo.jpeg') }}" alt="">
                                                </div>
                                                <div class="title">
                                                    <h6>UNIQLO</h6>
                                                </div>
                                            </div>
                                            <span class="status st-close">DISKON 45%</span>
                                        </div>
                                    </div>
                                    <div class="listing-content">
                                        <h3 class="title"><a href="kode_uniqlo.html">Sweater</a></h3>
                                        <span class="badge badge-danger">Kadaluwarsa Tanggal 21 Maret</span>
                                        <span class="price">Uniqlo Promo Banyak promo eksklusif yang bisa kamu dapatkan. Raih cashback dan diskon cuma di Uniqlo. Pesan online produk favoritmu hanya di Uniqlo. 100% Original</span><br>
                                        <center> <a href="kode_uniqlo1.html" class="btn btn-outline-warning">LIHAT</a></center>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="listing-item listing-grid-one mb-45 wow fadeInUp" dta-wow-delay="30ms" style="height: 685px; overflow: hidden;">
                                    <div class="listing-thumbnail">
                                        <img src=" {{ asset ('images/uniqlo3.png') }}" alt="Listing Image" style="width: 374px; height: 374px; object-fit: cover">
                                        
                                        <div class="thumbnail-meta d-flex justify-content-between align-items-center">
                                            <div class="meta-icon-title d-flex align-items-center">
                                                <div class="icon">
                                                    <img src="{{ asset ('images/uniqlo.jpeg') }}" alt="">
                                                </div>
                                                <div class="title">
                                                    <h6>UNIQLO</h6>
                                                </div>
                                            </div>
                                            <span class="status st-close">DISKON 50%</span>
                                        </div>
                                    </div>
                                    <div class="listing-content">
                                        <h3 class="title"><a href="kode_uniqlo.html">Hoodie</a></h3>
                                        <span class="badge badge-danger">Kadaluwarsa Tanggal 21 Maret</span>
                                        <span class="price" >Uniqlo Promo Banyak promo eksklusif yang bisa kamu dapatkan. Raih cashback dan diskon cuma di Uniqlo. Pesan online produk favoritmu hanya di Uniqlo. 100% Original</span><br>
                                        <center> <a href="kode_uniqlo2.html" class="btn btn-outline-warning">LIHAT</a></center>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="listing-item listing-grid-one mb-45 wow fadeInUp" dta-wow-delay="40ms" style="height: 685px; overflow: hidden;">
                                    <div class="listing-thumbnail">
                                        <img src=" {{ asset ('images/uniqlo4.png') }}" alt="Listing Image" style="width: 374px; height: 374px; object-fit: cover">
                                        
                                        <div class="thumbnail-meta d-flex justify-content-between align-items-center">
                                            <div class="meta-icon-title d-flex align-items-center">
                                                <div class="icon">
                                                    <img src=" {{ asset ('images/uniqlo.jpeg') }}" alt="">
                                                </div>
                                                <div class="title">
                                                    <h6>UNIQLO</h6>
                                                </div>
                                            </div>
                                            <span class="status st-close">CASHBACK 100RB</span>
                                        </div>
                                    </div>
                                    <div class="listing-content">
                                        <h3 class="title"><a href="kode_uniqlo.html">Jeans</a></h3>
                                        <span class="badge badge-danger">Kadaluwarsa Tanggal 21 Maret</span>
                                        <span class="price">Uniqlo Promo Banyak promo eksklusif yang bisa kamu dapatkan. Raih cashback dan diskon cuma di Uniqlo. Pesan online produk favoritmu hanya di Uniqlo. 100% Original</span><br>
                                        <center> <a href="kode_uniqlo3.html" class="btn btn-outline-warning">LIHAT</a></center>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="listing-item listing-grid-one mb-45 wow fadeInUp" dta-wow-delay="50ms" style="height: 685px; overflow: hidden;">
                                    <div class="listing-thumbnail">
                                        <img src=" {{ asset ('images/uniqlo5.png') }}" alt="Listing Image" style="width: 374px; height: 374px; object-fit: cover">
                                        
                                        <div class="thumbnail-meta d-flex justify-content-between align-items-center">
                                            <div class="meta-icon-title d-flex align-items-center">
                                                <div class="icon">
                                                    <img src="{{ asset('images/uniqlo.jpeg') }}" alt="">
                                                </div>
                                                <div class="title">
                                                    <h6>UNIQLO</h6>
                                                </div>
                                            </div>
                                            <span class="status st-close">CASHBACK 75RB</span>
                                        </div>
                                    </div>
                                    <div class="listing-content">
                                        <h3 class="title"><a href="kode_uniqlo.html">Celana Pendek</a></h3>
                                        <span class="badge badge-danger">Kadaluwarsa Tanggal 20 Maret</span>
                                        <span class="price">Uniqlo Promo Banyak promo eksklusif yang bisa kamu dapatkan. Raih cashback dan diskon cuma di Uniqlo. Pesan online produk favoritmu hanya di Uniqlo. 100% Original</span><br>
                                        <center> <a href="kode_uniqlo4.html" class="btn btn-outline-warning">LIHAT</a></center>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="listing-item listing-grid-one mb-45 wow fadeInUp" dta-wow-delay="60ms" style="height: 685px; overflow: hidden;">
                                    <div class="listing-thumbnail">
                                        <img src="{{ asset ('images/uniqlo6.png') }}" alt="Listing Image" style="width: 374px; height: 374px; object-fit: cover">
                                       
                                        <div class="thumbnail-meta d-flex justify-content-between align-items-center">
                                            <div class="meta-icon-title d-flex align-items-center">
                                                <div class="icon">
                                                    <img src=" {{ asset ('images/uniqlo.jpeg') }}" alt="">
                                                </div>
                                                <div class="title">
                                                    <h6>UNIQLO</h6>
                                                </div>
                                            </div>
                                            <span class="status st-close">CASHBACK 150RB</span>
                                        </div>
                                    </div>
                                    <div class="listing-content">
                                        <h3 class="title"><a href="kode_uniqlo.html">Tas</a></h3>
                                        <span class="badge badge-danger">Kadaluwarsa Tanggal 30 Maret</span>

                                        <span class="price">Uniqlo Promo Banyak promo eksklusif yang bisa kamu dapatkan. Raih cashback dan diskon cuma di Uniqlo. Pesan online produk favoritmu hanya di Uniqlo. 100% Original</span><br>
                                        <center> <a href="kode_uniqlo5.html" class="btn btn-outline-warning">LIHAT</a></center>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                      <li class="page-item disabled">
                        <a class="page-link">Previous</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                  </nav>
                    </div>
                </section>
               
                <!--====== End Listing Section ======-->
               
        <!--====== End Products Section ======-->
       
@endsection