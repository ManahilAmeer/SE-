@extends('layout')

@section('content')
<body class="bg-gradient-primary">

    <div class="container" style="background-color: white">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7" style="background-color: pink; border: 2px solid #e75480;">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4" style="font-weight: 500">Create an Account!</h1>
                            </div>
                            <form action="{{URL::to('/store')}}" method="get">
                        @csrf
                                <!-- <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                       <input id= "role" type="text" style="border-radius: 10px;"  name="Role" onkeyup='GetSelectedText();' placeholder="Role (Customer or Beautician)" pattern="^(Customer|Beautician)$"
            title="Enter Customer or Beautician!" >

                                    </div>
                                </div> -->
                                <div class="form-group">
                                        <input id="name" type="text" class="form-control form-control-user @error('name') is-invalid @enderror" style="border-radius: 10px;" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                            placeholder="First Name">
                                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                <div class="form-group">
                                    <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" style="border-radius: 10px;" name="email" value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="Email Address">
                                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-md-6 mb-3 mb-sm-0">
                                        <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" style="border-radius: 10px;" name="password" required autocomplete="new-password"
                                         placeholder="Password">
                                         @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" style="border-radius: 10px;" name="password_confirmation" required autocomplete="new-password"
                                         placeholder="Repeat Password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block" style="background-color: #e75480; color: white; border: 2px solid #e75480; border-radius: 20px; font-weight: 700">
                                    {{ __('Register') }}
                                </button>
                                <hr>
                                
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="new-forgot" style="color: #e75480; font-weight: 400">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="new-login" style="color: #e75480; font-weight: 400">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <!-- <script>
    function GetSelectedText(){
                var e = document.getElementById("role");
                if(typeof(e)=='undefined'){
                  var result='Beautician';   
                }

				if(document.getElementById('role').value =="Beautician"){
                    document.getElementById('phone').style.visibility='visible';
                    document.getElementById('Address').style.visibility='visible';
                }
                else{
                    document.getElementById('phone').style.visibility='hidden';
                    document.getElementById('Address').style.visibility='hidden';
                }

			}</script> -->

</body>
@endsection