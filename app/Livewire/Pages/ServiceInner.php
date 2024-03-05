<?php

namespace App\Livewire\Pages;

use App\Models\Faq;
use App\Models\Service;
use Livewire\Component;

class ServiceInner extends Component
{
    public $service;
    public $faqs;

    public function mount($id)
    {
        $this->service = Service::find($id);
        $this->faqs = Faq::where('service_id', $id)->get();
    }

    public function render()
    {
        return view('livewire.pages.service-inner', [
            'service' => $this->service,
            'faqs' => $this->faqs,
        ]);
    }
}
