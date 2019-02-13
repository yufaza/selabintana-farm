
@extends('frontend.layout')

@section('styles')
@endsection

@section('scripts')
  <script>
    $(function () {

      App.atcDemo() // Add to Cart Demo
      App.atwDemo() // Add to Wishlist Demo
      App.homeSlider('#home-slider')
      App.dealsSlider('#deals-slider')
      App.colorOption()

      // example countdown, 6 hours from now for flash deals
      var countdown = new Date()
      countdown.setHours(countdown.getHours() + 6)
      $('#flash-deals-countdown').countdown(countdown, function (event) {
        $(this).text(event.strftime('%H:%M:%S'))
      })

    })
    </script>
@endsection



@section('content')
    <!-- Main Content -->

    <!-- Home slider -->
    <div class="swiper-container" id="home-slider">
      <div class="swiper-wrapper">

        <div class="swiper-slide" data-cover="/slider/FarmSlider3.jpg" data-xs-height="220px" data-sm-height="350px" data-md-height="400px" data-lg-height="430px" data-xl-height="460px">
          <div class="swiper-overlay right">
            <div class="text-center">
              <h1 class="bg-white text-dark d-inline-block p-1 animated" data-animate="fadeDown">KANDANG</h1>
              <p class="display-4 animated bg-white text-dark shadow" data-animate="fadeDown">BERTEKNOLOGI TINGGI</p>
            </div>
          </div>
        </div>

        <div class="swiper-slide" data-cover="/slider/FarmSlider2.jpg" data-xs-height="220px" data-sm-height="350px" data-md-height="400px" data-lg-height="430px" data-xl-height="460px">
          <div class="swiper-overlay left">
            <div class="text-center">
              <h1 class="bg-white text-dark d-inline-block p-1 animated" data-animate="fadeDown">PRODUK</h1>
              <p class="display-4 animated text-dark bg-white" data-animate="fadeDown">KELAS EKSPORT</p>
            </div>
          </div>
        </div>

        <div class="swiper-slide" data-cover="/slider/FarmSlider1.jpg" data-xs-height="220px" data-sm-height="350px" data-md-height="400px" data-lg-height="430px" data-xl-height="460px">
          <div class="swiper-overlay right">
            <div class="text-center">
              <h1 class="bg-white text-dark d-inline-block p-1 animated" data-animate="fadeDown">KESEHATAN</h1>
              <p class="display-4 animated text-dark bg-white" data-animate="fadeDown">AYAM SELALU TERJAGA</p>
            </div>
          </div>
        </div>

      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev autohide"><i data-feather="chevron-left"></i></div>
      <div class="swiper-button-next autohide"><i data-feather="chevron-right"></i></div>
    </div>
    <!-- /Home slider -->

    <div class="container mt-3">

      <h4 class="bold text-center mt-gutter">Produk Unggulan</h4>

      <!-- Featured Products -->
      <div class="card-deck card-deck-product mt-3 mb-2 mb-sm-0 row">
        @foreach($products as $product)
        <div class="col-md-3 card card-product">
          <div class="card-body">
            <span><img class="card-img-top" src="{{$product->featured_image}}" alt="Card image cap"><span>
            <span class="card-title">{{$product->product_name}}</span>
            <span class="badge badge-success">{{($product->stock>=100)? "Tersedia" : "Sisa ".$product->stock." unit"}}</span>
          <div class="price"><span class="h5">Rp. {{number_format($product->price, 0, ",", ".")}}</span></div>
          </div>
          <div class="card-footer">
            <form action="{{ route('cart.store') }}" method="post">
              {{ csrf_field() }}
              
              <input type="hidden" name="id" value="{{$product->id}}">
              <input type="hidden" name="product_name" value="{{$product->product_name}}">
              <input type="hidden" name="featured_image" value="{{$product->featured_image}}">
              <input type="hidden" name="price" value="{{$product->price}}">
              <label class="" for="quantity">Kuantitas</label>
              <div class="form-group">
                <input type="number" list="qty" class="form-control rounded-pill btn-outline-success text-center" name="quantity" min="1" required>
                <datalist id="qty">
                    <option value="1">
                    <option value="2">
                    <option value="3">
                    <option value="4">
                    <option value="5">
                  </datalist>
              </div>
              <button type="submit" class="btn btn-sm rounded-pill btn-outline-primary btn-block{{-- atc-demo --}}">Add to Cart</button>
            </form>
          </div>
        </div>
        @endforeach
      </div>
      <!-- /Featured Products -->
      <div class="text-center">
          <a href="{{route('cart')}}" class="btn btn-primary rounded-pill btn-lg">Keranjang <i data-feather="arrow-right"></i></a>
      </div>

    </div>
    <!-- /Main Content -->
@endsection