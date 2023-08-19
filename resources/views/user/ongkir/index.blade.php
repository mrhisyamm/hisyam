@extends('layouts.user')

@section('content')
<div class="container">
<div class="col-md-12">
       
       <a href="{{ url('check_out') }}" class="btn btn-dark"><i class="fa fa-arrow-left"> Back</i></a>
   </div>
    <div class="card">
        <form class="form-horizontal" role="form" action="{{ url('/ongkir') }}" method="get">
            {{ csrf_field() }}
        <div class="card-body">
            <div class="row">
            <div class="form-group col-sm-8">
            <p>Alamat</p>
                <input type="text" class="form-control" name="alamat" id="alamat" required>
            </div>
            </div>
            <div class="row">
            <div class="col-md-2">
            <p>Lokasi Toko</p>
            <select name="origin" class="form-control">
                    <option value="">--Kota--</option>
                    @foreach ($cities as $city)
                    <option value="{{$city->id}}">{{$city->city_name}}</option>
                    @endforeach
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
            <select name="courier" class="form-control">
                    <option value="" holder>Pilih Kurir</option>
                    @foreach ($couriers as $courier => $value)
                    <option value="{{$courier}}">{{$value}}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="col-md-4">
            <p>Berat (g)</p>
                  <input type="text" name="weight" class="form-control col-sm-3" value="1000" readonly>
            </div>

            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Check Ongkir</button>
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
                  <th>Action</th>
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
      @else

      @endif
      </div>
</div> 
</div>
</div>
</div>

@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $('select[name="province_origin"]').on('change', function () {
            let provinceId = $(this).val();
            if (provinceId) {
                jQuery.ajax({
                    url: '/province/' + provinceId + '/cities',
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        $('select[name="city_origin"]').empty();
                        $.each(data, function (key, value) {
                            $('select[name="city_origin"]').append('<option value="' + key + '">' + value + '</option>');
                    });
                },
            });
        } else {
            $('select[name="city_origin"]').empty();
        }
    });

        $('select[name="province_destination"]').on('change', function () {
            let provinceId = $(this).val();
            if (provinceId) {
                jQuery.ajax({
                    url: '/province/' + provinceId + '/cities',
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        $('select[name="city_destination"]').empty();
                        $.each(data, function (key, value) {
                            $('select[name="city_destination"]').append('<option value="' + key + '">' + value + '</option>');
                    });
                },
            });
        } else {
            $('select[name="city_destination"]').empty();
            }
        });
    });
</script>
@endsection

@endsection