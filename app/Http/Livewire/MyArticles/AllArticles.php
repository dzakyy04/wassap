<?php

namespace App\Http\Livewire\MyArticles;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class AllArticles extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['deleteArticle' => 'delete'];

    public $search = '', $entries = 10, $status = 'semua', $confirmDelete;

    public function mount()
    {
        $this->confirmDelete = false;
        if (request()->input('status') == 'disetujui') {
            $this->status = 1;
        } else if (request()->input('status') == 'belum-disetujui') {
            $this->status = 0;
        }
    }

    public function render()
    {
        $articles = Article::with(['user', 'category'])
            ->where('user_id', Auth::user()->id)
            ->when($this->status !== 'semua', function ($query) {
                return $query->where('is_approved', $this->status);
            })
            ->where(function ($query) {
                $query->where('title', 'like', '%' . $this->search . '%')
                    ->orWhere('description', 'like', '%' . $this->search . '%');
            })
            ->paginate($this->entries);

        return view('livewire.my-articles.all-articles', [
            'articles' => $articles,
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatedStatus()
    {
        $this->resetPage();
    }

    public function delete($id)
    {
        $article = Article::find($id);
        Storage::delete($article->thumbnail);

        $article->delete();
    }

    public function updatedConfirmDelete()
    {
        if ($this->confirmDelete) {
            $this->delete($this->articleId);
        }
    }

}
