@extends('layouts.app')

@section('content')
<section class="content-header">
        <h1 class="pull-left">Gaji Karyawan</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('gaji_karyawan.create') }}">Add New Gaji</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
        <div class="table-responsive">
    <table class="table" id="gaji_karyawan-table">
        <thead> 
        <tr>
        <th>No</th>
        <th>Nama Karyawan</th>
        <th>Jumlah Gaji</th>
        <th>Tanggal</th>
        <th colspan="2">Action</th>
        </tr>
        </thead>
            <tbody>
            <?php $no = 1; ?>
        @foreach($gaji_karyawan as $gaji_karyawan)
            <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $gaji_karyawan->nama_karyawan }}</td>
            <td>Rp.{{ number_format ($gaji_karyawan->gaji)}}</td>
            <td>{{ $gaji_karyawan->tanggal }}</td>
            <td>
            {!! Form::open(['route' => ['gaji_karyawan.destroy', $gaji_karyawan->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <!--<a href="{{ route('gaji_karyawan.show', [$gaji_karyawan->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>-->
                        <a href="{{ route('gaji_karyawan.edit', [$gaji_karyawan->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
