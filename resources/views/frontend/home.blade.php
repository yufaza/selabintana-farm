
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

        <div class="swiper-slide" data-cover="https://mimity-fashion53.netlify.com/img/slider/1.jpg" data-xs-height="220px" data-sm-height="350px" data-md-height="400px" data-lg-height="430px" data-xl-height="460px">
          <div class="swiper-overlay right">
            <div class="text-center">
              <p class="display-4 animated" data-animate="fadeDown">Business Casual<br/>Outfit Ideas</p>
              <a href="shop-grid.html" class="btn btn-primary rounded-pill animated" data-animate="fadeUp" data-addclass-on-xs="btn-sm">SHOP NOW</a>
            </div>
          </div>
        </div>

        <div class="swiper-slide" data-cover="https://mimity-fashion53.netlify.com/img/slider/2.jpg" data-xs-height="220px" data-sm-height="350px" data-md-height="400px" data-lg-height="430px" data-xl-height="460px">
          <div class="swiper-overlay left">
            <div class="text-center">
              <h1 class="bg-white text-dark d-inline-block p-1 animated" data-animate="fadeDown">TOP BRANDS</h1>
              <p class="display-4 animated" data-animate="fadeDown">30% - 70% OFF</p>
              <a href="shop-grid.html" class="btn btn-warning rounded-pill animated" data-animate="fadeUp" data-addclass-on-xs="btn-sm">SHOP NOW</a>
            </div>
          </div>
        </div>

        <div class="swiper-slide" data-cover="https://mimity-fashion53.netlify.com/img/slider/3.jpg" data-xs-height="220px" data-sm-height="350px" data-md-height="400px" data-lg-height="430px" data-xl-height="460px">
          <div class="swiper-overlay right">
            <div class="text-center">
              <h1 class="bg-white text-dark d-inline-block p-1 animated" data-animate="fadeDown">Brand New</h1>
              <p class="display-4 animated" data-animate="fadeDown">High Quality Clothes</p>
              <a href="shop-grid.html" class="btn btn-primary rounded-pill animated" data-animate="fadeUp" data-addclass-on-xs="btn-sm">SHOP NOW</a>
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

      <h4 class="bold text-center mt-gutter">Featured Products</h4>

      <!-- Featured Products -->
      <div class="card-deck card-deck-product mt-3 mb-2 mb-sm-0 row">
        @foreach($products as $product)
        <div class="col-md-3 card card-product">
          <div class="card-body">
            <button class="wishlist atw-demo active" title="Added to wishlist"><i data-feather="heart"></i></button>
            <a href="shop-single.html"><img class="card-img-top" src="https://mimity-fashion53.netlify.com/img/products/1_small.jpg" alt="Card image cap"></a>
            <a href="shop-single.html" class="card-title">{{$product->product_name}}</a>
            <span class="badge badge-success">{{$product->stock}}</span>
          <div class="price"><span class="h5">Rp. {{number_format($product->price, 0, ",", ".")}}</span></div>
          </div>
          <div class="card-footer">
            <button class="btn btn-sm rounded-pill btn-outline-primary btn-block atc-demo">Add to Cart</button>
          </div>
        </div>
        @endforeach
      </div>
      <!-- /Featured Products -->

    </div>
    <!-- /Main Content -->
@endsection