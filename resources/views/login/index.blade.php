@extends('layouts.main')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endpush

@section('content')
    <div class="landing-page d-flex align-items-center">
        <img src="{{ asset('img/shape1.svg') }}" class="position-absolute top-0 start-0">
        <div class="container d-flex justify-content-between position-relative z-1">
            <div class="left-side d-flex flex-column justify-content-center">
                <h1 class="poppins fw-bold">Login</h1>
                <h5>Silahkan login</h5>
                <form action="{{ route('login.auth') }}" method="post">
                    @csrf
                    {{-- Email --}}
                    <div class="form-floating mt-1">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="name@example.com" autofocus value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Password --}}
                    <div class="form-floating mt-1">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                            id="password" placeholder="Password">
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Button --}}
                    <button class="w-100 btn btn-lg btn-warning mt-3" type="submit">Login</button>
                </form>
                <small class="d-block text-center mt-3">Belum punya akun? <a href="{{ route('register') }}" class="text-warning">Daftar
                        sekarang!</a></small>

            </div>
            <div class="right-side d-flex justify-content-center align-items-center">
                <img src="{{ asset('img/model.png') }}">
            </div>
        </div>
        <img src="{{ asset('img/shape2.svg') }}" class="position-absolute bottom-0 end-0">
    </div>
@endsection
