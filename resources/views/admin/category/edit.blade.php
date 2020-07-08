@extends('template_backend.home')
@section('judul','EDIT HARGA')
@section('content')

@if(count($errors)>0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">{{$error}}</div>
    @endforeach
@endif

@if(Session::has('success'))
    <div class="alert alert-danger" role="alert">{{ Session ('success') }}</div>
@endif

<form action="{{ route ('category.update', $category->id) }}" method="POST">
 @csrf
 @method('PATCH')
    <div class="modal-footer">
        <input type="text" class="form-control" name="name" value="{{ $category->name }}">
        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
    </div>
</form>
@endsection