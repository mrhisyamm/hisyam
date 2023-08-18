@extends('layouts.app')

@section('content')

    <section class="content-header">
        <h1>Pesanan</h1>
        
        
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
            
            <h1 class="pull-right">
        <button type="button" class="btn btn-primary pull-right" style="margin-top: -15px;margin-bottom: 5px" data-toggle="modal" data-target="#Modaledit">Ubah Status</button>
        </h1>
            
<div class="row" style="padding-left: 30px">                
<div class="row">
    <div class="col-md-3 col-sm-3">
    <h4>TB. HIDAYAH</h4>
    
    </div>
    <div class="col-md-3 col-sm-3">
        <h4>Tanggal Pemesanan</h4>
    <p>{{ $pesanan_details->pesanan->tanggal }}</p>
    </div> 
    <div class="col-md-3 col-sm-3">
        <h4>Bukti Pembayaran</h4>
        <td><img src="{{asset('data/bukti_pembayaran')}}/{{$pesanan_details->b_pembayaran}}" style="width: 200px" alt=""></td>
    </div>
</div>
<!-- <div class="row">
    <div class="ol-md-6 col-sm-3">
    <h3>Detail Pesanan</h3>
    <p>@if($pesanan_details->status_pembayaran == 0)
                    <p class="btn btn-danger btn-sm">Sudah Pesan & Belum Dibayar</p>
                    @else
                    <p class="btn btn-success btn-sm">Sudah Dibayar</p>
                    @endif</p>
    <td><img src="{{asset('data/barang')}}/{{$pesanan_details->barangs->gambar}}" style="width: 150px" alt=""></td>
    
</div>    
<div class="card-body">
    <div class="col-lg-3 col-sm-3">
        <div class="card card-plain ">
            <div class="card-header p-8" style="padding-right: 30px">
            <br>
            <br>
            <br>
            <br>
            <br>
                {!! Form::label('pesanan_details', 'Nama Barang') !!}
                <p>{{ $pesanan_details->barangs->nama }}</p>

                {!! Form::label('pesanan_details', 'Jumlah Pesanan') !!}
                <p>{{ $pesanan_details->jumlah }}</p>
                {!! Form::label('pesanan_details', 'Total Harga') !!}
                <p>Rp. {{ number_format ($pesanan_details->jumlah_harga) }}</p>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<div class="row">
    <div class="col-md-3 col-sm-3">
    <h4><li class="fa fa-user"></li> Profile Pembeli</h4>
    {!! Form::label('pesanan', 'Nama Pelanggan') !!}
                <p>{{ $pesanan_details->pesanan->customer->name }}</p>

                {!! Form::label('pesanan', 'Alamat Rumah') !!}
                <p>{{ $pesanan_details->pesanan->customer->alamat }}</p>

                {!! Form::label('pesanan', 'No Hp') !!}
                <p>{{ $pesanan_details->pesanan->customer->nohp }}</p>
    </div>
            </div> -->

            <div class="row">
    <div class="col-md-11 col-sm-12">
    <h3>Detail Pesanan</h3>
    <p>@if($pesanan_details->status_pembayaran == 0)
                    <p class="btn btn-danger btn-sm">Sudah Pesan & Belum Dibayar</p>
                    @elseif($pesanan_details->status_pembayaran == 1)
                    <p class="btn btn-info btn-sm">Diproses</p>
                    @else($pesanan_details->status_pembayaran == 2)
                    <p class="btn btn-success btn-sm">Dikirim</p>
                    @endif
<p>
<p>Kode Pesanan : {{ $pesanan_details->pesanan->kode }}</p>
    <table class="table table-bordered">
        <tr>
            <th class="col-md-2">Gambar</th>
            <th class="col-md-2">Nama Pembeli</th>
            <th class="col-md-4">Alamat</th>
            <th class="col-md-2">No HP</th>
            <th class="col-md-5">Nama Barang</th>
            <th class="col-md-5">Size</th>
            <th class="col-md-1">Jumlah Pesanan</th>
            <th class="col-md-5">Sub Total</th>
        </tr>
        <tr>
                <td><img src="{{asset('data/barang')}}/{{$pesanan_details->barangs->gambar}}" style="width: 90px" alt=""></td>
                <td>{{ $pesanan_details->pesanan->customer->name }}</td>
                <td>{{ $pesanan_details->pesanan->customer->alamat }}</td>
                <td>{{ $pesanan_details->pesanan->customer->nohp }}</td>
                <td>{{ $pesanan_details->barangs->nama }}</td>
                <td>{{ $pesanan_details->size }}</td>
                <td>{{ $pesanan_details->jumlah }}</td>
                <td>Rp. {{ number_format ($pesanan_details->jumlah_harga+$pesanan_details->layanan) }}</td>
                
            </tr>
            <tr>
            <td colspan="7" class="text-center"><strong><h4><b>Total</h4></strong></td>
            <td class="text-center"><h4>Rp. {{number_format($pesanan_details->jumlah_harga+$pesanan_details->layanan, 2,",",".")}}</h4></td>
        </tr>
        </div>
    </div>
    @include('pesanan_detail.edit')
@endsection





