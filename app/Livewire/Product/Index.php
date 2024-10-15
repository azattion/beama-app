<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Illuminate\View\View;
use Livewire\Component;

class Index extends Component
{
    public function render(): View
    {
        return view('livewire.product.index', [
            'products' => Product::with('category')
                ->orderBy('id', 'desc')
                ->paginate(),
        ])
            ->layout('layouts.main')
            ->title('Products');
    }

    public function delete(Product $product): void
    {
        $product->delete();
    }
}
