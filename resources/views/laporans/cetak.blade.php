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
    <title>Laporan Penjualan</title>
</head>
<body>


<?php
$tottotal = 0;
?>
    <div class="form-group">
        <p align="center"><b>Laporan Penjualan</b></p>
        <table class="table table-bordered" align="center" border="1" style="width: 50%">
       <tr>
            <th>No</th>
			<th>Tanggal</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Qty</th>
            <th>Subtotal</th>
        </tr>
			
					@foreach ($penjualan as $e=>$dt)
                    <?php 
			        $tottotal += $dt->total; 
			        ?>
					<tr>
						<td>{{$e + 1 }}</td>
    						@foreach ($dt->detail_penjualan as $ds)
                		<td><?php echo date('d F Y', strtotime($dt->tanggal)); ?></td>
		                 <td>{{$ds->barang($ds->barangs_id)->nama}}</td>
                         <td>{{number_format($ds->barang($ds->barangs_id)->harga, 2,",",".")}}</td>
                        <td>{{$ds->qty}}</td>
                        <td class="text-left">{{number_format($ds->subtotal, 2,",",".")}}</td>
            		</tr>
            		@endforeach
					@endforeach
                    <tr>
				        <td colspan="5"><center><h3><b>Total Penjualan</b></h3></center></td>
				        <td><h3><b>Rp. {{ str_replace(',','.',number_format($tottotal,0)) }}</b></h3></td>
							
			        </tr>
					
				</table>
				</div>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>