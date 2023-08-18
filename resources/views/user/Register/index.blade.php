<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TB. HIDAYAH - Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset ('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create New Account!</h1>
                            </div>
                            <form action="/Register" method="post">
                                @csrf
                            <div class="form-group">
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                                            placeholder="Name" required value="{{ old('name')}}">
                                            @error('name')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                    </div>
                                <div class="form-group">
                                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username"
                                            placeholder="User Name" required value="{{ old('username')}}">
                                            @error('username')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                                        placeholder="Alamat" required value="{{ old('alamat')}}">
                                        @error('alamat')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                            <input type="number" name="no_telp" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp"
                                                placeholder="No.Telp" requiredvalue="{{ old('no_telp')}}">
                                                @error('no_telp')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                        placeholder="name@example.com" required value="{{ old('email')}}">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                </div>
                                <div class="form-group">
                                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                                            id="password" placeholder="Password" required>
                                            @error('password')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-user btn-block" type="submit">Register Account</button>
                            </form>
                            
                            <div class="text-center">
                                <a class="small" href="/Login">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js')}}"></script>

</body>

</html>