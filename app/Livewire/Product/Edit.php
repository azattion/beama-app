<?php

namespace App\Livewire\Product;

use App\Models\Category;
use App\Models\Product;
use Illuminate\View\View;
use Livewire\Component;

class Edit extends Component
{
    public string $name;

    public string $description;

    public string $category_id;

    public string $price;

    public Product $product;

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric|min:0',
        ];
    }

    public function mount(Product $product): void
    {
        $this->fill($product->toArray());
        $this->product = $product;
    }

    public function render(): View
    {
        return view('livewire.product.edit', [
            'categories' => Category::all(),
        ])
            ->layout('layouts.main')
            ->title('Edit Product');
    }

    public function submit(): void
    {
        $this->product->update($this->validate());

        session()->flash('message', 'Product updated successfully.');

        $this->redirect(route('products.index'));
    }
}
