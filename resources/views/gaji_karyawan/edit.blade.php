@extends('layouts.app')

@section('content')

    <form method="POST" action="{{ route('gaji_karyawan.update',$gaji_karyawan->id) }}" method="post" enctype="multipart/form-data">
        @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="content">       
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <div class="row">
        <div class="form-group col-sm-6">
        <label for="nama_karyawan">nama</label>
         <input type="text" name="nama_karyawan" value="{{ $gaji_karyawan->nama_karyawan }}" class="form-control">
        </div>

        <div class="form-group col-sm-6">
        <label for="gaji">Jumlah Gaji</label>
         <input type="number" name="gaji" value="{{ $gaji_karyawan->gaji }}" class="form-control">
        </div>

        <div class="form-group col-sm-6">
        <label for="tanggal">Tanggal</label>
         <input type="date" name="tanggal" value="{{ $gaji_karyawan->tanggal }}" class="form-control">
        </div>

        <div class="form-group col-sm-6">
        <label for="keterangan">Keterangan</label>
         <input type="text" name="keterangan" value="{{ $gaji_karyawan->keterangan }}" class="form-control">
        </div>
        
    <div class="form-group col-sm-12">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('gaji_karyawan.index') }}" class="btn btn-danger"><i class="fa fa-undo">Cancel</i></a>
    </div>
</div>
</form>

@endsection