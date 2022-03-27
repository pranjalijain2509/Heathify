@extends('layouts.app')

@section('content')
    </head>

    <body class="login">
        <div class="row">
            <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                <div class="logo margin-top-30">
                    <a href="../index.html">
                        <h2> Healthify | Login</h2>
                    </a>
                </div>


                <div class="box-login">


                    <form class="form-login" method="post" action="{{ route('login') }}">
                        @csrf
                        <fieldset>
                            <legend>
                                Sign in to your account
                            </legend>
                            <p>
                                Please enter your name and password to log in.<br />
                            </p>
                            <div class="form-group">
                                <span class="input-icon">
                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                    <i class="fa fa-user"></i> </span>
                                @error('email')
                                    <div class="text-danger">
                                        {{ $message }}
                                        <script>
                                        </script>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group form-actions">
                                <span class="input-icon">
                                    <input type="password" class="form-control password" name="password"
                                        placeholder="Password">
                                    <i class="fa fa-lock"></i>
                                    @error('password')
                                        <div class="text-danger">
                                            {{ $message }}
                                            <script>
                                            </script>
                                        </div>
                                    @enderror
                                    @if (session('status'))
                                        <div class="text-danger">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                </span><a href="">
                                    Forgot Password ?
                                </a>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary pull-right" name="submit">
                                    Login <i class="fa fa-arrow-circle-right"></i>
                                </button>
                            </div>
                            <div class="new-account">
                                Don't have an account yet?
                                <a href="{{ route('signup') }}">
                                    Create an account
                                </a>
                            </div>
                        </fieldset>
                    </form>

                </div>

            </div>
        </div>

    </body>
@endsection()
