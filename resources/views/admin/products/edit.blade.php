@extends('layouts.app')

@section('content')

  @include('admin.includes.errors')

  <div class="card">
    <div class="card-header">
      Ubah stok: {{ $product->product_name }}
    </div>
    <div class="card-body">
      <form action="{{ route('product.update', ['id' => $product->id]) }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label>Stok</label>
          <input type="text" name="stock" value="{{ $product->stock }}" class="form-control">
        </div>
        <div class="form-group">
          <label>Harga</label>
          <input type="text" name="price" value="{{ $product->price }}" class="form-control">
        </div>
        
        <div class="form-group">
          <div class="text-center">
            <button class="btn btn-success" type="submit">Perbaharui Produk</button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection