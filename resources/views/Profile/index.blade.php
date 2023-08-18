@extends('layouts.app')

@section('content')

@section('sub-judul','Profile')
    
<section class="content-header">
        <h1 class="pull-left">Profile</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('Profile.create') }}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
        <div class="table-responsive">
    <table class="table" id="Profile-table">
        <thead> 
            <tr>
        <th>Visi</th>
        <th>Misi</th>
        
        <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
        @foreach($profile as $profile)
            <tr>
            <td>{{ $profile->visi }}</td>
            <td>{{ $profile->tentang_kami }}</td>
            <td>
            {!! Form::open(['route' => ['Profile.destroy', $profile->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <!--<a href="{{ route('Profile.show', [$profile->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>-->
                        <a href="{{ route('Profile.edit', [$profile->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                    </td>
            </tr>

            </div>
        </div>
    </div>
        @endforeach
        </tbody>
    </table>
@endsection