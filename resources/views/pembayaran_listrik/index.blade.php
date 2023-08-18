@extends('layouts.app')

@section('content')
<section class="content-header">
        <h1 class="pull-left">Pembayaran Listrik</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('pembayaran_listrik.create') }}">Add New Pembayaran</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
        <div class="table-responsive">
    <table class="table" id="pembayaran_listrik-table">
        <thead> 
        <tr>
        <th>No</th>
        <th>No Pemilik</th>
        <th>Keterangan</th>
        <th>Tanggal</th>
        <th>Token</th>
        <th>Jumlah Pembayaran</th>
        <th colspan="2">Action</th>
        </tr>
        </thead>
            <tbody>
            <?php $no = 1; ?>
        @foreach($pembayaran_listrik as $pembayaran_listrik)
            <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $pembayaran_listrik->no_tujuan }}</td>
            <td>{{ $pembayaran_listrik->keterangan }}</td>
            <td>{{ $pembayaran_listrik->tanggal }}</td>
            <td>{{ $pembayaran_listrik->token }}</td>
            <td>Rp.{{ number_format ($pembayaran_listrik->jumlah_bayar)}}</td>
            <td>
            {!! Form::open(['route' => ['pembayaran_listrik.destroy', $pembayaran_listrik->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <!--<a href="{{ route('pembayaran_listrik.show', [$pembayaran_listrik->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>-->
                        <a href="{{ route('pembayaran_listrik.edit', [$pembayaran_listrik->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
