@extends('layouts.main')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <style>
        .sticky-top {
            height: 25vh;
            top: 5rem;
        }
    </style>
@endpush

@section('content')
    <div class="landing-page d-flex align-items-center">
        <img src="{{ asset('img/shape1.svg') }}" class="position-absolute top-0 start-0">
        <div class="container d-flex justify-content-between">
            <div class="left-side d-flex flex-column justify-content-center">
                <h1 class="poppins fw-bold">WASSAP</h1>
                <h3 class="white ">Berita Terkini dan Terpercaya,
                    Selalu Update di Tangan Anda!</h3>
                <div class="button d-flex mt-2">
                    <a href="#news-list" class="btn btn-warning rounded">Baca berita sekarang</a>
                    <a href="" class="btn btn-warning rounded ms-3">Tulis berita sekarang</a>
                </div>
            </div>
            <div class="right-side d-flex justify-content-center align-items-center">
                <img src="{{ asset('img/model.png') }}">
            </div>
        </div>
        <img src="{{ asset('img/shape2.svg') }}" class="position-absolute bottom-0 end-0">
    </div>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8">
                <h2 class="text-center" id="news-list">Berita Terbaru</h2>
                @foreach (range(1, 5) as $item)
                    <div class="news d-flex justify-content-start align-items-center mt-3">
                        <div class="news-content col-md-8">
                            <div class="author d-flex align-items-center">
                                <img src="https://source.unsplash.com/30x30?profile" class="rounded-circle img-fluid">
                                <span class="ms-2 fw-bold">Dewa Sheva Dzaky</span>
                            </div>

                            <div class="news-desc mt-2">
                                <h4 class="poppins fw-bold">Apa itu remastering Linux?</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis vero nisi tempora
                                    ullam beatae corporis iusto animi optio tempore deserunt.</p>
                                <p class="text-secondary">3 Maret ~ 24 Menit yang lalu ~ Personal</p>
                            </div>
                        </div>
                        <div class="news-image col-md-4">
                            <img src="https://source.unsplash.com/200x150?profile">
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="categories col-4 sticky-top">
                <h5>Temukan lebih banyak hal yang penting bagi Anda</h5>
                @foreach (range(1, 10) as $item)
                    <a type="button" class="btn btn-outline-warning mt-3">Warning</a>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@push('footer')
    @include('partials.footer')
@endpush
