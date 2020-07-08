@extends('template_backend.home')
@section('judul','TAMBAH HARGA')
@section('content')

@if(count($errors)>0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">{{$error}}</div>
    @endforeach
@endif

@if(Session::has('success'))
    <div class="alert alert-danger" role="alert">{{ Session ('success') }}</div>
@endif

<form action="{{ route ('category.store') }}" method="POST">
 @csrf
    <div class="form-group form-control">
        <label>Tambah Harga</label>
        <input type="text" class="form-control" name="name">
    </div> 
    <div class="modal-footer">
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
    </div>
</form>
@endsection