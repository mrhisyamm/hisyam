@extends('Layouts.user')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset ('./css/zoomimage.css')}}">
<div class="container">
    <div class="row">
        <div class="col-md-12">
       
            <a href="{{ url('barang') }}" class="btn btn-dark"><i class="fa fa-arrow-left"> Back</i></a>
        </div>
        <div class="col-md-12">
            <div class="card">
                 <div class="card-header">
              
            </div>
            <div class="card-body">
                <div class="row">  
                <div class="col-md-6">
                <div id="img-container">
				<div id="lens"></div>
				<img id=featured src="{{asset('data\barang')}}\{{$barang->gambar}}" style="height: 350px; width: 400px;">
			</div>
                <!-- <img src="{{asset('data\barang')}}\{{$barang->gambar}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy" style="height: 350px; width: 400px;"> -->
        </div>
        <div class="col-lg-6 col-md-6">
            <h2>{{ $barang->nama }}</h2>
            
        <table class="table">
            <tbody>
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td class="text-danger">Rp.{{ number_format($barang->harga )}}</td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td>:</td>
                    <td>{{ number_format($barang->stok )}}</td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td>:</td>
                    <td>{{ $barang->deskripsi }} <i class="fa fa-check-circle" style='color:green;'></i></td>
                </tr>

                <tr>
                <form method="post" action="{{ url('pesan') }}/{{ $barang->id }}">
                         @csrf 
                         
                    {{-- <td>Size</td>
                    <td>:</td>
                    <td>
                    <select class="form-select" name="size" aria-label="Default select example">
                        <option selected>--Pilih Size--</option>
                        <option value="20x20">20x20</option>
                        <option value="25x25">25x25</option>
                        <option value="20x25">20x25</option>
                        <option value="25x40">25x40</option>
                        <option value="40x40">40x40</option>
                        <option value="50x50">50x50</option>


                        </select>
                    </td> --}}
                </tr>

                <tr>
                    <td>Jumlah Pesan</td>
                    <td>:</td>
                    <td>
                        
                        <input type="number" name="jumlah_pesan" class="form-control" require="">
                        <button type="submit" class="btn btn-info mt-2"><i class="fa fa-shopping-cart"> Add To Cart</i></button>
                    </form>
                    </td>
                </tr>
        </tbody>
</table>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript" src="{{ asset ('./js/slider.js') }}" ></script>
	<script type="text/javascript" src="{{ asset ('./js/script.js') }}" ></script>
@endsection