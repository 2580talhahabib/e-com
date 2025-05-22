<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Register</title>

    <!-- Fontfaces CSS-->
    <link href="{{ url('admin/css/font-face.css') }}" rel="stylesheet" media="all">
   

    <!-- Bootstrap CSS-->
 <link href="{{ url('admin/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all"> 
   

    <!-- Main CSS-->
    <link href="{{ url('admin/css/theme.css') }}" rel="stylesheet" media="all"> 

</head>
@include('admin.layouts.message')
<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{ url('admin/images/icon/logo.png') }}" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="{{ route('auth.registerauth') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="name" value="{{ old('name') }}" placeholder="Username">
                                </div>
                                @error('name')
                                <div class="text text-danger">
                                    {{ $message }}

                                </div>
                                @enderror
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" value="{{ old('email') }}" placeholder="Email">
                                </div>
                                   @error('email')
                                <div class="text text-danger">
                                    {{ $message }}

                                </div>
                                @enderror
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password"  placeholder="Password">
                                </div>
                                  @error('password')
                                <div class="text text-danger">
                                    {{ $message }}

                                </div>
                                @enderror
                                <button class="au-btn au-btn--block au-btn--green m-b-20 mt-2 "  type="submit">Register</button>
                             
                            </form>
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="{{ route('auth.login') }}">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


</body>

</html>
<!-- end document-->