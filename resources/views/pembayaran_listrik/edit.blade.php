@extends('layouts.app')

@section('content')

    <form method="POST" action="{{ route('pembayaran_listrik.update',$pembayaran_listrik->id) }}" method="post" enctype="multipart/form-data">
        @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="content">       
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <div class="row">
        <div class="form-group col-sm-6">
        <label for="no_tujuan">No Pemilik</label>
         <input type="text" name="no_tujuan" value="{{ $pembayaran_listrik->no_tujuan }}" class="form-control">
        </div>

        <div class="form-group col-sm-6">
        <label for="keterangan">Keterangan</label>
         <input type="text" name="keterangan" value="{{ $pembayaran_listrik->keterangan }}" class="form-control">
        </div>

        <div class="form-group col-sm-6">
        <label for="tanggal">Tanggal</label>
         <input type="date" name="tanggal" value="{{ $pembayaran_listrik->tanggal }}" class="form-control">
        </div>

        <div class="form-group col-sm-6">
        <label for="token">Token</label>
         <input type="text" name="token" value="{{ $pembayaran_listrik->token }}" class="form-control">
        </div>

        <div class="form-group col-sm-6">
        <label for="jumlah_bayar">Total Pembayaran</label>
         <input type="number" name="jumlah_bayar" value="{{ $pembayaran_listrik->jumlah_bayar }}" class="form-control">
        </div>
        
    <div class="form-group col-sm-12">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('pembayaran_listrik.index') }}" class="btn btn-danger"><i class="fa fa-undo">Cancel</i></a>
    </div>
</div>
</form>

@endsection