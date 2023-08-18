@extends('layouts.app')

@section('content')

@section('sub-judul','Edit Galeri')

    <form method="POST" action="{{ route('Galeri.update',$galeri->id) }}" method="post" enctype="multipart/form-data">
        @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="content">       
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <div class="row">
        <div class="form-group col-sm-6">
        <label for="">Gambar</label>
         <input type="file" name="file" value="{{ $galeri->gambar }}" class="form-control">
        </div>

        <div class="form-group col-sm-6">
        <label for="deskripsi">Deskripsi</label>
         <input type="text" name="deskripsi" value="{{ $galeri->deskripsi }}" class="form-control" id="deskripsi" required>
        </div>
        
    <div class="form-group col-sm-12">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('Galeri.index') }}" class="btn btn-danger"><i class="fa fa-undo">Cancel</i></a>
    </div>
</div>
</form>

@endsection