@extends('Layouts.user')
@section('content')
@include('sweetalert::alert')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('barang') }}" class="btn btn-dark"><i class="fa fa-arrow-left"> Kembali</i></a>
        </div>
        
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4><i class="fa fa-history"> Riwayat Pemesanan</i></h4>
                    <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Harga</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>  
                <tbody>
                    <?php $no = 1; ?>
                    @foreach($pesanan as $pesanan)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $pesanan->tanggal }}</td>
                        <td>Rp. {{ number_format ($pesanan->jumlah_harga) }}</td>
                        <td>
                            <a href="{{ url('history') }}/{{ $pesanan->id }}" class="btn btn-info btn-sm"><i class="fa fa-info"> Detail</i>
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody> 
            </table>
            @include('sweetalert::alert')
        </div>
    </div>
</div>
</div>
</div>

@endsection