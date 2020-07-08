@extends('template_backend.home')
@section('judul','Trashed')
@section('content')

@if(Session::has('success'))
    <div class="alert alert-info" role="alert">{{ Session ('success') }}</div>
@endif
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
                <td>{{ $hasil->category->name }}</td>

                <td>
                    @foreach($hasil->tags as $tag)
                    <ul>
                        <h6><span class="badge badge-info">{{ $tag->name }}</span></h6>
                    </ul>
                    @endforeach
                </td>

                <td><img src="{{ asset($hasil->gambar) }}" class="img-fluid" style="width:100px"></td>
                <td>                   
                    <form action="{{ route('post.kill', $hasil->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="{{ route('post.restore', $hasil->id)}}" class="btn btn-primary btn-sm">Restore</a>
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}

@endsection