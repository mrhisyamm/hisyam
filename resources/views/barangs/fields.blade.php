<div class="form-group col-sm-6">
<label for="file">Gambar</label>
    <input type="file" name="file" class="form-control" multiple="true" require="">
</div>

<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- deskripsi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deskripsi', 'Deskripsi:') !!}
    {!! Form::text('deskripsi', null, ['class' => 'form-control']) !!}
</div>

<!-- Stok Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stok', 'Stok:') !!}
    {!! Form::number('stok', null, ['class' => 'form-control']) !!}
</div>

<!-- Satuan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('satuan', 'Satuan:') !!}
    {!! Form::text('satuan', null, ['class' => 'form-control']) !!}
</div>

<!-- Harga Beli Field -->
<div class="form-group col-sm-6">
    {!! Form::label('harga_beli', 'Harga Beli:') !!}
    <!-- {!! Form::number('harga_beli', null, ['class' => 'form-control']) !!} -->
    <input type="number" name="harga_beli" class="form-control" min="0">
</div>

<!-- Harga Field -->
<div class="form-group col-sm-6">
    {!! Form::label('harga', 'Harga:') !!}
   <!--  {!! Form::number('harga', null, ['class' => 'form-control']) !!} -->
    <input type="number" name="harga" class="form-control" min="0">

</div>
<!-- Harga Diskon Field -->
<div class="form-group col-sm-6">
    {!! Form::label('harga_diskon', 'Harga Diskon:') !!}
   <!--  {!! Form::number('harga', null, ['class' => 'form-control']) !!} -->
    <input type="number" name="harga_diskon" class="form-control" min="0">

</div>

<!-- status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
<label for="">Kategori Barang</label>
        <select name="id_kategori" id="id_kategori" class="form-control">
            <option value="">--pilih jenis barang--</option>
        @foreach($kategori as $item)
            <option value="{{$item->id}}">{{$item->nama}}</option>
        @endforeach
        </select>
        </div>
</div>

@section('scripts')
    <script type="text/javascript">
        $('#tgl_expired').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('barangs.index') }}" class="btn btn-default">Cancel</a>
</div>
