@extends('template_backend.home')
@section('judul','Post')
@section('content')

@if(Session::has('success'))
    <div class="alert alert-info" role="alert">{{ Session ('success') }}</div>
@endif
    <a href="{{ route('post.create') }}" class="btn btn-info ">Tambah Post</a>
    <br></br>
    <table class="table table-striped table-hover table-sm table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Post</th>
                <th>Kategori</th>
                <th>Tag</th>
                <th>Thumbnail</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($posts as $result => $hasil)
            <tr>
                <td>{{ $result + $posts->firstitem() }}</td>
                <td>{{ $hasil->judul }}</td>
                <td><h6><span class="badge badge-primary">{{ $hasil->category->name }}</span></h6></td>

                <td>
                    @foreach($hasil->tags as $tag)
                    <ul>
                        <h6><span class="badge badge-info">{{ $tag->name }}</span></h6>
                    </ul>
                    @endforeach
                </td>

                <td><img src="{{ asset($hasil->gambar) }}" class="img-fluid" style="width:100px"></td>
                <td>                   
                    <form action="{{ route('post.destroy', $hasil->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="{{ route('post.edit', $hasil->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}

@endsection