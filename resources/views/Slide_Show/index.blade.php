@extends('layouts.app')

@section('content')
<section class="content-header">
        <h1 class="pull-left">Slide Show</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('Slide_Show.create') }}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
        <div class="table-responsive">
    <table class="table" id="Slide_Show-table">
        <thead> 
        <tr>
        <th>Gambar</th>
        <th>Label</th>
        <th colspan="2">Action</th>
        </tr>
        </thead>
            <tbody>
        @foreach($slide_show as $slide_show)
            <tr>
            <td><img src="{{asset('data/slide_show')}}/{{$slide_show->gambar}}" style="width: 150px" alt=""></td>
            <td>{{ $slide_show->label }}</td>
            <td>
            {!! Form::open(['route' => ['Slide_Show.destroy', $slide_show->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <!--<a href="{{ route('Slide_Show.show', [$slide_show->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>-->
                        <a href="{{ route('Slide_Show.edit', [$slide_show->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
