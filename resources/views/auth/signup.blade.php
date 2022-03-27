@extends('layouts.app')

@section('content')
</head>
    <script type="text/javascript">
        function valid() {
            if (document.registration.password.value != document.registration.password_again.value) {
                alert("Password and Confirm Password Field do not match  !!");
                document.registration.password_again.focus();
                return false;
            }
            return true;
        }
    </script>

    <body class="login">
        <!-- start: REGISTRATION -->
        <div class="row">
            <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                <div class="logo margin-top-30">
                    <a href="../index.html">
                        <h2>Healthify | Patient Registration</h2>
                    </a>
                </div>
                <!-- start: REGISTER BOX -->
                <div class="box-register">
                    <form id="registration" method="POST" action="{{ route('signup_storeData') }}">
                        @csrf
                        <fieldset>
                            <legend>
                                Sign Up
                            </legend>
                            <p>
                                Enter your personal details below:
                            </p>
                            <div class="form-group">
                                <input type="text" class="form-control" name="fullName" value="{{ old('fullName') }}"
                                    placeholder="Full Name">
                                @error('fullName')
                                    <div class="text-danger">
                                        {{ $message }}
                                        <script>
                                        </script>
                                    </div>
                                @enderror

                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="address" value="{{ old('address') }}"
                                    placeholder="Address">
                                @error('address')
                                    <div class="text-danger">
                                        {{ $message }}
                                        <script>
                                        </script>
                                    </div>
                                @enderror

                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="city" value="{{ old('city') }}"
                                    placeholder="City">
                                @error('city')
                                    <div class="text-danger">
                                        {{ $message }}
                                        <script>
                                        </script>
                                    </div>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label class="block">
                                    Gender
                                </label>
                                <div class="clip-radio radio-primary">
                                    <input type="radio" id="rg-female" name="gender" value="female" {{ old('gender') == 'female' ? 'checked' : ''}}>
                                    <label for="rg-female">
                                        Female
                                    </label>
                                    <input type="radio" id="rg-male" name="gender" value="male" {{ old('gender') == 'male' ? 'checked' : ''}}>
                                    <label for="rg-male">
                                        Male
                                    </label>
                                    @error('gender')
                                        <div class="text-danger">
                                            {{ $message }}
                                            <script>
                                            </script>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <p>
                                Enter your account details below:
                            </p>
                            <div class="form-group">
                                <span class="input-icon">
                                    <input type="email" class="form-control" name="email" id="email"
                                        onBlur="userAvailability()" value="{{ old('email') }}" placeholder="Email">
                                    <i class="fa fa-envelope"></i> </span>
                                <span id="user-availability-status1" style="font-size:12px;"></span>
                                @error('email')
                                    <div class="text-danger">
                                        {{ $message }}
                                        <script>
                                        </script>
                                    </div>
                                @enderror

                            </div>
                            <div class="form-group">
                                <span class="input-icon">
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Password">
                                    <i class="fa fa-lock"></i> </span>
                                @error('password')
                                    <div class="text-danger">
                                        {{ $message }}
                                        <script>
                                        </script>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <span class="input-icon">
                                    <input type="password" class="form-control" id="password_again"
                                        name="password_confirmation" placeholder="Password Again">
                                    <i class="fa fa-lock"></i> </span>
                                @error('password_confirmation')
                                    <div class="text-danger">
                                        {{ $message }}
                                        <script>
                                        </script>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="checkbox clip-check check-primary">
                                    <input type="checkbox" id="agree" value="agree" checked="true" readonly=" true">
                                    <label for="agree">
                                        I agree
                                    </label>
                                </div>
                            </div>
                            <div class="form-actions">
                                <p>
                                    Already have an account?
                                    <a href="{{ route('login') }}">
                                        Log-in
                                    </a>
                                </p>
                                <button type="submit" class="btn btn-primary pull-right" id="submit" name="submit">
                                    Submit <i class="fa fa-arrow-circle-right"></i>
                                </button>
                            </div>
                        </fieldset>
                    </form>

                </div>

            </div>
        </div>
    @endsection

</body>
