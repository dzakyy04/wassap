@extends('layouts.main')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endpush

@section('content')
    <div class="landing-page d-flex align-items-center">
        <img src="{{ asset('img/shape1.svg') }}" class="position-absolute top-0 start-0">
        <div class="container d-flex justify-content-between position-relative z-1">
            <div class="left-side d-flex flex-column justify-content-center">
                <h1 class="poppins fw-bold">Daftar</h1>
                <h5>Silahkan daftar terlebih dahulu</h5>
                <form action="{{ route('register.store') }}" method="post">
                    @csrf

                    {{-- Name --}}
                    <div class="form-floating mt-1">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            id="name" placeholder="nama" autofocus value="{{ old('name') }}">
                        <label for="name">Nama</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Username --}}
                    <div class="form-floating mt-1">
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                            id="username" placeholder="Username" autofocus value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div class="form-floating mt-1">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="name@example.com" value="{{ old('email') }}">
                        <label for="email">Email</label>
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
                    <button class="w-100 btn btn-lg btn-warning mt-3" type="submit">Daftar</button>
                </form>
                <small class="d-block text-center mt-3">Sudah punya akun? <a href="{{ route('login') }}" class="text-warning text-decoration-none">Login
                        sekarang!</a></small>

            </div>
            <div class="right-side d-flex justify-content-center align-items-center">
                <img src="{{ asset('img/model.png') }}">
            </div>
        </div>
        <img src="{{ asset('img/shape2.svg') }}" class="position-absolute bottom-0 end-0">
    </div>
@endsection
