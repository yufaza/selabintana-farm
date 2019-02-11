@extends('frontend.layout')
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
              <a class="nav-link active" href="shipping.html">SHIPPING</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="javascript:void(0)"><i data-feather="arrow-right"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="payment.html">PAYMENT</a>
            </li>
          </ul>
        </div>
        <div class="card-body pt-5 flex-center flex-column">
          <form class="form-checkout form-style-1">
            <div class="form-row">
              <div class="form-group col-6">
                <label for="shippingFirstName">First Name</label>
                <input type="text" class="form-control" id="shippingFirstName" value="John">
              </div>
              <div class="form-group col-6">
                <label for="shippingLastName">Last Name</label>
                <input type="text" class="form-control" id="shippingLastName" value="Thor">
              </div>
              <div class="form-group col-6">
                <label for="shippingEmail">Email Address</label>
                <input type="email" class="form-control" id="shippingEmail" value="john.thor@example.com">
              </div>
              <div class="form-group col-6">
                <label for="shippingPhone">Phone Number</label>
                <input type="tel" class="form-control" id="shippingPhone" value="1-787-376-1552">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-12">
                <label for="shippingAddress">Address</label>
                <input type="text" class="form-control" id="shippingAddress" value="2114  Jadewood Farms">
              </div>
              <div class="form-group col-6 col-sm-5">
                <label for="shippingCountry">Country</label>
                <select class="form-control custom-select" id="shippingCountry">
                  <option>Choose country</option>
                  <option value="Australia">Australia</option>
                  <option value="Canada">Canada</option>
                  <option value="France">France</option>
                  <option value="Germany">Germany</option>
                  <option value="Switzerland">Switzerland</option>
                  <option value="USA" selected >United States</option>
                </select>
              </div>
              <div class="form-group col-6 col-sm-5">
                <label for="shippingCity">City</label>
                <input type="text" class="form-control" id="shippingCity" value="Piscataway, New Jersey">
              </div>
              <div class="form-group col-3 col-sm-2">
                <label for="shippingZip">ZIP Code</label>
                <input type="number" class="form-control" id="shippingZip" value="08854">
              </div>
            </div>
            <hr>
            <div class="form-group text-center mt-3 shipping-group">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                <label class="custom-control-label text-left" for="customRadioInline1">
                  Standard <span class="counter">(FREE)</span>
                  <small class="counter d-block">10-15 Days</small>
                </label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input" checked>
                <label class="custom-control-label text-left" for="customRadioInline2">
                  Express <span class="counter">($10)</span>
                  <small class="counter d-block">1-3 Days</small>
                </label>
              </div>
            </div>
            <hr>
          </form>
          <div class="text-center">
            <small class="counter">TOTAL</small>
            <h3 class="roboto-condensed bold">$130.00</h3>
            <a href="payment.html" class="btn btn-primary rounded-pill btn-lg">Payment <i data-feather="arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <!-- /Main Content -->
@endsection