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
              <a class="nav-link disabled" href="javascript:void(0)"><i data-feather="arrow-right"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">PENGIRIMAN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="javascript:void(0)"><i data-feather="arrow-right"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">PEMBAYARAN</a>
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
                    <div class="spinner" data-addclass-on-smdown="spinner-sm">
                    <p>Jumlah: {{$product['quantity']}}</p>
                  </td>
                  <td class="cart-price text-right">
                  <span class="roboto-condensed bold">Rp. {{number_format($product['price'], 0, ",", ".")}}</span>
                  </td>
                  <td class="cart-action nostretch pr-0">
                    <div class="dropdown">
                      <a href="#" class="nav-icon text-secondary dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i data-feather="more-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{route('cart.remove', ['id' => $product['id']])}}" class="dropdown-item text-danger" type="button"><i data-feather="x"></i> Hapus item</a>
                      </div>
                    </div>
                  </td>
                </tr>
                @php
                    $total += $product['quantity'] * $product['price'];
                @endphp
              @endforeach
            </tbody>
          </table>
          <div class="text-center">
            <small class="counter">SUBTOTAL</small>
            <h3 class="roboto-condensed bold">Rp. {{number_format($total, 0, ",", ".")}}</h3>
            <a href="{{route('shipping')}}" class="btn btn-primary rounded-pill btn-lg">Pengiriman <i data-feather="arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <!-- /Main Content -->
@endsection