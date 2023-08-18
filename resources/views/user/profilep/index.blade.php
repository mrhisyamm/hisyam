@extends('Layouts.user')

@section('content')

<section class="checkout spad">
      <div class="container">
        <div class="checkout__form">
          <h4>Update Profile</h4>
          <form action="{{url('profilep')}}" method="POST">
          @csrf
            <div class="row">
              <div class="col-lg-8 col-md-6">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="checkout__input">
                      <p>Name<span>*</span></p>
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $customer->name }}" required autocomplete="name" autofocus>
                      @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="checkout__input">
                      <p>Email<span>*</span></p>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $customer->email }}" required autocomplete="email">
                        @error('email')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-lg-6">
                    <div class="checkout__input">
                      <p>No HP<span>*</span></p>
                      <input id="nohp" type="text" class="form-control @error('nohp') is-invalid @enderror" name="nohp" value="{{ $customer->nohp }}" required autocomplete="nohp" autofocus>
                        @error('nohp')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="checkout__input">
                      <p>Alamat<span>*</span></p>
                      <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" required="">{{ $customer->alamat }}</textarea>
                        @error('alamat')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="checkout__input">
                      <p>Password<span>*</span></p>
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                        @error('password')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                  </div>
  
                <div class="col-lg-6">
                <div class="checkout__input">
                  <p>Confirm Password<span>*</span></p>
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                </div>
                </div>
                </div>
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary">Save</button>
                
                </div>
              </div>

              <div class="col-lg-4 col-md-6">
                <div class="checkout__order">
                  <h4><i class="fa fa-user"></i>My Profile</h4>
                  <div class="checkout__order__products">
                    Name : {{$customer->name}}
                  </div>
                  <div class="checkout__order__subtotal">
                    Email : {{$customer->email}}
                  </div>
                  <div class="checkout__order__total">
                    Alamat : {{$customer->alamat}}
                  </div>
                  <div class="checkout__order__total">
                    No.Telp : {{$customer->nohp}}
                  </div>
                  
                </div>
              </div>
            </div>
            @include('sweetalert::alert')
            </form>
            
        </div>
      </div>
      
    </section>
   
@endsection