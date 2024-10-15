<?php

namespace App\Livewire\Product;

use App\Models\Category;
use App\Models\Product;
use Illuminate\View\View;
use Livewire\Component;

class Tags extends Component
{
    public array $tags = [];

    public Product $product;

    public function rules(): array
    {
        return [
            'tags' => 'required|array',
            'tags.*' => 'exists:tags,id',
        ];
    }

    public function mount(Product $product): void
    {
        $this->product = $product;
    }

    public function render(): View
    {
        return view('livewire.product.tags', [
            'tagList' => Tags::all(),
        ])
            ->layout('layouts.main')
            ->title('Add tags');
    }

    public function submit(): void
    {
        $this->product->tags()->sync($this->validate()['tags']);

        session()->flash('message', 'Tags added successfully.');

        $this->redirect(route('products.index'));
    }
}
