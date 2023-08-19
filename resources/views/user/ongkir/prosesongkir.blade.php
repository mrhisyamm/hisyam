@extends('layouts.user')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h3>
    Check Ongkir Result
  </h3>
  <ol class="breadcrumb">
    <li><a href="{{ url('ongkir/checkongkir') }}"> Check Shipping</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
  <div class="col-lg-8 col-md-6">
                  <div class="col-lg-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lokasi Toko : <b>{{ $origin }}</h3><br/>
              <h3 class="box-title">Kota Anda : <b>{{ $destination }}</b></h3>
              
            </div>
            <div class="box-body">
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
                      <td><?php echo $array_result["rajaongkir"]["results"][0]["costs"][$i]["service"] ?> </td>
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
      <!-- /.row -->
</section>
<!-- /.content -->
@endsection
