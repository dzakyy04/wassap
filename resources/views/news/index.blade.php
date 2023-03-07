@extends('layouts.main');

@push('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8">
                <h2 class="text-center" id="news-list">Daftar Berita</h2>
                @foreach (range(1, 10) as $item)
                    <div class="news d-flex align-items-center mt-4">
                        <div class="news-content col-md-8">
                            <a href="" class="author d-flex align-items-center text-decoration-none text-secondary">
                                <img src="https://source.unsplash.com/30x30?profile" class="rounded-circle img-fluid">
                                <span class="ms-2 fw-bold">Dewa Sheva Dzaky</span>
                            </a>

                            <a href="{{ route('news.show', 'lorem-ipsum') }}" class="news-desc text-decoration-none" style="color: inherit">
                                <h4 class="poppins fw-bold mt-2">Apa itu remastering Linux?</h4>
                                <p class="m-0 p-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis vero
                                    nisi tempora
                                    ullam beatae corporis iusto animi optio tempore deserunt.</p>
                                <small class="text-secondary">3 Maret ~ 24 Menit yang lalu ~ Personal</small>
                            </a>
                        </div>
                        <a href="" class="news-image col-md-4 ms-2">
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
