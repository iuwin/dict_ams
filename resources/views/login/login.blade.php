@extends('layout.master')

@section('title', 'AMS | Login')

@section('dependencies')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/login/login.css') }}">
@stop

@section('body')
    <div class="d-block d-md-flex align-items-center justify-content-center w-100 h-100 bg-primary">
        <div class="login__center-panel d-block position-relative py-4 bg-white">
            <!-- app brand -->
            <div class="login__app-brand d-block mx-auto">
                <div class="d-flex flex-row flex-md-column align-items-center justify-content-md-center flex-nowrap">
                    <img class="login__brand-icon d-block my-0 my-md-1" src="{{ asset('images/dict-logo.jpg') }}" alt="dict-logo">
                    <h4 class="h4 my-0 my-md-1 text-dark" role="text">Login Here</h4>
                </div>
            </div>
            <!-- element as spacing -->
            <div class="d-none d-md-block py-2"></div>
            <!-- form -->
            <form class="login__page-form-0 d-flex flex-column align-items-center justify-content-center mx-auto form-group" action="/login" method="POST">
                @error('error')
                    <div class="alert alert-danger alert-dismissible fade show w-100" role="alert">
                        <small class="text-danger">{{ $message }}</small>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @enderror
                @csrf
                <div class="input-group my-2">
                    <span class="input-group-text"><i class="text-dark fa fa-user"></i></span>
                    <input class="form-control" type="text" name="username" placeholder="Username" required>
                </div>
                <div class="input-group my-2">
                    <span class="input-group-text"><i class="text-dark fa fa-lock"></i></span>
                    <input class="form-control" type="password" name="password" placeholder="Password" required>
                </div>
                <div class="input-group">
                    <input id="remember-me" class="form-check-input" type="checkbox" name="remember-me">
                    <label class="mx-1 text-dark" for="remember-me"><small class="text-muted" style="user-select:none;">Remember me</small></label>
                </div>
                <button class="btn btn-primary lead my-2 mt-md-2 mb-md-0 w-100" type="submit">Login</button>
                <hr class="my-1 my-md-3 w-100">
                <a class="btn btn-primary lead my-2 my-md-0 w-100" href="{{ '/register' }}">Register</a>
            </form>
        </div>
    </div>
@stop



