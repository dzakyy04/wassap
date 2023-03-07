<div>
    <h3 class="my-4">5 Komentar</h3>
    @auth
        <form wire:submit.prevent='store' class="my-3">
            <textarea wire:model.defer='body'rows="2" class="form-control @error('body') is-invalid @enderror"
                placeholder="Tulis komentarmu..."></textarea>
            @error('body')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <div class="d-grid">
                <button type="submit" class="btn btn-primary my-2">Kirim</button>
            </div>
        </form>
    @else
        <div class="alert alert-warning" role="alert">
            Silahkan login terbih dahulu untuk berkomentar! <a href="{{ route('login') }}"
                class="text-warning text-decoration-none">Klik disini</a>
        </div>
    @endauth
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
