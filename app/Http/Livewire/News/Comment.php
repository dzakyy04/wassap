<?php

namespace App\Http\Livewire\News;

use App\Models\Comment as ModelsComment;
use App\Models\News;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Comment extends Component
{
    public $body, $news;

    public function mount($id)
    {
        $this->news = News::find($id);
    }

    public function render()
    {
        return view('livewire.news.comment');
    }

    public function store()
    {
        $this->validate([
            'body' => 'required',
        ], [
            'body.required' => 'Komentar tidak boleh kosong',
        ]);

        $comment = ModelsComment::create([
            'user_id' => Auth::user()->id,
            'news_id' => $this->news->id,
            'body' => $this->body,
        ]);

        if ($comment) {
            session()->flash('success', 'Komentar berhasil dibuat');
            redirect()->route('news.show', $this->news->slug);
        } else {
            session()->flash('danger', 'Komentar gagal dibuat');
            redirect()->route('news.show', $this->news->slug);

        }
    }
}
