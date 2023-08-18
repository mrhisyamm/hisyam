@extends('layouts.app')

@section('content')
<section class="content-header">
        <h1>
            Slide Show
        </h1>
   </section>
    <form method="POST" action="{{ route('Slide_Show.update',$slide_show->id) }}" method="post" enctype="multipart/form-data">
        @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="content">       
    @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
        <div class="form-group col-sm-6">
        <label for="">Gambar</label>
         <input type="file" name="file" value="{{ $slide_show->gambar }}" class="form-control">
        </div>

        <div class="form-group col-sm-6">
        <label for=""><Label></Label></label>
         <input type="text" name="label" value="{{ $slide_show->label }}" class="form-control">
        </div>
        
    <div class="form-group col-sm-12">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('Slide_Show.index') }}" class="btn btn-danger"><i class="fa fa-undo">Cancel</i></a>
    </div>
</div>
</form>

@endsection