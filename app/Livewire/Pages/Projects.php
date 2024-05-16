<?php

namespace App\Livewire\Pages;

use App\Models\Project;
use Livewire\Component;

class Projects extends Component
{
    public function render()
    {
        return view('livewire.pages.projects', [
            'projects' => Project::all(),
        ]);
    }
}
