@extends('layouts.app')

@section('content')

@section('sub-judul','Edit Profile')

    <form method="POST" action="{{ route('Profile.update',$profile->id) }}" method="post" enctype="multipart/form-data">
        @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="content">       
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <div class="row">
        <div class="form-group col-sm-6">
        <label for="visi">Visi</label>
         <input type="text" name="visi" value="{{ $profile->visi }}" class="form-control" id="visi" required>
        </div>

        <div class="form-group col-sm-6">
        <label for="tentang_kami">Misi</label>
         <input type="text" name="tentang_kami" value="{{ $profile->tentang_kami }}" class="form-control" id="tentang_kami" required>
        </div>

    
        
    <div class="form-group col-sm-12">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('Profile.index') }}" class="btn btn-danger"><i class="fa fa-undo">Cancel</i></a>
    </div>
</div>
</form>

@endsection