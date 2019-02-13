@extends('layouts.app')

@section('content')

  <div class="card">
    <div class="card-header">
        Konfirmasi Penerimaan
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
                    @if($purchase->status == "Dalam Proses Pengiriman")
                        <a onclick="if (! confirm('Apakah Anda Yakin?')) return false;" href="{{ route('purchase.complete', ['id' => $purchase->id]) }}" class="btn btn-sm btn-primary">Tandai  Selesai</a>
                    @elseif($purchase->status == "Transaksi Selesai")
                        <button class="btn btn-sm btn-success" disabled>Selesai</button>
                    @else
                        <button class="btn btn-sm btn-secondary" disabled>Belum terproses</button>
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