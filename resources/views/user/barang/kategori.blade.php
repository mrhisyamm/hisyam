@extends('layouts.user')
@section('content')

<section class="featured spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Product</h2>
                        </div>
                    </div>
                </div>
                <div class="row featured__filter">
    @foreach($data as $item)
    <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
        <div class="featured__item">
        <div class="featured__item__pic set-bg">
                    <img src="{{asset('data\barang')}}\{{$item->gambar}}" style="height: 270px; width: 235px;">       
                <ul class="featured__item__pic__hover">
                  <li>
                    <a href="{{ url('pesan') }}/{{ $item->id }}"><i class="fa fa-shopping-cart"></i></a>
                  </li>
                </ul>
              </div>
           
                            <div class="card-body">
                                <h6 class="text-dark font-weight-bold">{{$item->nama}}</h6>
                                <h6 class="text-danger">Rp.{{$item->harga}}</h6>
                                <p class="text-dark">Stok:{{$item->stok}}</p>
                                <p class="mb-0">{{$item->deskripsi}}<i class="fa fa-check-circle" style='color:green;'></i></p>
                     
                        </div>
                    </div>
                    
                    
                    </div>
                    @endforeach
                   
                    
                </div>
            </div>
            
        </div>
    </div>
</section>
@endsection