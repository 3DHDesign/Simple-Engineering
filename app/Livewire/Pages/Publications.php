<?php

namespace App\Livewire\Pages;

use App\Models\Publication;
use Livewire\Component;

class Publications extends Component
{
    public function render()
    {
        return view('livewire.pages.publications', [
            'publications' => Publication::all(),
        ]);
    }
}
