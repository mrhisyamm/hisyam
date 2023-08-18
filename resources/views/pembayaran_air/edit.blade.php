@extends('layouts.app')

@section('content')

    <form method="POST" action="{{ route('pembayaran_air.update',$pembayaran_air->id) }}" method="post" enctype="multipart/form-data">
        @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="content">       
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <div class="row">
        <div class="form-group col-sm-6">
        <label for="no_ref">No Ref</label>
         <input type="text" name="no_ref" value="{{ $pembayaran_air->no_ref }}" class="form-control">
        </div>

        <div class="form-group col-sm-6">
        <label for="tanggal">Tanggal Pembayaran</label>
         <input type="date" name="tanggal" value="{{ $pembayaran_air->tanggal }}" class="form-control">
        </div>

        <div class="form-group col-sm-6">
        <label for="instansi">Instansi</label>
         <input type="text" name="instansi" value="{{ $pembayaran_air->instansi }}" class="form-control">
        </div>

        <div class="form-group col-sm-6">
        <label for="nama_kepemilikan">Nama Pemilik</label>
         <input type="text" name="nama_kepemilikan" value="{{ $pembayaran_air->nama_kepemilikan }}" class="form-control">
        </div>

        <div class="form-group col-sm-6">
        <label for="keterangan">Keterangan</label>
         <input type="text" name="keterangan" value="{{ $pembayaran_air->keterangan }}" class="form-control">
        </div>

        <div class="form-group col-sm-6">
        <label for="jumlah_bayar">Total Pembayaran</label>
         <input type="number" name="jumlah_bayar" value="{{ $pembayaran_air->jumlah_bayar }}" class="form-control">
        </div>
        
    <div class="form-group col-sm-12">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('pembayaran_air.index') }}" class="btn btn-danger"><i class="fa fa-undo">Cancel</i></a>
    </div>
</div>
</form>

@endsection