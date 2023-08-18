@extends('Layouts.user')
@section('content')

<section class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
            <br>
            <br>
            <br>
            <br>
                <h3 class="mb-5">Galery</h3>
            </div>
        </div>
    <div class="row">
    @foreach($galeri as $item)
    <div class="col-lg-3 col-sm-6">
        <div class="card card-plain ">
            <div class="card-header p-0 position-relative">
                            <a class="d-block blur-shadow-image">
                                <a href="">
                                <img src="{{asset('data\galeri')}}\{{$item->gambar}}"  style="width: 200px;" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy" style="height: 250px;">
                            </a>
                            </a>
                        </div>
                            
                        <div class="card-body">
                    </div>
                    </div>
                   
                </div>
                @endforeach
                
            </div>
            
        </div>
    </div>
</section>
@endsection