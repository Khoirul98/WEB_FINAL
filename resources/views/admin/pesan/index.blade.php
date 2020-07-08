@extends('template_backend.home')
@section('judul','List Pesanan')
@section('content')
<meta http-equiv="refresh" content="20">
@if(count($errors)>0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">{{$error}}</div>
    @endforeach
@endif

@if(Session::has('success'))
    <div class="alert alert-info" role="alert">{{ Session ('success') }}</div>
@endif
<table class="table table-striped table-hover table-sm table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Meja</th>
                <th>Menu Bebek</th>
                <th>jumlah</th>
                <th>Minuman</th>
                <th>jumlah</th>
                <th>Hapus Pesanan Terkirim</th>

            </tr>
        </thead>
        <tbody>
        @foreach ($pesan as $result => $hasil)
            <tr>
                <td>{{ $result + $pesan->firstitem() }}</td>
                <td>{{ $hasil->Nama }}</td>
                <td>{{ $hasil->Kode }}</td>

                <td>
                    <ul><span class="badge badge-info">{{ $hasil->Bebek1 }}</span></ul>
                    <ul><span class="badge badge-primary">{{ $hasil->Bebek2 }}</span></ul>
                    <ul><span class="badge badge-warning">{{ $hasil->Bebek3 }}</span></ul>
                </td>
                
                <td>
                    <ul><span class="badge badge-info">{{ $hasil->Jumlah1 }}</span></ul>
                    <ul><span class="badge badge-primary">{{ $hasil->Jumlah2 }}</span></ul>
                    <ul><span class="badge badge-warning">{{ $hasil->Jumlah3 }}</span></ul>
                </td>

                <td>
                    <ul><span class="badge badge-info">{{ $hasil->Minum1 }}</span></ul>
                    <ul><span class="badge badge-primary">{{ $hasil->Minum2 }}</span></ul>
                    <ul><span class="badge badge-warning">{{ $hasil->Minum3 }}</span></ul>
                </td>

                <td>
                    <ul><span class="badge badge-info">{{ $hasil->Banyak1 }}</span></ul>
                    <ul><span class="badge badge-primary">{{ $hasil->Banyak2 }}</span></ul>
                    <ul><span class="badge badge-warning">{{ $hasil->Banyak3 }}</span></ul>
                <td>                   
                    <form action="{{ route('pesan.destroy', $hasil->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm btn-block" onclick="return confirm('Yakin Pesanan Sudah Terkirim?')">OK</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $pesan->links() }}
@endsection