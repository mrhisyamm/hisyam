@extends('layouts.app')

@section('content')
<section class="content-header">
        <h1 class="pull-left">kategori Barang</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('kategori.create') }}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
        <div class="table-responsive">
    <table class="table" id="kategori-table">
        <thead> 
        <tr>
        <th>No</th>
        <th>Nama</th>
        <th colspan="2">Action</th>
        </tr>
        </thead>
            <tbody>
            <?php $no = 1; ?>
        @foreach($kategori as $kategori)
            <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $kategori->nama }}</td>
            <td>
            {!! Form::open(['route' => ['kategori.destroy', $kategori->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <!--<a href="{{ route('kategori.show', [$kategori->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>-->
                        <a href="{{ route('kategori.edit', [$kategori->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
