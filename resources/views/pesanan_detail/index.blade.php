@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="box">
            <div class="box-body">
                <form id="pesananForm" role="form" method="get" action="{{ url('pesanan') }}">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Dari Tanggal</label>
                            <input type="month" name="tanggal1" class="form-control" id="exampleInputEmail1" placeholder="Dari Tanggal">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Sampai Tanggal</label>
                            <input type="month" name="tanggal2" class="form-control" id="exampleInputPassword1" placeholder="Sampai Tanggal">
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Cek</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<section class="content-header">
    <h1 class="pull-left"> Pesanan</h1>
</section>

<div class="content">
    <div class="clearfix"></div>

    @include('flash::message')

    <div class="clearfix"></div>
    <div class="box box-primary">
        <div class="box-body">
            <div class="table-responsive">
                <table class="table" id="Pesanan-table">
                    <thead> 
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Nama Produk</th>
                            <th>Size</th>
                            <th>Tanggal</th>
                            <th>Jumlah Pesanan</th>
                            <th>Total Harga</th>
                            <th>Status</th>
                            <th colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; $totalPembelian = 0; ?>
                        @foreach($pesanan_details as $item)
                            <?php $totalHarga = $item->jumlah_harga + $item->layanan; ?>
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td><img src="{{ asset('data/barang') }}/{{ $item['barangs']['gambar'] ?? 'Data Kosong' }}" style="width: 100px" alt=""></td>
                                <td>{{ $item->barangs->nama }}</td>
                                <td>{{ $item->size }}</td>
                                <td>{{ $item->tanggal }}</td>
                                <td>{{ $item->jumlah }}</td>
                                <td>Rp. {{ number_format($totalHarga) }}</td>
                                <td>
                                    @if($item->status_pembayaran == 0)
                                        <p class="btn btn-danger btn-sm">Sudah Pesan & Belum Dibayar</p>
                                    @elseif($item->status_pembayaran == 1)
                                        <p class="btn btn-info btn-sm">Diproses</p>
                                    @elseif($item->status_pembayaran == 2)
                                        <p class="btn btn-success btn-sm">Dikirim</p>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('pesanan_detail.details',  [$item->id]) }}" class="btn btn-primary btn-sm"><i class="fa fa-info"> Detail</i></a>
                                </td>
                            </tr>
                            <?php $totalPembelian += $totalHarga; ?>
                        @endforeach
                        <tr>
                            
                            <td colspan="6"><strong>Total Pembelian Keseluruhan</strong></td>
                            <td colspan="3"><strong>Rp. {{ number_format($totalPembelian) }}</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    document.getElementById('pesananForm').addEventListener('submit', function(e) {
        var inputTanggal1 = document.querySelector('input[name="tanggal1"]');
        var inputTanggal2 = document.querySelector('input[name="tanggal2"]');

        // Mengatur tanggal 1
        inputTanggal1.value = inputTanggal1.value.split('-')[0] + '-01';

        // Mengatur tanggal 2 jika belum terisi
        if (inputTanggal2.value === '') {
            inputTanggal2.value = inputTanggal1.value;
        }
    });
</script>
