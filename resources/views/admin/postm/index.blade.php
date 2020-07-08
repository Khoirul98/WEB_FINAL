@extends('template_backend.home')
@section('judul','Postm')
@section('content')

@if(Session::has('success'))
    <div class="alert alert-info" role="alert">{{ Session ('success') }}</div>
@endif
    <a href="{{ route('postm.create') }}" class="btn btn-info ">Tambah Post</a>
    <br></br>
    <table class="table table-striped table-hover table-sm table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Post</th>
                <th>Kategori</th>
                <th>Thumbnail</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($postm as $result => $hasil)
            <tr>
                <td>{{ $result + $postm->firstitem() }}</td>
                <td>{{ $hasil->judul }}</td>
                <td><h6><span class="badge badge-primary">{{ $hasil->category->name }}</span></h6></td>

                <td><img src="{{ asset($hasil->gambar) }}" class="img-fluid" style="width:100px"></td>
                <td>                   
                    <form action="{{ route('post.destroy', $hasil->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="{{ route('postm.edit', $hasil->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $postm->links() }}

@endsection