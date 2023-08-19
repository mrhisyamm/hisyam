@extends('layouts.user')
@section('content')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<div class="wrapper">
    <div class="section section-hero section-shaped">
    <div id="carouselExampleSlidesOnly" class="carousel slide " data-ride="carousel">
    <div class="carousel-inner">
      @php
      $awalgambar=1;
      @endphp
      @foreach($slide as $item)
      <div class="carousel-item {{ $awalgambar==1?'active':'' }}" >
        <img class="d-block w-1000" src="{{asset('data\slide_show')}}\{{$item->gambar}}" alt="{{$item->label}}">
      </div>
      @php
      $awalgambar++;
      @endphp
      @endforeach
  </div>
</div>        
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
<br>
<br>
<hr>
<section class="featured spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                          
                            <h2><center>D I S K O N</center></h2>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="row featured__filter">
      @foreach($barangs as $item)
      <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
        <div class="featured__item">
        <div class="featured__item__pic set-bg">
       
            <center>
                <img src="{{asset('data\barang')}}\{{$item->gambar}}" style="width: 200px;">
                <ul class="featured__item__pic__hover">
                  <li>
                    <a href="{{ url('pesan') }}/{{ $item->id }}"><i class="fa fa-shopping-cart"></i></a>
                  </li>
                </ul>
            
            </center>
          </div>
          <div class="card-body">
            <div class="col mt-2">
            <h6 class="mb-2 text-dark font-weight-bold">{{$item->kategori['nama']}}</h6>
            <h5>
              <a href="javascript:;" class="text-dark font-weight-bold">{{$item->nama}}</a>
            </h5>
              <tr>
              <h6><text class="text-danger">Rp.{{ number_format($item->harga)}}</h6>
              </tr>
              <p class="mb-0">{{$item->deskripsi}} <i class="fa fa-check-circle" style='color:green;'></i></p>
              </div>
          </div>
        </div>
        
      </div>
      @endforeach
    </div>
    
  </div>
  
  </div>
  
  </div>
  </div>
  </div>
</section>
@endsection