@extends('template_backend.home')
@section('judul','EDIT POSTM')
@section('content')

@if(count($errors)>0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">{{$error}}</div>
    @endforeach
@endif

@if(Session::has('success'))
    <div class="alert alert-danger" role="alert">{{ Session ('success') }}</div>
@endif
@foreach($postm as $post)
    {{ $post->id }}
@endforeach
<form action="{{ route ('postm.update', $post->id) }}" method="POST" enctype="multipart/form-data">
 @csrf
 @method('PATCH')
 
    <div class="form-group form-control">
        <label>Judul</label>
        <input type="text" class="form-control" name="judul">
    </div> 
    <br></br>
    <div class="form-group form-control">
        <label>Kategori</label>
        <select class="form-control" name="category_id">
        <option value="" Holder>Pilih Kategori</option>
            @foreach($category as $result)
            <option value="{{ $result->id }}">{{ $result->name }}</option>
            @endforeach
        </select>
    </div> 
    <br></br>
    
    <div class="form-group form-control">
        <label>Konten</label>
        <textarea class="form-control" name="content" ></textarea>
    </div> 
    <br></br>
    <div class="form-group form-control">
        <label>Thumbnail</label>
        <input type="file" class="form-control" name="gambar">
    </div> 
    <br></br>
    <div class="modal-footer">
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
    </div>
</form>

@endsection