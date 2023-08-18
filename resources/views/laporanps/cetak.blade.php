<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta http-equiv="X-AU-Compatible" content="ie=edge">
    <style>
        table.static {
            position: relative;
            border: 1px solid #543535;
        }
    </style>
    <title>Laporan Pembelian</title>
</head>
<body>
<?php
$tottotal = 0;
?>
    <div class="form-group">
        <p align="center"><b>Laporan Pembelian</b></p>
        <table class="table table-bordered" align="center" border="1" style="width: 50%">
        
			<tr>
				<th>No</th>
				<th>Tanggal</th>          
				<th>Suplier</th>
                <th>Nama Barang</th>
				<th>Qty</th>
                <th>Total</th>
            </tr>
		
            @foreach($pembelian as $e=>$dt)
            <?php 
			$tottotal += $dt->total; 
			?>
		    <tr>
			<td>{{$e + 1 }}</td>
			@foreach ($dt->detailPembelians as $row=>$item)
			<td><?php echo date('d F Y', strtotime($dt->tanggal)); ?></td>
			<td>{!! $dt->supliers->name !!}</td>
            <td>{!! $item->barangss->nama !!}</td> 
			<td>{!! $item->qty !!}</td> 
			<td class="text-left">Rp. {!! number_format($dt->total) !!}</td>   
			@endforeach
			@endforeach	

            <tr>
				<td colspan="5"><center><h3><b>Total Pembelian</b></h3></center></td>
				<td><h3><b>Rp. {{ str_replace(',','.',number_format($tottotal,0)) }}</b></h3></td>
							
			</tr>
			
    </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
