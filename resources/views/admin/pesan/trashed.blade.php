@extends('template_backend.home')
@section('judul','PESANAN TERKIRIM')
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
                            <th>Bebek_1</th>
                            <th>jumlah</th>
                            <th>Bebek_2</th>
                            <th>jumlah</th>
                            <th>Minum_1</th>
                            <th>jumlah</th>
                            <th>Minum_2</th>
                            <th>jumlah</th>
                            <th>Hapus Pesanan Dibayar</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($pesan as $result => $hasil)
                        <tr>
                            <td>{{ $result + $pesan->firstitem() }}</td>
                            <td>{{ $hasil->Nama }}</td>
                            <td>{{ $hasil->Kode }}</td>
                            <td>{{ $hasil->Bebek1 }}</td>
                            <td>{{ $hasil->Jumlah1 }}</td>
                            <td>{{ $hasil->Bebek2 }}</td>
                            <td>{{ $hasil->Jumlah2 }}</td>
                            <td>{{ $hasil->Minum1 }}</td>
                            <td>{{ $hasil->Banyak1 }}</td>
                            <td>{{ $hasil->Minum2 }}</td>
                            <td>{{ $hasil->Banyak2 }}</td>
                            <td>                   
                                <form action="{{ route('pesan.kill', $hasil->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <a href="{{ route('pesan.restore', $hasil->id)}}" class="btn btn-primary btn-sm">Restore</a>
                                <button type="submit" class="btn btn-info btn-sm" onclick="return confirm('Yakin Pesanan Sudah Terbayar?')">OK</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            
                {{ $pesan->links() }}
@endsection