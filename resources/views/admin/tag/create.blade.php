<a href="{{ route('tag.index') }}" class="btn btn-info ">Beranda</a>
<br></br>
@if(count($errors)>0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">{{$error}}</div>
    @endforeach
@endif

@if(Session::has('success'))
    <div class="alert alert-danger" role="alert">{{ Session ('success') }}</div>
@endif

<form action="{{ route ('tag.store') }}" method="POST">
 @csrf
    <div class="form-group form-control">
        <label>Tambah Tag</label>
        <input type="text" class="form-control" name="name">
    </div> 
    <div class="modal-footer">
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
    </div>
</form>