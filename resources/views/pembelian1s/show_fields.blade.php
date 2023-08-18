<div class="row">
    <div class="col-md-3 col-sm-3">
    <h4>Klinik Kecantikan</h4>
    
    </div>
    <div class="col-md-3 col-sm-3">
        <h4>Tanggal</h4>
        <td>{{ $pembelian1->tanggal }}</td>
       
    </div>
    

</div>
<div class="row">
    <div class="col-md-10 col-sm-10">
    <h3>Detail Pembelian</h3>
    <table class="table table-bordered">
        <tr>
            <th class="col-md-1">No</th>
            <th class="col-md-3">Barang</th>
            <th class="col-md-2">Qty</th>
            <th class="col-md-2">Sub Total</th>
        </tr>
       @foreach ($pembelian1->detailPembelians1 as $row=>$item)
            <tr>
                <td>{{$row + 1 }}</td>
                <td>{{$item->barangs($item->barangs_id)->nama}}</td>
                <td>{{$item->qty}}</td>
                <td class="text-left"> {{number_format($item->subtotal, 2,",",".")}}</td>
            </tr>
        @endforeach
        <tr>
            <td colspan="3" class="text-right"><strong><h3>Total</h3></strong></td>
            <td class="text-left"><h3>Rp. {{number_format($pembelian1->total, 2,",",".")}}</h3></td>
        </tr>
    </table>
</div>
</div>
