@extends('layouts.main');

@push('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8">
                <h2 class="text-center poppins fw-bold" id="news-list">Daftar Berita</h2>
                @foreach ($news as $news)
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
                        <a href="{{ route('news.show', $news->slug ) }}" class="news-image col-md-4 ms-2">
                            <img src="https://source.unsplash.com/300x200?{{ $loop->iteration }}" class="img-fluid">
                        </a>
                    </div>

                    <hr>
                @endforeach
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
