@extends('frontend.layout')
@section('content')
    <!-- Main Content -->
    <div class="container my-3">
      <div class="card">
        <div class="card-header bg-white border-bottom flex-center p-0">
          <ul class="nav nav-pills card-header-pills main-nav-pills" role="tablist">
            <li class="nav-item">
                <a class="nav-link" href="#">KERANJANG</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"><i data-feather="arrow-right"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">PENGIRIMAN</a>
            </li>
          </ul>
        </div>
        
        <div class="card-body pt-5 flex-center flex-column">
        <form class="form-checkout form-style-1" action="{{route('proceed')}}" method="post">
            {{ csrf_field() }}
            <div class="form-row">
              <div class="form-group col-12">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="name" placeholder="Masukkan nama" required>
              </div>
              <div class="form-group col-12">
                <label for="phone">No Telp</label>
                <input type="text" class="form-control" name="phone" placeholder="Masukkan no yang bisa dihubungi" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-12">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email yang digunakan" required>
              </div>
              <div class="form-group col-12">
                <label for="address">Alamat Lengkap</label>
                <textarea type="text" class="form-control" name="address" required maxlength="191">
                </textarea>
              </div>
            </div>
            <hr>
          <div class="text-center">
            <small class="counter">TOTAL PEMBELIAN</small>
            <h3 class="roboto-condensed bold">Rp. {{number_format(session('total'), 0, ",", ".")}}</h3>
            <a href="/cart" class="btn btn-primary rounded-pill btn-lg"><i data-feather="arrow-left"></i> Kembali</a>
            <button type="submit" class="btn btn-primary rounded-pill btn-lg">Pembayaran <i data-feather="arrow-right"></i></button>
          </div>
        </form>
        </div>
      </div>
    </div>
    <!-- /Main Content -->
@endsection