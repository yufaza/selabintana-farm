@extends('layouts.app')

@section('content')

  <div class="card">
    <div class="card-header">
        Pengguna Aplikasi
    </div>
    <div class="card-body">
      <table class="table table-hover">
        <thead>
          <th>
            Name
          </th>
          <th>
            Email
          </th>
          <th>
            Peran
          </th>
          <th>
            Hak Akses
          </th>
          <th>
            Hapus
          </th>
        </thead>
        <tbody>
          @if($users->count() > 0)
            @foreach($users as $user)
              <tr>
                <td>
                  {{ $user->first_name." ".$user->last_name }}
                </td>
                <td>
                  {{ $user->email }}
                </td>
                <td>
                  {{ $user->role }}
                </td>
                <td>
                  @if($user->role == 'admin')
                    <a href="{{ route('user.gudang', ['id' => $user->id]) }}" class="btn btn-sm btn-info">Ubah menjadi Gudang</a>
                    <a href="{{ route('user.pemasaran', ['id' => $user->id]) }}" class="btn btn-sm btn-info">Ubah menjadi Pemasaran</a>
                  @elseif($user->role == 'gudang')
                    <a href="{{ route('user.admin', ['id' => $user->id]) }}" class="btn btn-sm btn-success">Ubah menjadi Admin</a>
                    <a href="{{ route('user.pemasaran', ['id' => $user->id]) }}" class="btn btn-sm btn-info">Ubah menjadi Pemasaran</a>
                  @else
                    <a href="{{ route('user.admin', ['id' => $user->id]) }}" class="btn btn-sm btn-success">Ubah menjadi Admin</a>
                    <a href="{{ route('user.gudang', ['id' => $user->id]) }}" class="btn btn-sm btn-info">Ubah menjadi Gudang</a>
                  @endif
                </td>
                @if(Auth::id() !== $user->id)
                  <td>
                    <a href="{{ route('user.delete', ['id' => $user->id]) }}" class="btn btn-sm btn-danger">Delete</a>
                  </td>
                @else
                  <td>
                    <button href="#" class="btn btn-sm btn-danger" disabled>Delete</button>
                  </td>
                @endif
              </tr>
            @endforeach
          @else
            <div class="text-center">No users.</div>
          @endif
        </tbody>
      </table>
    </div>
  </div>
@endsection