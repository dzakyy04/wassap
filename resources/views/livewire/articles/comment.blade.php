@push('js')
    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Setelah dihapus, komentar tidak bisa dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#033587',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    deleteComment(id);
                    Swal.fire(
                        'Berhasil',
                        'Komentar berhasil dihapus',
                        'success'
                    )
                }
            })
        }

        function deleteComment(id) {
            Livewire.emit('deleteComment', id);
        }
    </script>
@endpush

<div>
    <h4><i class="bi bi-chat-dots"></i> Komentar ({{ $total_comments }})</h4>
    @auth
        <form wire:submit.prevent="store" class="mb-4">
            <textarea wire:model.defer="body" class="form-control @error('body')
                is-invalid
            @enderror"
                placeholder="Tulis Komentarmu..."></textarea>
            @error('body')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <div class="d-grid mt-3">
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </form>
    @else
        <div class="alert alert-warning" role="alert">
            Silahkan masuk terlebih dahulu untuk memberikan komentar! <strong style="color: inherit"><a
                    href="{{ route('login') }}">Masuk disini</a></strong>
        </div>
    @endauth

    <div class="comment">
        @foreach ($comments as $comment)
            {{-- Comment --}}
            <div class="d-flex" id="comment-{{ $comment->id }}">
                <img src="{{ $comment->user->profile_picture }}" class="rounded-circle photo-user">
                <div class="data-comment ms-3 w-100">
                    <div>
                        <span class="fw-bold">{{ $comment->user->name }}</span>
                        <span class="text-secondary fs-md">{{ date('d M Y - H:i', strtotime($comment->created_at)) }}
                            WIB</span>
                    </div>
                    <div class="mt-1 text-dark">
                        {{ $comment->body }}
                    </div>
                    @auth
                        <div class="mt-1">
                            <span class="comment-menu fs-md" wire:click="selectReply({{ $comment->id }})"><i
                                    class="bi bi-chat-dots"></i> Balas</span>
                            &nbsp;
                            @if ($comment->user->id == Auth::user()->id)
                                <span class="comment-menu fs-md" wire:click="selectEdit({{ $comment->id }})"><i
                                        class="bi bi-pencil-square"></i> Edit</span>
                                &nbsp;
                                <span class="comment-menu fs-md" onclick="confirmDelete({{ $comment->id }})"><i
                                        class="bi bi-trash3"></i> Hapus</span>
                            @endif
                        </div>
                    @endauth

                    @if (isset($comment_id) && $comment_id == $comment->id)
                        <form wire:submit.prevent="reply" class="mt-3">
                            <textarea wire:model.defer="body2" class="form-control @error('body2') is-invalid @enderror"
                                placeholder="Tulis Komentarmu..."></textarea>
                            @error('body2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="d-grid mt-3">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </form>
                    @endif

                    @if (isset($edit_comment_id) && $edit_comment_id == $comment->id)
                        <form wire:submit.prevent="change" class="mt-3">
                            <textarea wire:model.defer="body2" class="form-control @error('body2') is-invalid @enderror"
                                placeholder="Tulis Komentarmu..."></textarea>
                            @error('body2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="d-grid mt-3">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </form>
                    @endif
                </div>
            </div>

            {{-- Reply --}}
            @if ($comment->childrens)
                @foreach ($comment->childrens as $reply)
                    <div class="ms-5">
                        <hr>
                        <div class="d-flex mt-3" id="comment-{{ $reply->id }}">
                            <img src="{{ $reply->user->profile_picture }}" class="rounded-circle photo-user">
                            <div class="data-comment ms-3 w-100">
                                <div>
                                    <span class="fw-bold">{{ $reply->user->name }}</span>
                                    <span
                                        class="text-secondary fs-md">{{ date('d M Y - H:i', strtotime($reply->created_at)) }}
                                        WIB</span>
                                </div>
                                <div class="mt-1 text-dark">
                                    {{ $reply->body }}
                                </div>
                                @auth
                                    <div class="mt-1">
                                        <span class="comment-menu fs-md" wire:click="selectReply({{ $reply->id }})"><i
                                                class="bi bi-chat-dots"></i> Balas</span>
                                        &nbsp;
                                        @if ($reply->user->id == Auth::user()->id)
                                            <span class="comment-menu fs-md"
                                                wire:click="selectEdit({{ $reply->id }})"><i
                                                    class="bi bi-pencil-square"></i> Edit</span>
                                            &nbsp;
                                            <span class="comment-menu fs-md"
                                                onclick="confirmDelete({{ $reply->id }})"><i class="bi bi-trash3"></i>
                                                Hapus</span>
                                        @endif
                                    </div>
                                @endauth

                                @if (isset($comment_id) && $comment_id == $reply->id)
                                    <form wire:submit.prevent="reply" class="mt-3">
                                        <textarea wire:model.defer="body2" class="form-control @error('body2') is-invalid @enderror"
                                            placeholder="Tulis Komentarmu..."></textarea>
                                        @error('body2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <div class="d-grid mt-3">
                                            <button type="submit" class="btn btn-primary">Kirim</button>
                                        </div>
                                    </form>
                                @endif

                                @if (isset($edit_comment_id) && $edit_comment_id == $reply->id)
                                    <form wire:submit.prevent="change" class="mt-3">
                                        <textarea wire:model.defer="body2" class="form-control @error('body2') is-invalid @enderror"
                                            placeholder="Tulis Komentarmu..."></textarea>
                                        @error('body2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <div class="d-grid mt-3">
                                            <button type="submit" class="btn btn-primary">Edit</button>
                                        </div>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
            <hr>
        @endforeach
    </div>
</div>
