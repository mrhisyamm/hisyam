@extends('layouts.app')

@section('content')
<section class="content-header">
        <h1 class="pull-left">Beban</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

<form action="{{route('beban.store')}}" method="post" enctype="multipart/form-data">

    <form method="POST" action="{{ route('beban.index') }}">
        @csrf
        <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
        
        <div class="form-group col-sm-6">
        <label for="keterangan">Keterangan</label>
         <input type="text" name="keterangan" class="form-control" id="keterangan" required>
        </div>

        <div class="form-group col-sm-6">
        <label for="harga">Jumlah</label>
         <input type="number" name="harga" class="form-control" id="harga" required>
        </div>

        <div class="form-group col-sm-6">
        <label for="tanggal">Tanggal</label>
         <input type="date" name="tanggal" class="form-control" id="tanggal" required>
        </div>

        <div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('beban.index') }}" class="btn btn-default">Cancel</a>
</div>
        </form>
</form>
    </div>
</div>

@endsection

