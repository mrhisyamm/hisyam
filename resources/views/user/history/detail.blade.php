@extends('layouts.user')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('history') }}" class="btn btn-dark"><i class="fa fa-arrow-left"> Kembali</i></a>

        </div>
        </div>
			
        <div class="col-md-12">
            <div class="card">
            <div class="card-body">
                <h3>Sukses Check Out</h3>
                <h5><p>Pesanan anda sudah suskes di check out selanjutnya untuk pembayaran.<br> silahkan transfer di rekening</p></h5>
                    <img class="mr-3" src="{{ url('assets/logo-bri.png') }}" alt="Bank BRI" width="50">
                    <h5 class="mt-0">Bank BRI</h5>
                    <strong>Nama : Muh. Hisyamuddin</strong><br>
                    @foreach($pesanan_details as $item)
                    <strong> No. Rekening : 3221-234599-758</strong> dengan nominal : 
                    <strong>Rp. {{ number_format ($item->pesanan->jumlah_harga+$item->layanan) }}</strong>
                    @endforeach
                    <h1 class="pull-right">
                    <button type="button" class="btn btn-primary pull-right" style="margin-top: -15px;margin-bottom: 5px" data-toggle="modal" data-target="#Modaledit">Upload Bukti Pembayaran</button>
                    </h1>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <h4><i class="fa fa-shopping-cart"> Detail Pesanan</i></h4>
                    @if(!empty($pesanan))
                    <p align="right">Tanggal Pesanan : {{ $pesanan->tanggal }}</p>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Nama Barang</th>
                        <th>Size</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Ongkir</th>
                        <th>Total Harga</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach($pesanan_details as $pesanan_details)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td><img src="{{asset('data/barang')}}/{{$pesanan_details->barangs->gambar}}" style="width: 100px" alt=""></td>
                        <td>{{ $pesanan_details->barangs ['nama'] }}</td>
                        <td>{{ $pesanan_details->size }}</td>
                        <td>{{ $pesanan_details->jumlah }}</td>
                        <td align="left">Rp. {{ number_format ($pesanan_details->barangs ['harga']) }}</td>
                        <td align="left">Rp. {{ number_format ($pesanan_details->layanan) }}</td>
                        <td align="left">Rp. {{ number_format ($pesanan_details->jumlah_harga+$pesanan_details->layanan) }}</td>
                       
                    </tr>
                    @endforeach

                    <tr>
                        <td colspan="7" align="right"><strong>Ongkir :</strong></td>
                        <td><strong>Rp.{{ number_format($pesanan_details->layanan)}}</strong></td>
                        
                    </tr>

                    <tr>
                        <td colspan="7" align="right"><strong>Subtotal :</strong></td>
                        <td><strong>Rp. {{ number_format ($item->pesanan->jumlah_harga+$item->layanan) }}</strong></td>
                        
                    </tr>

                    <!-- <tr>
                        <td colspan="7" align="right"><strong>Kode Pesanan :</strong></td>
                        <td><strong>{{ $pesanan->kode }}</strong></td>
                        
                    </tr> -->
                    
                    <tr>
                        <td colspan="7" align="right"><strong>Total yang harus ditransfer :</strong></td>
                        <td><strong>Rp. {{ number_format ($pesanan->jumlah_harga+$pesanan_details->layanan) }}</strong></td>
                        
                    </tr>
                  
                    <tr>
                        <td colspan="7" align="right"><strong>Status :</strong></td>
                        <td>
                            @if($pesanan_details->status_pembayaran == 0)
                            <p class="btn btn-danger btn-sm">Sudah Pesan & Belum Dibayar</p>
                            @elseif($pesanan_details->status_pembayaran == 1)
                            <p class="btn btn-info btn-sm">Diproses</p>
                            @else($pesanan_details->status_pembayaran == 2)
                            <p class="btn btn-success btn-sm">Dikirim</p>
                            @endif
                            
                        </td>
                        
                    </tr>
                    <div class="box-body">
                        <a href="{{ route('user.history.cetak1', ['id' => $pesanan->id]) }}" target="_blank" class='btn btn-primary'> Cetak <i class="fa fa-print"></i></a>
				<table class="table table-stripped">
					<thead>
                   
                </tbody>
            </table>
            @endif
            
            @include('pesanan_detail.ubah')
           
        </div>
    </div>
    </div>
</div>
</div>
</div>
</div>
</div>

@endsection

