@extends('layouts.app')

@section('content')

@section('sub-judul','Galeri')
    
      <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('Galeri.create') }}"><i class="fa fa-plus">Tambah Produk</i></a>
</h1>
</section>
<div class="section-body">
<div class="card">
<div class="card-body">
<div class="table table-responsive">
<table class="table table-bordered table-striped">
            <tr>
        <th>Gambar</th>
        <th>Deskripsi</th>
        <th colspan="2">Action</th>
            </tr>
            <tbody>
        @foreach($galeri as $galeri)
            <tr>
            <td><img src="{{asset('data/galeri')}}/{{$galeri->gambar}}" style="width: 150px" alt=""></td>
            <td>{{ $galeri->deskripsi }}</td>

            <td><a href="{{ route('Galeri.edit', [$galeri->id]) }}" class='btn btn-success'><i class="fa fa-edit">edit</i></a></td>

            <td>
                <form action="{{ url('galeri/'.$galeri->id) }}" method="POST">
                @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button class="btn btn-danger" type="submit"><i class="fa fa-trash">delete</i></button>
            </form>
        </td>
            </tr>

        @endforeach
        </tbody>
    </table>
@endsection