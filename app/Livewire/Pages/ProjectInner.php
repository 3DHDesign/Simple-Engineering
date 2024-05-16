<?php

namespace App\Livewire\Pages;

use App\Models\Project;
use App\Models\Service;
use Livewire\Component;

class ProjectInner extends Component
{
    public $project;

    public function mount($id)
    {
        $this->project = Project::find($id);
    }

    public function render()
    {
        return view('livewire.pages.project-inner', [
            'project' => $this->project,
            'services' => Service::all(),
        ]);
    }
}
