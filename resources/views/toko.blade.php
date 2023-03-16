@extends('layout.main')

@section('container')
</header>
<!--====== Start Hero Section ======-->
<section class="hero-area">
    <div class="breadcrumbs-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="page-title">
                        <h1 class="title">Toko</h1>
                        <ul class="breadcrumbs-link">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Toko</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Hero Section ======-->   
  <!--====== Start Listing Section ======-->
  <section class="listing-grid-area pt-120 pb-90">
    <div class="" style="padding-left: 20px; padding-right: 20px; justify-content: center;">
        <div class="row">
            <div class="col-lg-4">
                <div class="sidebar-widget-area">
                    <div class="widget search-listing-widget mb-30 wow fadeInUp">
                        <h4 class="widget-title">Filter Search</h4>
                        <form>
                            <div class="search-form">
                                <div class="form_group">
                                    <input type="search" class="form_control" placeholder="Search keyword" name="search" required>
                                    <i class="ti-search"></i>
                                </div>
                                <div class="form_group">
                                    <select class="wide">
                                        <option data-dsplay="Category">Category</option>
                                        <option value="01">Hotel</option>
                                        <option value="02">Furniture</option>
                                        <option value="03">Pakaian</option>
                                        <option value="03">Top Up</option>
                                    </select>
                                </div>
                                <div class="form_group">
                                    <select class="wide">
                                        <option data-dsplay="Category">Toko</option>
                                        <option value="01">Uniqlo</option>
                                        <option value="02">Codashop</option>
                                        <option value="03">Oyo</option>
                                        <option value="03">Ace</option>
                                    </select>
                                </div>
                                
                            </div>
                            <div class="form_group">
                                <a href="login.html" class="main-btn icon-btn">Search Now</a>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-8">
                <div class="listing-search-filter mb-40">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="filter-left d-flex align-items-center">
                   
                            </div>
                        </div>
                      
                    </div>
                </div>
                <div class="listing-grid-wrapper">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="listing-item listing-grid-item-two mb-30 wow fadeInUp">
                                <div class="listing-thumbnail">
                                    <img src="{{ asset('images/client/11.png') }}" alt="Client Image">
                                    <span class="featured-btn">Top Up Game</span>
                                   
                                </div>
                                <div class="listing-content">
                                    <h3 class="title"><a href="login.html">CODASHOP</a></h3>
                                    <p>Platform Online Top Up Item Game</p>
                                    <div class="listing-meta">
                                        <ul>
                                            <a href="login.html" type="button" class="btn btn-outline-warning">Lihat</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="listing-item listing-grid-item-two mb-30 wow fadeInUp">
                                <div class="listing-thumbnail">
                                    <img src="{{ asset('images/client/6.png') }}" alt="Client Image">
                                    <span class="featured-btn">Pakaian</span>
                                   
                                </div>
                                <div class="listing-content">
                                    <h3 class="title"><a href="login.html">UNIQLO</a></h3>
                                    <p>Fashion Style</p>
                                    <div class="listing-meta">
                                        <ul>
                                            <a href="login.html" type="button" class="btn btn-outline-warning">Lihat</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="listing-item listing-grid-item-two mb-30 wow fadeInUp">
                                <div class="listing-thumbnail">
                                    <img src="{{ asset('images/client/1.png') }}" alt="Client Image">
                                    <span class="featured-btn">Hotel</span>
                                   
                                </div>
                                <div class="listing-content">
                                    <h3 class="title"><a href="login.html">HOTELS.COM</a></h3>
                                    <p>Platform Booking Hotel</p>
                                    <div class="listing-meta">
                                        <ul>
                                            <a href="login.html" type="button" class="btn btn-outline-warning">Lihat</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="listing-item listing-grid-item-two mb-30 wow fadeInUp">
                                <div class="listing-thumbnail">
                                    <img src=" {{ asset('images/client/5.png') }}" alt="Client Image">
                                    <span class="featured-btn">Furniture</span>
                                   
                                </div>
                                <div class="listing-content">
                                    <h3 class="title"><a href="login.html">ACE HARDWARE</a></h3>
                                    <p>Platform Kebutuhan Rumah Tangga</p>
                                    <div class="listing-meta">
                                        <ul>
                                            <a href="login.html" type="button" class="btn btn-outline-warning">Lihat</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="listing-item listing-grid-item-two mb-30 wow fadeInUp">
                                <div class="listing-thumbnail">
                                    <img src="{{ asset('images/client/2.png') }}" alt="Client Image">
                                    <span class="featured-btn">Platform</span>
                                   
                                </div>
                                <div class="listing-content">
                                    <h3 class="title"><a href="login.html">SHOPEE</a></h3>
                                    <p>Platform Jual Beli Barang Online</p>
                                    <div class="listing-meta">
                                        <ul>
                                            <a href="login.html" type="button" class="btn btn-outline-warning">Lihat</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="listing-item listing-grid-item-two mb-30 wow fadeInUp">
                                <div class="listing-thumbnail">
                                    <img src=" {{ asset('images/client/4.png') }}" alt="Client Image">
                                    <span class="featured-btn">Platform</span>
                                   
                                </div>
                                <div class="listing-content">
                                    <h3 class="title"><a href="login.html">RUPA-RUPA</a></h3>
                                    <p>Platform Jual Beli Furniture</p>
                                    <div class="listing-meta">
                                        <ul>
                                            <a href="login.html" type="button" class="btn btn-outline-warning">Lihat</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                    </div>

                    <nav aria-label="Page navigation example" style=" justify-content: center; ">
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
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Listing Section ======-->

@endsection