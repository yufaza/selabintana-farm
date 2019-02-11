<header>
    <div class="container d-flex">
      <!-- Logo -->
      <a class="nav-link mr-auto" href="/"><strong>Selabintana Farm</strong></a>



      <ul class="nav ml-auto ml-sm-0">
        <!-- Search form toggler -->
        <li class="nav-item"><a class="nav-link" href="#">Cek Status Pemesanan</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Konfirmasi Pembayaran</a></li>

        <!-- Cart dropdown -->
        <li class="nav-item dropdown dropdown-hover dropdown-cart">
          <a class="nav-link nav-icon mr-nis dropdown-toggle forwardable ml-2" data-toggle="dropdown" href="#keranjang" role="button" aria-haspopup="true" aria-expanded="false">
            <i data-feather="shopping-cart"></i>
          <span class="badge badge-primary">{{session()->has('product_list') ? count(session('product_list')) : 0}}</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            @if(session()->has('product_list') && count(session('product_list'))>0)
              @php
                $total = 0;   
              @endphp
              @foreach(session('product_list') as $pl)
              <div class="media">
                <span><img src="{{$pl['featured_image']}}" width="50" height="50" alt="Hanes Hooded Sweatshirt"></span>
                <div class="media-body">
                  <span title="{{$pl['product_name']}}">{{$pl['product_name']}}</span>
                  <span class="qty">{{$pl['quantity']}}</span> x <span class="price">Rp. {{number_format($pl['price'], 0, ",", ".")}}</span>
                  <button type="button" class="close" aria-label="Close"><i data-feather="x-circle"></i></button>
                </div>
              </div>
              @php
                $total += (int)$pl['quantity'] * (int)$pl['price'];
              @endphp
              @endforeach
              <div class="d-flex justify-content-between pb-3 pt-2">
                <span>Total</span>
                <strong>Rp. {{number_format($total, 0, ",", ".")}}</strong>
              </div>
              <div class="d-flex justify-content-between pb-2">
                <div class="w-100 mr-1">
                <a href="{{route('cart')}}" class="btn btn-block rounded-pill btn-secondary">Lihat Keranjang</a>
                </div>
                <div class="w-100 ml-1">
                  <a href="{{route('shipping')}}" class="btn btn-block rounded-pill btn-primary">Bayar</a>
                </div>
              </div>
            @else
              <p>Tidak ada apapun dalam keranjang</p>
            @endif
          </div>
        </li>
        <!-- /Cart dropdown -->
      </ul>

    </div><!-- /.container -->
  </header>
  <!-- /Header -->

