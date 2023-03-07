@extends('layouts.main')

@push('css')
    @livewireStyles
@endpush

@push('js')
    @livewireScripts
@endpush

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 mt-5">
                <h1>{{ $news->title }}</h1>
                <small class="text-secondary">{{ $news->created_at->locale('id')->diffForHumans() }}</small>

                <p class="text-secondary">{{ $news->description }}</p>
                <img src="https://source.unsplash.com/500x300?news" class="img-fluid my-3">

                <p>{{ $news->body }}</p>

                <div>
                    @livewire('news.comment', ['id' => $news->id])
                </div>
            </div>
            <div class="col-md-4 mt-5 sticky-top ps-5" style="height: 50vh; top: 80px;">
                <img src="https://source.unsplash.com/70x70?user" class="rounded-circle">
                <h3 class="poppins mt-2 fw-bold">{{ $news->user->name }}</h3>
                <small class="text-secondary">{{ $news->user->username }}</small>
                <p>{{ $news->user->bio }}</p>
            </div>
        </div>
    </div>
@endsection

@push('footer')
    @include('partials.footer')
@endpush
