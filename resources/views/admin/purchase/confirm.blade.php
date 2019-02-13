@extends('layouts.app')

@section('content')

  <div class="card">
    <div class="card-header">
        Konfirmasi Pembayaran
    </div>
    <div class="card-body">
      <table class="table table-hover">
        <thead>
          <th>
            Bukti
          </th>
          <th>
            Kode Pemesanan
          </th>
          <th>
              Pemesan
          </th>
          <th>
              Email
          </th>
          <th>
            Verifikasi
          </th>
        </thead>
        <tbody>
          @if($payments->count() > 0)
            @foreach($payments as $payment)
              <tr>
                <td>
                    <img class="img-responsive" onclick="swipe(this)" src="/{{$payment->featured_image}}" alt="Card image cap" height="100">
                </td>
                <td>
                  {{ $payment->purchase_order->order_code }}
                </td>
                <td>
                  {{ $payment->purchase_order->customer_name }}
                </td>
                <td>
                  {{ $payment->purchase_order->customer_email }}
                </td>
                <td>
                    @if($payment->purchase_order->status == "Menunggu Verifikasi Pembayaran")
                        <a onclick="if (! confirm('Apakah Anda Yakin?')) return false;" href="{{ route('payment.confirm_pay', ['id' => $payment->id]) }}" class="btn btn-sm btn-primary">Verifikasi</a>
                    @else
                        <button class="btn btn-sm btn-success" disabled>Terverifikasi</button>
                    @endif
                </td>
              </tr>
            @endforeach
          @else
            <div class="text-center">No users.</div>
          @endif
        </tbody>
      </table>
    </div>
  </div>
  <script>
    function swipe(el) {
        var largeImage = el;
        largeImage.style.display = 'block';
        largeImage.style.width=200+"px";
        largeImage.style.height=200+"px";
        var url=largeImage.getAttribute('src');
        window.open(url,'Image','width=largeImage.stylewidth,height=largeImage.style.height,resizable=1');
    }
  </script>
@endsection