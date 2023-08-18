@extends('layouts.app')

@section('content')

<form action="{{route('gaji_karyawan.store')}}" method="post" enctype="multipart/form-data">

    <form method="POST" action="{{ route('gaji_karyawan.index') }}">
        @csrf
        <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
        
        <div class="form-group col-sm-6">
        <label for="nama_karyawan">Nama Karyawan</label>
         <input type="text" name="nama_karyawan" class="form-control" id="nama_karyawan" required>
        </div>

        <div class="form-group col-sm-6">
        <label for="gaji">Jumlah Gaji</label>
         <input type="number" name="gaji" class="form-control" id="gaji" required>
        </div>

        <div class="form-group col-sm-6">
        <label for="tanggal">Tanggal</label>
         <input type="date" name="tanggal" class="form-control" id="tanggal" required>
        </div>

        <div class="form-group col-sm-6">
        <label for="keterangan">Keterangan</label>
         <input type="text" name="keterangan" class="form-control" id="keterangan" required>
        </div>

        <div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('gaji_karyawan.index') }}" class="btn btn-default">Cancel</a>
</div>
        </form>
</form>
    </div>
</div>

@endsection

