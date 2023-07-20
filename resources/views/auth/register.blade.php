@extends ('layouts.view')
@section ('view')

<div class="fables-header fables-after-overlay">
                <div class="container"> 
                    <h2 class="fables-page-title fables-second-border-color">Registration Form</h2>
                </div>
            </div>  
<!-- /End Header -->
     
<!-- Start Breadcrumbs -->
              <div class="fables-light-background-color">
                  <div class="container"> 
                      <nav aria-label="breadcrumb">
                        <ol class="fables-breadcrumb breadcrumb px-0 py-3">
                          <li class="breadcrumb-item"><a href="/" class="fables-second-text-color">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Register</li>
                        </ol>
                      </nav> 
                  </div>
              </div>
<!-- /End Breadcrumbs -->
     
<!-- Start page content -->   
              <div class="container">
                  <div class="row my-4 my-lg-5">
                        <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 text-center">
                            <p class="font-20 semi-font fables-main-text-color mt-4 mb-4 mb-lg-5">Register</p>
                            <form form class="form-signin" method="POST" action="{{ route('register') }}">
                              @csrf
                                <div class="form-group"> 
                                    <div class="input-icon">
                                    <span class="fables-iconuser fables-input-icon font-19 mt-1"></span>
                                            <input type="text" id="name" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" name="name" :value="old('name')" placeholder="Name" required autofocus autocomplete="name" >                          
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-icon">
                                    <span class="fables-iconemail fables-input-icon font-19 mt-1"></span>
                                        <input type="email" id="email" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" name="email" :value="old('email')" placeholder="Email" autocomplete="username" required autofocus>                         
                                    </div>
                                </div>
                                <div class="form-group"> 
                                    <div class="input-icon">
                                      <span class="fables-iconpassword fables-input-icon font-19 mt-1"></span>
                                      <input type="password" id="password" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password" placeholder="Password">
                                        @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div> 
                                <div class="form-group"> 
                                    <div class="input-icon">
                                      <span class="fables-iconpassword fables-input-icon font-19 mt-1"></span>
                                      <input type="password" id="password_confirmation" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" name="password_confirmation"
                                      :value="old('login')" placeholder="Comfirm_Password" required autocomplete="password_confirmation">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-block rounded-0 white-color fables-main-hover-background-color fables-second-background-color font-16 semi-font py-3">Register</button>
                                <p class="fables-forth-text-color">Already registered?  <a href="{{ route('login') }}" class="font-16 semi-font fables-second-text-color underline fables-main-hover-color ml-2">Login</a></p>
                              </form>
                        </div>
                  </div>

              </div>

<!-- /End page content -->
      
@endsection
