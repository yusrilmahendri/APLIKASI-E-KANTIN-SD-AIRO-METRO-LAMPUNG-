<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E-Kantin</title>
	<link href="{{ asset('master/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('master/css/datepicker3.css') }}" rel="stylesheet">
	<link href="{{ asset('/master/css/styles.css') }}" rel="stylesheet">
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
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
		</div><!-- /.col-->
	</div><!-- /.row -->	
    <script src="{{ asset('master/js/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ asset('/master/js/bootstrap.min.js') }}"></script>
</body>
</html>