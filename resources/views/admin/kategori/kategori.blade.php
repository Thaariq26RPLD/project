@extends('admin.layout.main')

@section('container')


    <main id="main" class="main">



      <div class="pagetitle">
        <h1>Kategori</h1>
        <nav> 
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Halaman utama</a></li>
            <li class="breadcrumb-item active">Kategori</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->
  
      <section class="section">
        <div class="row">
          <div class="col-lg-6  w-100">
            <div class="card">
              <div class="card-body">
                <div class="d-flex" style="justify-content: space-between">
                <h5 class="card-title">Voucher {{ (request('search') !== null ) ? $tittle : '' }} dalam proses</h5>




              </div>


              <div class="d-flex" style="justify-content: space-between">

                <div class="d-flex">
                  <select name="" id="" style="padding: 6px; margin-right: 4px;">
                    <option value="">1</option>
                    <option value="">1</option>
                    <option value="">1</option>
                  </select>
                  <p style="margin-top: auto; margin-bottom: auto;">Entries Per Page</p>
                </div>

                <form action="/kategori/" class="d-flex gap-3" >

                  <div class="search-form">
            
                    <div class="form_group">
                      <select class="form-select" style="width: 150px" name="search"  aria-label="Default select example">
                        <option data-dsplay="Category" value="" >Category</option>
                        @foreach ($data as $data)

                        <option value="{{ $data->nama_kategori }}" {{ (request('search') === $data->nama_kategori) ? 'selected' : '' }}>{{ $data->nama_kategori }}</option>


                      @endforeach

                      </select>

                    </div>
            
                    
                  </div>
                  <button type="submit" style="width: 40%" class="btn btn-primary">Cari</button>
                  </form>

              </div>
                <!-- Default Table -->
                <table class="table table-borderless" id="datatable">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Voucher</th>
                      <th scope="col">Nama voucher</th>
                      <th scope="col">Keterangan</th>
                      <th scope="col">Kategori</th>
                      <th scope="col">Status</th>
                      <th scope="col">Mulai tanggal</th>
                      <th scope="col">Berakhir tanggal</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $no=0;
                    @endphp
                    @foreach ($data1 as $data2)

                    <tr>
                      <th scope="row">{{++$no}}</th>
                      <th scope="row"><img src=" {{ asset("admin/img/icon2/".$data2->gambar)  }}" width="60%" height="60%" alt="gambar"></th>
                      <td>{{$data2->nama_voucher }}</td>
                      <td>{{$data2->keterangan }}</td>
                      <td>{{$data2->kategori }}</td>
                      <td><span class="badge text-bg-success">{{$data2->status }}</span></td>
                      <td>{{$data2->mulai_tanggal }}</td>
                      <td>{{$data2->berakhir }}</td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
                <!-- End Default Table Example -->
              </div>
            </div>
  
          </div>
        </div>

      </section>
  
    </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@endsection