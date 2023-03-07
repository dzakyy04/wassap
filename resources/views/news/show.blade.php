@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 mt-5">
                <h1>Apa itu remastering linux!</h1>
                <small class="text-secondary">{{ $news->created_at->locale('id')->diffForHumans() }}</small>

                <p class="text-secondary">{{ $news->description }}</p>
                <img src="https://source.unsplash.com/500x300?news" class="img-fluid my-3">

                <p>{{ $news->body }}</p>

                <div>
                    <h3>5 Komentar</h3>
                    @foreach (range(1, 10) as $item)
                        <div class="mb-3">
                            <div class="d-flex align-items-start">
                                <img src="https://source.unsplash.com/40x40?user" class="rounded-circle" alt="user_profile">
                                <div class="ms-2">
                                    <div>
                                        <span>Dewa Sheva Dzaky</span>
                                        <span>12 Jun 2022</span>
                                    </div>
                                    <div class="text-secondary">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, cupiditate!
                                    </div>
                                    <div class="mt-2">
                                        <span class="badge text-bg-primary">Balas</span>
                                        <span class="badge text-bg-warning">Edit</span>
                                        <span class="badge text-bg-danger">Hapus</span>
                                        <span class="badge text-bg-dark">
                                            <i class="bi bi-heart-fill"></i> (2)
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-start ms-4 mt-2">
                                <img src="https://source.unsplash.com/40x40?user" class="rounded-circle" alt="user_profile">
                                <div class="ms-2">
                                    <div>
                                        <span>Dewa Sheva Dzaky</span>
                                        <span>12 Jun 2022</span>
                                    </div>
                                    <div class="text-secondary">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, cupiditate!
                                    </div>
                                    <div class="mt-2">
                                        <span class="badge text-bg-primary">Balas</span>
                                        <span class="badge text-bg-warning">Edit</span>
                                        <span class="badge text-bg-danger">Hapus</span>
                                        <span class="badge text-bg-dark">
                                            <i class="bi bi-heart-fill"></i> (2)
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4 mt-5 sticky-top ps-5" style="height: 50vh; top: 80px;">
                <img src="https://source.unsplash.com/70x70?user" class="rounded-circle">
                <h3 class="poppins mt-2 fw-bold">Dewa Sheva Dzaky</h3>
                <p>Halo semuanya!!!</p>
            </div>
        </div>
    </div>
@endsection

@push('footer')
    @include('partials.footer')
@endpush
