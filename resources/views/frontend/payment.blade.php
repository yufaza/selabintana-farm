@extends('frontend.layout')
@section('scripts')
    <script>
        $(function () {
            $('#form-payment').card({
                container: '.card-wrapper'
            })
        })
    </script>
@endsection


@section('content')
    <!-- Main Content -->
    <div class="container my-3">
      <div class="card">
        <div class="card-header bg-white border-bottom flex-center p-0">
          <ul class="nav nav-pills card-header-pills main-nav-pills" role="tablist">
            <li class="nav-item">
              <a class="nav-link" href="cart.html">CART</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="javascript:void(0)"><i data-feather="arrow-right"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shipping.html">SHIPPING</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="javascript:void(0)"><i data-feather="arrow-right"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="payment.html">PAYMENT</a>
            </li>
          </ul>
        </div>
        <div class="card-body pt-4 flex-center flex-column">
          <h2 class="roboto-condensed">Pay with Credit Card</h2>
          <h6 class="text-muted mb-4">or checkout with <a href="javascript:void(0)"><strong>PayPal</strong></a></h6>
          <form class="form-checkout form-style-1" id="form-payment">
            <div class='card-wrapper mb-3'></div>
            <div class="form-group">
              <input type="text" name="number" class="form-control" placeholder="Card Number">
            </div>
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Full Name">
            </div>
            <div class="form-row">
              <div class="form-group col-sm-6">
                <input type="text" name="expiry" class="form-control" placeholder="Expiry Date">
              </div>
              <div class="form-group col-sm-6">
                <input type="text" name="cvc" class="form-control" placeholder="CVC Code">
              </div>
            </div>
          </form>
          <div class="text-center">
            <small class="counter">TOTAL</small>
            <h3 class="roboto-condensed bold">$130.00</h3>
            <a href="checkout-done.html" class="btn btn-primary rounded-pill btn-lg">Pay Now</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /Main Content -->
@endsection


