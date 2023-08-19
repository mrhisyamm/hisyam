@extends('layouts.user')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('barang') }}" class="btn btn-dark"><i class="fa fa-arrow-left"> Kembali</i></a>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4><i class="fa fa-shopping-cart"> Keranjang Pesanan</i></h4>
                    @if(!empty($pesanan))
                    <p align="right">Tanggal Pesanan : {{ $pesanan->tanggal }}</p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Nama Barang</th>
                        {{-- <th>Size</th> --}}
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Ongkir</th>
                        <th>Total Harga</th>
                        <th colspan="6">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach($pesanan_details as $pesanan_details)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td><img src="{{asset('data/barang')}}/{{$pesanan_details->barangs->gambar}}" style="width: 100px" alt=""></td>
                        <td>{{ $pesanan_details->barangs ['nama'] }}</td>
                        {{-- <td>{{ $pesanan_details->size }}</td> --}}
                        <td>{{ $pesanan_details->jumlah }}</td>
                        <td align="left">Rp. {{ number_format ($pesanan_details->barangs ['harga']) }}</td>
                        <td align="left">Rp. {{ number_format ($pesanan_details->layanan) }}</td>
                        <td align="left">Rp. {{ number_format ($pesanan_details->jumlah_harga+$pesanan_details->layanan) }}</td>
                       

                        
                        <td> <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#Modaledit">Pilih Layanan</button></td>
                      
                        
                        <td>
                            <form action="{{ url('check_out') }}/{{ $pesanan_details->id }}" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Pesanan Anda ?')"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="7" align="right"><strong>Subtotal :</strong></td>
                        <td><strong>Rp. {{ number_format ($pesanan_details->jumlah_harga+$pesanan_details->layanan) }}</strong></td>
                        <td>
                            <a href="{{ url('konfirmasi_check_out') }}" class="site-btn" onclick="return confirm('Anda yakin akan Check Out ?');">
                                <i class="fa fa-shopping-cart"></i> Check-Out
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
            @endif
            @include('sweetalert::alert')
            @include('pesanan_detail.layanan')
        </div>
    </div>
</div>
</div>


<div class="container">
    <div class="card">
        <form class="form-horizontal" role="form" action="{{ url('/check_out') }}" method="get">
            {{ csrf_field() }}
        <div class="card-body">
            <div class="row">
            <div class="col-md-2">
            <p>Lokasi Toko</p>
            <select name="origin" class="form-control">
                    <option value="387">Samarinda</option>
                </select>
            </div>
            
            <div class="col-md-2">
            <p>Kota Anda</p>
            <select name="destination" class="form-control">
                    <option value="">--Kota--</option>
                    @foreach ($cities as $city)
                    <option value="{{$city->id}}">{{$city->city_name}}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="col-md-2">
            <p>Kurir</p>
            <select name="courier" class="form-control" readonly>
                    <option value="jne">JNE</option>                   
                </select>
            </div>
            
            <div class="col-md-4">
            <p>Berat (g)</p>
                  <input type="text" name="weight" class="form-control col-sm-3" value="1000" readonly>
            </div>
            
            <div class="col-md-2">
                <button type="submit" class="btn btn-danger">Check Ongkir</button>
            </div>
            </div> 
    </div>
</form>

@if($array_result)
<div class="container">
<div class="row">
    <div class="col-md-12">
            <div class="card">
                <div class="card-body">
              <h5 class="pull-left">Lokasi Toko : <b>{{ $origin }}</h5><br/>
              <h5 class="text">Kota Anda : <b>{{ $destination }}</b></h5>
              
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                  <th>Nama Layanan</th>
                  <th>Tarif</th>
                  <th>ETD (Estimates Days)</th>
                </tr>
                </thead>
                <tbody>
                <?php for($i=0; $i<count($array_result["rajaongkir"]["results"][0]["costs"]); $i++){ ?>
                    <tr>
                      <td><?php echo $array_result["rajaongkir"]["results"][0]["costs"][$i]["service"] ?></td>
                      <td><?php echo $array_result["rajaongkir"]["results"][0]["costs"][$i]["cost"][0]["value"] ?></td>
                      <td><?php echo $array_result["rajaongkir"]["results"][0]["costs"][$i]["cost"][0]["etd"] ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      @else

      @endif
      </div>
</div> 
</div>
</div>
</div>

@endsection