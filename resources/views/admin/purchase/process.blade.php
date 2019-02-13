@extends('layouts.app')

@section('content')

  <div class="card">
    <div class="card-header">
        Konfirmasi Pengiriman
    </div>
    <div class="card-body">
      <table class="table table-hover">
        <thead>
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
            Status
          </th>
        </thead>
        <tbody>
          @if($purchases->count() > 0)
            @foreach($purchases as $purchase)
              <tr>
                <td>
                  {{ $purchase->order_code }}
                </td>
                <td>
                  {{ $purchase->customer_name }}
                </td>
                <td>
                  {{ $purchase->customer_email }}
                </td>
                <td>
                    @if($purchase->status == "Sedang di Proses")
                        <a onclick="if (! confirm('Apakah Anda Yakin?')) return false;" href="{{ route('purchase.processed', ['id' => $purchase->id]) }}" class="btn btn-sm btn-primary">Kirim</a>
                    @elseif($purchase->status == "Dalam Proses Pengiriman")
                        <button class="btn btn-sm btn-info" disabled>Sedang Dikirim</button>
                    @elseif($purchase->status == "Menunggu Pembayaran")
                        <button class="btn btn-sm btn-secondary" disabled>Menunggu Pembayaran</button>
                    @elseif($purchase->status == "Menunggu Verifikasi Pembayaran")
                        <button class="btn btn-sm btn-warning" disabled>Belum Verifikasi</button>
                    @else
                        <button class="btn btn-sm btn-success" disabled>Selesai</button>
                    @endif
                </td>
              </tr>
            @endforeach
          @else
            <div class="text-center">Tidak ada data.</div>
          @endif
        </tbody>
      </table>
    </div>
  </div>
@endsection