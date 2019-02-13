@extends('frontend.layout')
@section('content')
    <!-- Main Content -->
    <div class="container my-3">
      <div class="card">
        <div class="card-header bg-white border-bottom flex-center p-0">
          <ul class="nav nav-pills card-header-pills main-nav-pills" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" href="#">KERANJANG</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"><i data-feather="arrow-right"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">PENGIRIMAN</a>
            </li>
          </ul>
        </div>

        <div class="card-body px-1 px-md-5 pt-5">
          <table class="table table-borderless table-cart" data-addclass-on-smdown="table-sm">
            <tbody>
              @php
                  $total = 0;
              @endphp
              @foreach ($products as $product)
                <tr>
                  <td class="cart-img nostretch">
                  <span><img src="{{$product['featured_image']}}" alt="{{$product['product_name']}}"></span>
                  </td>
                  <td class="cart-title">
                    <span class="h6 bold d-inline-block" title="{{$product['product_name']}}">{{$product['product_name']}}</span>
                  </td>
                  <td class="cart-qty nostretch text-center">
                    <p>Jumlah: {{$product['quantity']}}</p>
                  </td>
                  <td class="cart-price text-right">
                  <span class="roboto-condensed bold">Rp. {{number_format($product['price'], 0, ",", ".")}}</span>
                  </td>
                </tr>
                @php
                    $total += $product['quantity'] * $product['price'];
                    session()->put('total', $total);
                @endphp
              @endforeach
            </tbody>
          </table>
          
          <div class="text-center">
            <small class="counter">SUBTOTAL</small>
            <h3 class="roboto-condensed bold">Rp. {{number_format($total, 0, ",", ".")}}</h3>
            <a href="/" class="btn btn-primary rounded-pill btn-lg"><i data-feather="arrow-left"></i> Kembali</a>
            <a href="/flush-cart" class="btn btn-danger rounded-pill btn-lg">Kosongkan Keranjang</a>
            <a href="{{route('shipping')}}" class="btn btn-primary rounded-pill btn-lg">Pengiriman <i data-feather="arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <!-- /Main Content -->
@endsection