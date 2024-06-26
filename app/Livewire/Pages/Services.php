<?php

namespace App\Livewire\Pages;

use App\Models\Service;
use Livewire\Component;

class Services extends Component
{
    public function render()
    {
        return view('livewire.pages.services', [
            'services' => Service::all(),
        ]);
    }
}
