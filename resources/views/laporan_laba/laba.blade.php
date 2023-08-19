@extends('layouts.app')

@section('content')
<section class="content-header">
        <h1 class="pull-left">Pencarian</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
    <div class="clearfix"></div>
<div class="row">
    <div class="col-md-12">
		<div class="box">
			<div class="box-body">
            <table class="table">
                    <tr>    
                        <th>Dari</th>
                        <th>Sampai</th>
                        <th>Action</th>
                    </tr>
                    <form action="{{route('Laporan_laba.laba_cari')}}" method="post">
                        @csrf
                        <tr>
                            <td>
                                <input type="date" name="dari" class="form-control">
                            </td>
                            <td>
                                <input type="date" name="sampai" class="form-control">
                            </td>
                            <td>
                            <input type="submit" value="Cari" class="btn btn-primary">
                            </td>
                        </tr>
                    </form>
                </table>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3>Laporan Laba-Rugi</h3>
                <h1 class="pull-left">
                @if(isset($total_penjualan))
                    <a href="/Laporan_laba/print?dari={{$dari}}&sampai={{$sampai}}" class="btn btn-primary" target="_blank"><i class="fa fa-print"> Cetak</i></a>
                    @endif
                </h1>
			</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm table-borderless">
                        <tr>
                            <td colspan="2"><b>Penjualan</b></td>
                            <td></td>
                            <td>Rp.
                                @if(isset($x))
                                {{number_format($total_penjualan)}}
                                @endif
                            </td>
                        </tr>
                        {{-- <tr>
                            <td style="width: 20px;"></td>
                            <td>Hpp (Harga Pokok Penjualan)</td>
                            <td></td>
                            <td>
                                Rp.
                                @if(isset($jum_pen))
                                {{number_format($tot*$jum_pen)}}
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td></td>
                            <td></td>
                            <td>
                                Rp.
                                @if(isset($total_pembelian))
                                {{number_format($total_penjualan-($tot*$jum_pen))}}
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td><b>Biaya</b></td>
                        </tr>
                        @if(isset($total_beban))
                        @foreach($beban as $beban )
                        <tr>
                            <td></td>
                            <td>{{$beban->keterangan}}</td>
                            <td>Rp. {{number_format($beban->harga)}}</td>
                            <td></td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="3">Total Biaya</td>
                            <td>Rp. {{number_format($total_beban)}}</td>
                        </tr>
                        @endif
                        <tr>
                            <td colspan="3"><b>Total Laba/Rugi</b></td>
                            <td>
                                <b>
                                    Rp.
                                    @if(isset($total_pembelian))
                                    {{number_format($total_penjualan-($tot*$jum_pen)-$total_beban)}}
                                    @endif
                                </b>
                            </td>
                        </tr> --}}
                        <tr>
                            <td colspan="3">Pajak UMKM(0,5%)</td>
                            <td>
                                Rp.
                                @if(isset($total_pembelian))
                                {{number_format(0.005*($total_penjualan-($tot*$jum_pen)-$total_beban))}}
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"><b>Total Pemasukan</b></td>
                            <td>
                                <b>
                                    Rp.
                                    @if(isset($totalPembelian2))
                                    {{number_format(($totalPembelian2))}}
                                    @endif
                                </b>
                            </td>
                        </tr>  
                        <tr>
                            <td colspan="3"><b>Total Pengeluaran</b></td>
                            <td>
                                <b>
                                    Rp.
                                    @if(isset($total_pembelian))
                                    {{number_format(( $total_penjualan-($tot*$jum_pen)-$total_beban)-(0.005*($total_penjualan-($tot*$jum_pen)-$total_beban)))}}
                                    @endif
                                </b>
                            </td>
                        </tr>
                       
                        <tr>
                            <td colspan="3"><b>Total </b></td>
                            <td>
                                <b>
                                    Rp.
                                    @if(isset($totalPembelian2))
                                    {{number_format( (($total_penjualan-($tot*$jum_pen)-$total_beban)-(0.005*($total_penjualan-($tot*$jum_pen)-$total_beban))) - $totalPembelian2) }}
                                    @endif
                                </b>
                            </td>
                        </tr>   
                        
                        
                      
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection