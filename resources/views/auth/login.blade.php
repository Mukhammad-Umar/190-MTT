<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>190-MTT admin paneliga kirish</title>
    
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('AdminLTE/css/admin.css') }}">
</head>
<body>
    
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
        <div class="card-header">{{ __('Login') }}</div>
    </div>

    <!-- Login Form -->
    <form method="POST" action="{{ route('login') }}">
                        @csrf

        <input type="email" id="email" class="fadeIn second form-control @error('email') is-invalid @enderror" name="email" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required autocomplete="email" autofocus>

        <input type="password" id="password" class="fadeIn third form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}" required autocomplete="current-password">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        <input type="submit" class="fadeIn fourth" value="{{ __('Login') }}">
    </form>

  </div>
</div>

    <!-- AdminLTE -->
    <script src="{{ asset('AdminLTE/js/jQuery-2.2.0.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/js/bootstrap.min.js') }}"></script>

</body>
</html>
