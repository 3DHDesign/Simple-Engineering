<?php

namespace App\Livewire\Pages;

use App\Models\Category;
use App\Models\Product;
use App\Models\Projects;
use App\Models\Service;
use Livewire\Component;

class ProductInner extends Component
{
    public $product;

    public function mount($id)
    {
        $this->product = Product::find($id);
    }

    public function render()
    {
        return view('livewire.pages.product-inner', [
            'product' => $this->product,
            'services' => Service::all(),
        ]);
    }
}
