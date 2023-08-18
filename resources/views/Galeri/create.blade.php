@extends('layouts.app')

@section('content')

@section('sub-judul','Tambah Galeri')

<form action="{{route('Galeri.store')}}" method="post" enctype="multipart/form-data">

    <form method="POST" action="{{ route('Galeri.index') }}">
        @csrf
        <div class="content">       
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <div class="row">
        <div class="form-group col-sm-6">
        <label for="">Gambar</label>
         <input type="file" name="file" class="form-control">
        </div>

        <div class="form-group col-sm-6">
        <label for="deskripsi">Deskripsi</label>
         <input type="text" name="deskripsi" class="form-control" id="deskripsi" required>
        </div>
        
    <div class="form-group col-sm-12">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save">Simpan</i></button>
        <a href="{{ route('Galeri.index') }}" class="btn btn-danger"><i class="fa fa-undo">Cancel</i></a>
        </form>
</form>
    </div>
</div>

@endsection