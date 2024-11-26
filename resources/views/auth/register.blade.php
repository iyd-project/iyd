@extends('layouts.auth')

@section('content')
    <div class="wrapper wrapper-login">
        <div class="container container-login animated fadeIn">
            <h3 class="text-center">Sign Up</h3>
            <div class="login-form">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group form-floating-label">
                        <input id="fullname" name="fullname" type="text" class="form-control input-border-bottom"
                            required />
                        <label for="fullname" class="placeholder">Fullname</label>
                    </div>
                    <div class="form-group form-floating-label">
                        <input id="email" name="email" type="email" class="form-control input-border-bottom"
                            required />
                        <label for="email" class="placeholder">Email</label>
                    </div>
                    <div class="form-group form-floating-label">
                        <input id="passwordsignin" name="password" type="password" class="form-control input-border-bottom"
                            required />
                        <label for="passwordsignin" class="placeholder">Password</label>
                    </div>
                    <div class="form-group form-floating-label">
                        <input id="confirmpassword" name="password_confirmation" type="password"
                            class="form-control input-border-bottom" required />
                        <label for="confirmpassword" class="placeholder">Confirm Password</label>
                    </div>
                    <div class="form-action">
                        <button type="submit" class="btn btn-primary btn-rounded btn-login">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
