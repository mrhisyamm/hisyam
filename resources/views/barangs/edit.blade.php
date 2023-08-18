@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Barang
        </h1>
   </section>
   <form action="{{route('barangs.update', $barang->id)}}" method="post" enctype="multipart/form-data">
                @csrf
            <input type="hidden" name="_method" value="PATCH">
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
               

               <div class="form-group col-sm-6">
{!! Form::label('gambar', 'Gambar:') !!}
    <input type="file" name="file" value="{{ $barang->gambar }}" class="form-control">
    <td><img src="{{asset('data/barang')}}/{{$barang->gambar}}" style="width: 100px" alt=""></td>
        </div>

<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    <input type="text" name="nama" value="{{ $barang->nama }}" class="form-control">
</div>

<!-- deskripsi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deskripsi', 'Deskripsi:') !!}
    <input type="text" name="deskripsi" value="{{ $barang->deskripsi }}" class="form-control">
</div>

<!-- Stok Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stok', 'Stok:') !!}
    <input type="number" name="stok" value="{{ $barang->stok }}" class="form-control">
</div>

<!-- Satuan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('satuan', 'satuan:') !!}
    <input type="text" name="satuan" value="{{ $barang->satuan }}" class="form-control">
</div>

<!-- Harga Beli Field -->
<div class="form-group col-sm-6">
    {!! Form::label('harga_beli', 'Harga Beli:') !!}
    <input type="number" name="harga_beli" value="{{ $barang->harga_beli }}" class="form-control">
    <!--<input type="number" name="harga_beli" class="form-control" min="0"> -->
</div>

<!-- Harga Field -->
<div class="form-group col-sm-6">
    {!! Form::label('harga', 'Harga:') !!}
    <input type="number" name="harga" value="{{ $barang->harga }}" class="form-control">
    <!-- <input type="number" name="harga" class="form-control" min="0"> -->

</div>
<!-- Harga Diskon Field -->
<div class="form-group col-sm-6">
    {!! Form::label('harga_diskon', 'Harga Diskon:') !!}
    <input type="number" name="harga_diskon" value="{{ $barang->harga_diskon }}" class="form-control">
    <!-- <input type="number" name="harga_diskon" class="form-control" min="0"> -->

</div>

<!-- status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <input type="text" name="status" value="{{ $barang->status }}" class="form-control">
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
        <div class="form-group col-sm-12">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('barangs.index') }}" class="btn btn-danger"><i class="fa fa-undo">Cancel</i></a>
        </form>
    </div>
</div>
@endsection