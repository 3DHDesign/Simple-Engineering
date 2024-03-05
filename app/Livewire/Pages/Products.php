<?php

namespace App\Livewire\Pages;

use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    public function render()
    {
        return view('livewire.pages.products', [
            'products' => Product::all(),
        ]);
    }
}
