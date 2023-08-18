@extends('layouts.app')

@section('content')

    <section class="content-header">
        <h1><li class="fa fa-user"></li> Profile Pembeli</h1>
        
        
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
<div class="row" style="padding-left: 30px">                
<div class="row">
    <div class="col-md-3 col-sm-3">
    {!! Form::label('pesanan', 'Nama Pelanggan') !!}
                <p>{{ $pesanan_details->pesanan->customer->name }}</p>

                {!! Form::label('pesanan', 'Alamat Rumah') !!}
                <p>{{ $pesanan_details->pesanan->customer->alamat }}</p>

                {!! Form::label('pesanan', 'No Hp') !!}
                <p>{{ $pesanan_details->pesanan->customer->nohp }}</p>
    </div>
    <tr>
                
            </tr>


@endsection





