<?php

namespace App\Livewire\Pages;

use App\Models\News;
use Livewire\Component;

class NewsInner extends Component
{
    public $news;

    public function mount($id)
    {
        $this->news = News::find($id);
    }

    public function render()
    {
        return view('livewire.pages.news-inner');
    }
}
