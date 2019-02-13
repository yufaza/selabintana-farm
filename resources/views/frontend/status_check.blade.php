@extends('frontend.layout')
@section('content')
    <!-- Main Content -->
    <div class="container my-3">
      <div class="card">
        <div class="card-body pt-5">
        <h3 class="bold">Cek Status Pemesanan</h3>
        <form class="form-style-1" action="{{route('check_purchase')}}" method="post">
            {{ csrf_field() }}
            <div class="form-row">
              <div class="form-group col-12">
                <label for="nama">Kode Pemesanan</label>
                <input type="text" class="form-control" name="order_code" placeholder="Masukkan kode pemesanan" required>
              </div>
              <div class="form-group col-12">
                <small>Pastikan anda tidak menghilangkan data kode pemesanan anda! jika anda lupa, silakan anda menghubungi operator kami <a href="mailto:yufaza57@gmail.com">cs.farm@yufaza.com</a></small>
              </div>
            </div>
            <hr>
          <div class="text-center">
            <button type="submit" class="btn btn-primary rounded-pill btn-lg">Cek Pemesanan <i data-feather="arrow-right"></i></button>
          </div>
        </form>
        </div>
      </div>
    </div>
    <!-- /Main Content -->
@endsection