@extends('layout.main')


@section('container')

<!DOCTYPE html>
<html lang="en">
    
      <!--====== Start Preloader ======-->
      <div class="preloader" >
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
                        <div class="col-lg-8">
                            <div class="page-title">
                                <h1 class="title">FAQ</h1>
                                <ul class="breadcrumbs-link">
                                    <li><a href="index.html">Home</a></li>
                                    <li class="active">FAQ</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Hero Section ======-->
        <!--====== Start Contact Section ======-->
        <section class="contact-section pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="section-title section-title-center mb-50">
                            <span class="sub-title">FAQ GETVOUCHER</span>
                        
                        </div>
                    </div>
                </div>
                <div class="container py-4">

                  <div class="list-group w-100">
                    <a href="#shortExampleAnswer1collapse" data-mdb-toggle="collapse" aria-expanded="false"
                      aria-controls="shortExampleAnswer1collapse" class="list-group-item list-group-item-action">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Bagaimana Caranya menggunakan voucher di GETVOUCHER ?</h5>
                      </div>
                     
                      <small><u>selebihnya</u></small>
                      <!-- Collapsed content -->
                      <div class="collapse mt-3" id="shortExampleAnswer1collapse">
                        Cukup login terlebih dahulu lalu setelah login user tinggal memilih produk dari toko yang tersedia dan user tinggal klik lihat untuk melihat kode dari voucher yang di inginkan
                      </div>
                    </a>
                    <a href="#shortExampleAnswer2collapse" data-mdb-toggle="collapse" aria-expanded="false"
                      aria-controls="shortExampleAnswer1collapse" class="list-group-item list-group-item-action">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Bagaimana Caranya dapat mendaftar di GETVOUCHER ?</h5>
                      </div>
                     
                      <small class="text-muted"><u>selebihnya</u></small>
                      <!-- Collapsed content -->
                      <div class="collapse mt-3" id="shortExampleAnswer2collapse">
                       user cukup klik daftar jika ingin mendaftar pada GETVOUCHER
                      </div>
                    </a>
                    <a href="#shortExampleAnswer3collapse" data-mdb-toggle="collapse" aria-expanded="false"
                      aria-controls="shortExampleAnswer1collapse" class="list-group-item list-group-item-action">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Bagaimana cara untuk berkomunikasi dengan customer service ?</h5>
                      </div>
                      
                      <small class="text-muted"><u>selebihnya</u></small>
                      <!-- Collapsed content -->
                      <div class="collapse mt-3" id="shortExampleAnswer3collapse">
                       dibagian footer terdapat nomer dari customer service yang dapat dihubungi 
                      </div>
                    </a>
                    @php
                        $no = 4;
                    @endphp
                    @foreach ($data as $data)
                        @php
                            $no++;
                        @endphp
                    <a href="#shortExampleAnswer{{$no}}collapse" data-mdb-toggle="collapse" aria-expanded="false"
                    aria-controls="shortExampleAnswer1collapse" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1">{{ $data->question }}</h5>
                    </div>
                    
                    <small class="text-muted"><u>selebihnya</u></small>
                    <!-- Collapsed content -->
                    <div class="collapse mt-3 " id="shortExampleAnswer{{$no}}collapse" >
                     {{ $data->answer }} 
                    </div>
                  </a>
                  @endforeach

                  </div>

                </div>
                    <div class="col-lg-8">
                        <div class="contact-wrapper-one mb-30 wow fadeInRight">
                            <div class="contact-form">
                                <form action="/add/faq" method="post">
                                    @csrf
                                    <div class="row">
                                        
                                        <div class="col-lg-6">
                                            <div class="form_group">
                                                <input type="text" class="form_control" placeholder="Username" name="username" required>
                                            </div>
                                        </div>
                                       
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <textarea class="form_control" placeholder="Pertanyaan Anda" name="message"></textarea>
                                            </div>
                                        </div>
                                       
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <button class="main-btn" type="submit">Kirim</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>

@endsection