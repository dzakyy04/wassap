@extends('layouts.main')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
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
                    <a href="#news-list" class="btn btn-warning rounded-pill">Baca berita sekarang</a>
                    <a href="" class="btn btn-warning rounded-pill ms-3">Tulis berita sekarang</a>
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
                <h2 class="text-center poppins fw-bold" id="news-list">Berita Terbaru</h2>
                @foreach ($news->take(5) as $news)
                    <div class="news d-flex align-items-center mt-4">
                        <div class="news-content col-md-8">
                            <a href="" class="author d-flex align-items-center text-decoration-none text-secondary">
                                <img src="https://source.unsplash.com/30x30?profile" class="rounded-circle img-fluid">
                                <span class="ms-2 fw-bold">{{ $news->user->name }}</span>
                            </a>

                            <a href="{{ route('news.show', $news->slug ) }}" class="news-desc text-decoration-none" style="color: inherit">
                                <h4 class="poppins fw-bold mt-2">{{ $news->title }}</h4>
                                <p class="m-0 p-0">{{ $news->description }}</p>
                                <small class="text-secondary">{{ $news->created_at->locale('id')->diffForHumans() }} - {{ date('j F Y H:i', strtotime($news->created_at)); }}</small>
                            </a>
                        </div>
                        <a href="" class="news-image col-md-4 ms-2">
                            <img src="https://source.unsplash.com/300x200?{{ $loop->iteration }}" class="img-fluid">
                        </a>
                    </div>

                    <hr>
                @endforeach
                <a href="{{ route('news.index') }}" class="btn btn-warning rounded-pill">Lihat semua berita</a>
            </div>

            <div class="categories col-4 sticky-top text-center ps-3">
                <h5>Temukan lebih banyak hal yang penting bagi Anda</h5>
                @foreach (range(1, 11) as $item)
                    @if ($loop->iteration % 2 == 0)
                        <a type="button" class="btn btn-outline-warning mt-3">Programming</a>
                    @else
                        <a type="button" class="btn btn-outline-warning mt-3">Web</a>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection

@push('footer')
    @include('partials.footer')
@endpush
