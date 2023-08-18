@extends('layouts.app')

@section('content')

@section('sub-judul','Tambah Profile')

<form action="{{route('Profile.store')}}" method="post" enctype="multipart/form-data">

    <form method="POST" action="{{ route('Profile.index') }}">
        @csrf
        <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
        <div class="form-group col-sm-6">
        <label for="visi">Visi</label>
         <input type="text" name="visi" class="form-control" id="visi" required>
        </div>

        <div class="form-group col-sm-6">
        <label for="tentang_kami">Misi</label>
         <input type="text" name="tentang_kami" class="form-control" id="tentang_kami" required>
        </div>

       
        
    <div class="form-group col-sm-12">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save">Simpan</i></button>
        <a href="{{ route('Profile.index') }}" class="btn btn-danger"><i class="fa fa-undo">Cancel</i></a>
        </form>
</form>
    </div>
</div>

@endsection