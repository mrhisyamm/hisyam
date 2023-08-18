@extends('layouts.app')

@section('content')
<div class="container">
    	<h2>Dashboard</h2>
</div>
 <!-- Main content -->
 <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="clearfix visible-sm-block"></div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Order</span>
                <span class="info-box-number">{{$pesanan_detail}}</span>
                <a href="{{route('pesanan_detail.index')}}" class="small-box-footer btn btn-success btn-sm">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
        <!-- ./col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-blue"><i class="fa fa-bars"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Data Barang</span>
                <span class="info-box-number">{{$barang}}</span>
                <a href="{{route('barangs.index')}}" class="small-box-footer btn btn-primary btn-sm">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
        <!-- ./col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Pengunjung</span>
                <span class="info-box-number">{{$user}}</span>
                <a href="{{route('users.index')}}" class="small-box-footer btn btn-warning btn-sm">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>


<div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-truck"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Suppliers</span>
                <span class="info-box-number">{{$suplier}}</span>
                <a href="{{route('supliers.index')}}" class="small-box-footer btn btn-danger btn-sm">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    </div>
@endsection
