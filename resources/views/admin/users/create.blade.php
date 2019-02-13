@extends('layouts.app')

@section('content')

  @include('admin.includes.errors')

  <div class="card">
    <div class="card-header">
      Tambahkan Pengguna Baru
    </div>
    <div class="card-body">
      <form action="{{ route('user.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label>Nama Pengguna</label>
          <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
          <label>password</label>
          <input type="text" name="password" class="form-control">
        </div>
        <div class="form-group">
          <label>Nama Depan</label>
          <input type="text" name="first_name" class="form-control">
        </div>
        <div class="form-group">
          <label>Nama Belakang</label>
          <input type="text" name="last_name" class="form-control">
        </div>
        <div class="form-group">
          <label for="role">Peran: </label>
          <div class="form-check-inline">
            <label class="form-check-label">
                <input type="radio" name="role" class="form-check-input" value="admin" checked> Admin
                <input type="radio" name="role" class="form-check-input" value="gudang"> Gudang
                <input type="radio" name="role" class="form-check-input" value="pemasaran"> Pemasaran
            </label>
          </div>
        </div>
        
        
        <div class="form-group">
          <div class="text-center">
            <button class="btn btn-success" type="submit">Add user</button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection