@extends('layouts.app')

@section('content')

  <div class="card">
      <div class="card-header">
          Daftar Produk
      </div>
    <div class="card-body">
      <table class="table table-hover">
        <thead>
          <th>
            Tampilan Produk
          </th>
          <th>
            Nama Produk
          </th>
          <th>
            Harga
          </th>
          <th>
            Stok
          </th>
          <th>
            Ubah
          </th>
          <th>
            Hapus
          </th>
        </thead>
        <tbody>
          @if($products->count() > 0)
            @foreach($products as $product)
              <tr>
                <td>
                    <img class="img-responsive" src="{{$product->featured_image}}" alt="Card image cap" height="100">
                </td>
                <td>
                  {{ $product->product_name }}
                </td>
                <td>
                  {{ $product->price }}
                </td>
                <td>
                  {{ $product->stock }}
                </td>
                <td>
                  <a href="{{route('product.edit', ['id' => $product->id])}}" class="btn btn-info btn-xs">
                    <span class="glyphicon glyphicon-pencil"></span>Ubah
                  </a>
                </td>
                <td>
                  <a href="{{route('product.delete', ['id' => $product->id])}}" class="btn btn-danger btn-xs">
                    <span class="glyphicon glyphicon-trash"></span>Hapus
                  </a>
                </td>
              </tr>
            @endforeach
          @else
              <tr>
                <td colspan="3">Belum ada Produk.</td>
              </tr>
          @endif
        </tbody>
      </table>
    </div>
  </div>
@endsection