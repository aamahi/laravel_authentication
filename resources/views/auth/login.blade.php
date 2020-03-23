
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Login</title>
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/floating-labels/floating-labels.css" rel="stylesheet">
</head>

<body>

<form class="form-signin" action="{{route('login')}}" method="post">

    @csrf
    <div class="text-center mb-4">
        <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
       </div>
    @if($errors->any())
        @foreach($errors->all() as $error)
            {{$error}}
            <hr>
        @endforeach
    @endif



    <div class="form-label-group">
        <input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror"  name="email" placeholder="Email address" name="password"  name="email" value="{{old('email')}}">
        <label for="inputEmail">Email address</label>
        @error('email')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
     </span>
        @enderror

    </div>

    <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control  @error('password') is-invalid @enderror" placeholder="Password" name="password" value="{{old('password')}}">
        <label for="inputPassword">Password</label>
        @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror

    </div>


    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <hr>
    already have an account : <a href="" class="btn btn-info">Signup</a>
    <a href="{{ route('password.request') }}" >Forget Password</a>

    <p class="mt-5 mb-3 text-muted text-center">&copy; {{date('Y')-1}}-{{date('Y')}}</p>
</form>
</body>
</html>
