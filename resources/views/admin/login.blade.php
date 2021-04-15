@extends('admin.layouts.app')

@section('main-content')


    <!-- Main Wrapper -->
    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-left">
                        <img class="img-fluid" src="{{ URL::to('frontend/assets/images/Asset 1.png') }}" alt="Logo">
                    </div>
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Login</h1>
                            <p class="account-subtitle">Access to our dashboard</p>

                            <!-- Form -->
                            <form action="{{ route('admin.login') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input name="login_data" class="form-control" type="text" placeholder="Email / Cell / Username">
                                </div>
                                <div class="form-group">
                                    <input name="password" class="form-control" type="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" type="submit">Login</button>
                                </div>
                            </form>
                            <!-- /Form -->
                            <div class="text-center forgotpass"><a href="forgot-password.html">Forgot Password?</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->

@endsection

