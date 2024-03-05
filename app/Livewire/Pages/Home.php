<?php

namespace App\Livewire\Pages;

use App\Models\News;
use App\Models\Project;
use App\Models\Projects;
use App\Models\Slider;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.pages.home', [
            'sliders' => Slider::all(),
            'projects' => Project::all(),
            'allnews' => News::all(),
        ]);
    }
}
