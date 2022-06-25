<!doctype html>
<html lang="en">

  @include('siswa.layouts.head')
  
  <body class="img js-fullheight" scroll="no" 
  style="background-image: url({{ asset ('../frontend/images/bg_sd.jpg') }}); ">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <img scroll="no" src="{{ asset ('../frontend/images/logo.png') }}" width="130px" height="120px" norolling>
                    <h1 class="heading-section">E-Kantin</h1>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">KANTIN SD AISYIYAH METRO</h3>
                
            <form action="{{ url('/postlogin') }}" method="POST" class="signin-form">
                
            {{ csrf_field() }}

                <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Masukan Email Anda" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group">
                   <input id="password-field" type="password" placeholder="Masukan Password Anda" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                 <div class="form-group">
                    
                    <button type="submit" class="form-control btn btn-primary">
                      Login
                    </button>
                </div>
           </form>
            </div>
        </div>
      </div>
  </div>
</section>

  @include('siswa.layouts.scripts')

</body>
</html>
