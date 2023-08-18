@extends('layouts.app')

@section('content')

<form action="{{route('kategori.store')}}" method="post" enctype="multipart/form-data">

    <form method="POST" action="{{ route('kategori.index') }}">
        @csrf
        <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
        
        <div class="form-group col-sm-6">
        <label for="nama">Nama</label>
         <input type="text" name="nama" class="form-control" id="nama" required>
        </div>

        <div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('kategori.index') }}" class="btn btn-default">Cancel</a>
</div>
        </form>
</form>
    </div>
</div>

@endsection

