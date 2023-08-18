<script src="{{asset('jquery-3.2.1.min.js')}}" type='text/javascript'></script>
<script src="{{asset('select2/dist/js/select2.min.js')}}" type='text/javascript'></script>

<link href="{{asset('select2/dist/css/select2.min.css')}}" rel='stylesheet' type='text/css'>

<div class="col-md-2">
        {!! Form::label('supliers_id', 'suplier:') !!}
        {!! Form::select('supliers_id', $suplier, null, ['class' => 'form-control']) !!}
</div>
<!-- Tanggal Field -->
<div class="form-group col-sm-3">
    {!! Form::label('tgl', 'Tanggal:') !!}
    {!! Form::date('tanggal', \Carbon\Carbon::now(), ['class' => 'form-control','readonly']) !!}
</div>
<!-- <div class="col-md-2">
          {!! form :: label('Tempat') !!}
        {!! Form::text('tempat', null, ['class' => 'form-control','placeholder'=>'tempat']) !!}
</div> -->


<!-- Tempat Field -->

<!-- Pelanggan Id Field -->


<div class="form-group col-md-12">
<div class="row" >
    <!-- <div class="form-group col-sm-2">
    {!! Form::label('tanggal_beli', 'Tanggal Beli:') !!}
    {!! Form::date('tanggal_beli', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
    </div> -->
    
    <div class="col-md-2">
        <div id='result'></div>
            {!! form :: label('Barang') !!}
        {!! Form::select('barangs_id', $barang, null, ['class' => 'form-control','id'=>'barangs_id','placeholder'=>'Pilih Barang']) !!}
    </div>
       
        {!! Form::hidden('_nama', null, ['class' => 'form-control','id'=>'nama','placeholder'=>'Nama']) !!}
 
    <div class="col-md-2">
          {!! form :: label('Harga Beli') !!}
        {!! Form::number('harga_beli', null, ['class' => 'form-control','id'=>'harga_beli','placeholder'=>'Harga']) !!}
    </div>
    <div class="col-md-2">
          {!! form :: label('Jumlah') !!}
        {!! Form::number('_qty', 0, ['class' => 'form-control','id'=>'qty','placeholder'=>'Jumlah','autocomplete'=>'off']) !!}
    </div>

        {!! Form::hidden('_subtotal', null, ['class' => 'form-control','id'=>'subtotal','placeholder'=>'Subtotal']) !!}

    <div class="col-md-2">
             <h1>
        <button class="btn btn-sm btn-info" id="btn-tambah">Tambah</button>
    </div>
</div>
</div>

<div class="form-group col-md-12">
    <h4>Daftar Pembelian</h4>
    <div class="row" style="border-bottom: 1px solid #eeeeee;margin-bottom: 15px;padding-bottom: 5px;">
        <!--<div class="col-md-0">No</div>-->
        <div class="col-md-1">No</div>
        <div class="col-md-2"><center>Barang</center></div>
        <div class="col-md-2"><center>Harga Beli</center></div>
        <div class="col-md-1">Qty</div>
        <div class="col-md-2"><center>Subtotal</center></div>
        <div class="col-md-1">Action</div>
    </div>
    <div id="daftar-penjualan">

    </div>
</div>
<div class="form-group col-sm-6">
</div>
<!-- Total Field -->
<div class="form-group col-sm-2">
    {!! Form::label('total', 'Total:') !!}
    {!! Form::text('total', null, ['class' => 'form-control','readonly','id'=>'total']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pembelians.index') !!}" class="btn btn-default">Cancel</a>
</div>

<script type="text/javascript">

    function ubahData() { 
      console.log('tes');
      var barangid = document.getElementById('barangs_id').value;
      var hasil = search(barangid);
    }

    function search(barangid) {
        <?php foreach($nom_barang as $nom){ ?>
            if(barangid == <?php echo $nom->id;  ?>) {  
                document.getElementById('nama').value='<?php echo $nom->nama ?>';
                //document.getElementById('harga_beli').value='<?php echo $nom->harga_beli ?>';
            }
        <?php } ?>  
    }
</script>
<script>
        $(document).ready(function(){
            function test() {
                console.log('tes');
      var barangid = document.getElementById('barangs_id').value;
      var hasil = search(barangid);
            }
            $('#barangs_id').on('change', test)
 
            function search(barangid) {
        <?php foreach($nom_barang as $nom){ ?>
            if(barangid == <?php echo $nom->id;  ?>) {  
                document.getElementById('nama').value='<?php echo $nom->nama ?>';
            }
        <?php } ?>  
    }

 
            
            // Initialize select2
            $("#barangs_id").select2();

            // Read selected option
            $('#but_read').click(function(){
                var username = $('#selUser option:selected').text();
                var userid = $('#selUser').val();
           
                $('#result').html("id : " + userid + ", name : " + username);
            });
        });
</script>