@extends('layouts.app')

@section('content')

    <form method="POST" action="{{ route('kategori.update',$kategori->id) }}" method="post" enctype="multipart/form-data">
        @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="content">       
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <div class="row">
        <div class="form-group col-sm-6">
        <label for="nama">nama</label>
         <input type="text" name="nama" value="{{ $kategori->nama }}" class="form-control">
        </div>
        
    <div class="form-group col-sm-12">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('kategori.index') }}" class="btn btn-danger"><i class="fa fa-undo">Cancel</i></a>
    </div>
</div>
</form>

@endsection