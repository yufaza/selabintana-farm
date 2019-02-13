@extends('frontend.layout')
@section('content')
    <!-- Main Content -->
    <div class="container my-3">
      <div class="card">
        <div class="card-header bg-white border-bottom flex-center p-0">
          <ul class="nav nav-pills card-header-pills main-nav-pills" role="tablist">
            <li class="nav-item">
                <span class="nav-link">Kode Pesanan: {{$data->order_code}}</span>
            </li>
            <li class="nav-item">
                <a href="#" onclick="window.print()" class="nav-link btn btn-outline">Cetak Pesanan</a>
                </li>
            </ul>
        </div>
        
        <div class="card-body px-1 px-md-5 pt-5">
                <table class="table table-borderless table-cart" data-addclass-on-smdown="table-sm">
                    <tbody>
                        <tr>
                            <td>Nama Pemesan: </td>
                            <td>{{$data->customer_name}}</td>
                        </tr>
                        <tr>
                            <td>Email: </td>
                            <td>{{$data->customer_email}}</td>
                        </tr>
                        <tr>
                            <td>No Telepon: </td>
                            <td>{{$data->customer_phone}}</td>
                        </tr>
                        <tr>
                            <td>Alamat Pengiriman: </td>
                            <td>{{$data->customer_address}}</td>
                        </tr>
                        <tr>
                            <td>Total Belanja: </td>
                            <td>Rp. {{number_format($data->payment, 0, ",", ".")}}</td>
                        </tr>
                        <tr>
                            <td>Status Pemesanan: </td>
                            <td>{{$data->status}}</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-borderless table-cart" data-addclass-on-smdown="table-sm">
                  <tbody>
                    @php
                        $total = 0;
                    @endphp
                    @foreach ($data->products as $product)
                      <tr>
                        <td class="cart-img nostretch">
                        <span><img src="{{$product->featured_image}}" alt="{{$product->product_name}}"></span>
                        </td>
                        <td class="cart-title">
                          <span class="h6 bold d-inline-block" title="{{$product->product_name}}">{{$product->product_name}}</span>
                        </td>
                        <td class="cart-qty nostretch text-center">
                          <p>Jumlah: {{$product->pivot->quantity}}</p>
                        </td>
                        <td class="cart-price text-right">
                        <span class="roboto-condensed bold">Rp. {{number_format($product->price, 0, ",", ".")}}</span>
                        </td>
                      </tr>
                      @php
                          $total += $product->pivot->quantity * $product->price;
                      @endphp
                    @endforeach
                        <tr>
                            <td colspan="2">
                            </td>
                            <td class="cart-qty nostretch text-center">
                              <p><strong>TOTAL</strong></p>
                            </td>
                            <td class="cart-price text-right">
                            <span class="roboto-condensed bold">Rp. {{number_format($total, 0, ",", ".")}}</span>
                            </td>
                        </tr>
                  </tbody>
                </table>
                
                @if($data->status == 'Menunggu Pembayaran')
                <div class="text-center">
                    <h4 class="counter">SILAKAN MELAKUKAN PEMBAYARAN TRANSFER KE REKENING</h4>
                    <h3 class="roboto-condensed bold">BCA</h3>
                    <h5 class="counter">CV. SELABINTANA FARM</h5>
                    <h5 class="roboto-condensed bold"> 6775202XXX</h5>
                    <p>
                        Apabila telah melakukan pembayaran, segera konfirmasikan pada tautan dibawah:
                    </p>
                    <a href="{{route('cpayment')}}" class="btn btn-primary rounded-pill btn-lg">Konfirmasi Pembayaran</a>
                </div>
                @else
                <div class="text-center">
                    <h3 class="roboto-condensed bold">Pesanan Sedang Kami Proses</h3>
                </div>
                @endif
                
              </div>
      </div>
    </div>
    @if($data->status == 'Menunggu Pembayaran')
    <script type="text/javascript">
        <!--
        window.print();
        //-->
    </script>
    @endif
    <!-- /Main Content -->
@endsection