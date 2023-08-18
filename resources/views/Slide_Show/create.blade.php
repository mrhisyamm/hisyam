@extends('layouts.app')

@section('content')

@section('sub-judul','Tambah Slide Show')

<form action="{{route('Slide_Show.store')}}" method="post" enctype="multipart/form-data">

    <form method="POST" action="{{ route('Slide_Show.index') }}">
        @csrf
        <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
        <div class="form-group col-sm-6">
        <label for="">Gambar</label>
         <input type="file" name="file" class="form-control">
        </div>
        
        <div class="form-group col-sm-6">
        <label for="label">Label</label>
         <input type="text" name="label" class="form-control" id="label" required>
        </div>

    <div class="form-group col-sm-12">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save">Simpan</i></button>
        <a href="{{ route('Slide_Show.index') }}" class="btn btn-danger"><i class="fa fa-undo">Cancel</i></a>
        </form>
</form>
    </div>
</div>

@endsection