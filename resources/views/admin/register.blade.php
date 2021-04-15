@extends('admin.layouts.app')


@section('main-content')

    <!-- Main Wrapper -->
    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-left">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/Asset 1.png') }}" alt="Logo">
                    </div>
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Register</h1>
                            <p class="account-subtitle">Access to our dashboard</p>

                            <!-- Form -->
                            <form action="{{ route('admin.register') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input name="name" class="form-control" type="text" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input name="email" class="form-control" type="text" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input name="phone_number" class="form-control" type="text" placeholder="Phone">
                                </div>                              
                                <div class="form-group">
                                    <input name="username" class="form-control" type="text" placeholder="Username">
                                </div>                               
                                <div class="form-group">
                                    <input name="password" class="form-control" type="text" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input name="password_confirmation" class="form-control" type="text" placeholder="Confirm Password">
                                </div>
                                <div class="form-group mb-0">
                                    <button class="btn btn-primary btn-block" type="submit">Register</button>
                                </div>
                            </form>
                            <!-- /Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->

@endsection
