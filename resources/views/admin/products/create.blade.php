@extends('layouts.app')

@section('content')

  @include('admin.includes.errors')

  <div class="card">
    <div class="card-header">
      Tambahkan Produk Baru
    </div>
    <div class="card-body">
      <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="name">Nama Produk</label>
          <input type="text" name="product_name" class="form-control">
        </div>
        
        <div class="form-group">
          <label for="name">Harga Produk</label>
          <input type="number" name="price" class="form-control" min="1000">
        </div>
          
        <div class="form-group">
          <label for="name">Stok Produk</label>
          <input type="number" name="stock" class="form-control" min="1">
        </div>

        <div class="form-group">
          <label for="name">Gambar Produk</label>
          <input type="file" name="featured_image" class="form-control">
        </div>
        
        <div class="form-group">
          <div class="text-center">
            <button class="btn btn-success" type="submit">Simpan Produk</button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection