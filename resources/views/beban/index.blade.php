@extends('layouts.app')

@section('content')
<section class="content-header">
        <h1 class="pull-left">Beban</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('beban.create') }}">Tambah</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
        <div class="table-responsive">
    <table class="table" id="beban-table">
        <thead> 
        <tr>
        <th>No</th>
        <th>Keterangan</th>
        <th>Jumlah</th>
        <th>Tanggal</th>
        <th colspan="2">Action</th>
        </tr>
        </thead>
            <tbody>
            <?php $no = 1; ?>
        @foreach($beban as $beban)
            <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $beban->keterangan }}</td>
            <td>Rp.{{ number_format ($beban->harga)}}</td>
            <td>{{ $beban->tanggal }}</td>
            <td>
            {!! Form::open(['route' => ['beban.destroy', $beban->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <!--<a href="{{ route('beban.show', [$beban->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>-->
                        <a href="{{ route('beban.edit', [$beban->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
