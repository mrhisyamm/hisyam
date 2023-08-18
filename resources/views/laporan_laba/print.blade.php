<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

</head>

<body>
    <div class="countainer">
        <div class="content">
            <div class="col-md-12">
                    <div class="card-header">
                        <center>
                            <b>
                                
                                    <h4>Laporan Laba-Rugi</h4>
                                
                            </b>
                        </center>
                    </div>
                    <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-sm table-borderless">
                                <tr>
                                    <td colspan="2"><b>Penjualan</b></td>
                                    <td></td>
                                    <td>Rp.
                                        @if(isset($total_penjualan))
                                        {{number_format($total_penjualan)}}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
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
                                </tr>
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
                                    <td colspan="3"><b>Total</b></td>
                                    <td>
                                        <b>
                                            Rp.
                                            @if(isset($total_pembelian))
                                            {{number_format(($total_penjualan-($tot*$jum_pen)-$total_beban)-(0.005*($total_penjualan-($tot*$jum_pen)-$total_beban)))}}
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
    </div>
</body>
<script>
    window.print()
</script>

</html>