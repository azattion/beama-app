<?php

namespace App\Livewire\Product;

use App\Events\ProductCreated;
use App\Models\Category;
use App\Models\Product;
use Illuminate\View\View;
use Livewire\Component;

class Create extends Component
{
    public string $name;

    public string $description;

    public string $category_id;

    public string $price;

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric|min:0',
        ];
    }

    public function render(): View
    {
        return view('livewire.product.create', [
            'categories' => Category::all(),
        ])
            ->layout('layouts.main')
            ->title('Add Product');
    }

    public function submit(): void
    {
        $product = Product::create($this->validate());

        broadcast(new ProductCreated($product))->toOthers();

        session()->flash('message', 'Product created successfully.');
        $this->redirect(route('products.index'));
    }
}
