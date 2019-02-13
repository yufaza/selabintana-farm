@extends('frontend.layout')
@section('scripts')

@endsection

@section('content')
    
    <!-- Main Content -->
    <div class="container my-3">
      <div class="card">
        <div class="card-body">
          <div class="row">


            <!-- Contact Us Form -->
            <div class="col-md-12 mt-3 mt-md-0">
              <h3 class="bold">Konfirmasi Pembayaran</h3>
                <form class="mt-3 form-style-1" action="{{route('upayment')}}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                <div class="form-group">
                  <label for="order_code">Kode Pemesanan</label>
                  <span class="input-icon">
                    <i data-feather="code"></i>
                    <input type="text" class="form-control" name="order_code" placeholder="Masukkan kode pemesanan" required>
                  </span>
                </div>
                <div class="form-group">
                  <label for="order_code">Gambar Bukti Pembayaran</label>
                  <input type="file" class="form-control" name="featured_image">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary rounded-pill btn-lg">Kirimkan Bukti Pembayaran <i data-feather="arrow-right"></i></button>
                </div>
              </form>
            </div>
            <!-- /Contact Us Form -->

          </div>
        </div>
      </div>
    </div>
    <!-- /Main Content -->
@endsection