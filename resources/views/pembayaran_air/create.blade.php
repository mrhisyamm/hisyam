@extends('layouts.app')

@section('content')

<form action="{{route('pembayaran_air.store')}}" method="post" enctype="multipart/form-data">

    <form method="POST" action="{{ route('pembayaran_air.index') }}">
        @csrf
        <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
        
        <div class="form-group col-sm-6">
        <label for="no_ref">No Ref</label>
         <input type="text" name="no_ref" class="form-control" id="no_ref" required>
        </div>

        <div class="form-group col-sm-6">
        <label for="tanggal">Tanggal Pembayaran</label>
         <input type="date" name="tanggal" class="form-control" id="tanggal" required>
        </div>

        <div class="form-group col-sm-6">
        <label for="instansi">Instansi</label>
         <input type="text" name="instansi" class="form-control" id="instansi" required>
        </div>

        <div class="form-group col-sm-6">
        <label for="nama_kepemilikan">Nama Kepemilikan</label>
         <input type="text" name="nama_kepemilikan" class="form-control" id="nama_kepemilikan" required>
        </div>

        <div class="form-group col-sm-6">
        <label for="keterangan">Keterangan</label>
         <input type="text" name="keterangan" class="form-control" id="keterangan" required>
        </div>

        <div class="form-group col-sm-6">
        <label for="jumlah_bayar">Total Pembayaran</label>
         <input type="number" name="jumlah_bayar" class="form-control" id="jumlah_bayar" required>
        </div>

        <div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('pembayaran_air.index') }}" class="btn btn-default">Cancel</a>
</div>
        </form>
</form>
    </div>
</div>

@endsection

