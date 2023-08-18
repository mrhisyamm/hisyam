@extends('layouts.app')

@section('content')
<section class="content-header">
        <h1 class="pull-left">Pembayaran Air</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('pembayaran_air.create') }}">Add New Pembayaran</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
        <div class="table-responsive">
    <table class="table" id="pembayaran_air-table">
        <thead> 
        <tr>
        <th>No</th>
        <th>No Ref</th>
        <th>Tanggal Pembayaran</th>
        <th>Instansi</th>
        <th>Nama Pemilik</th>
        <th>Keterangan</th>
        <th>Jumlah Pembayaran</th>
        <th colspan="2">Action</th>
        </tr>
        </thead>
            <tbody>
            <?php $no = 1; ?>
        @foreach($pembayaran_air as $pembayaran_air)
            <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $pembayaran_air->no_ref }}</td>
            <td>{{ $pembayaran_air->tanggal }}</td>
            <td>{{ $pembayaran_air->instansi }}</td>
            <td>{{ $pembayaran_air->nama_kepemilikan }}</td>
            <td>{{ $pembayaran_air->keterangan }}</td>
            <td>Rp.{{ number_format ($pembayaran_air->jumlah_bayar)}}</td>
            <td>
            {!! Form::open(['route' => ['pembayaran_air.destroy', $pembayaran_air->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <!--<a href="{{ route('pembayaran_air.show', [$pembayaran_air->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>-->
                        <a href="{{ route('pembayaran_air.edit', [$pembayaran_air->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                    </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
