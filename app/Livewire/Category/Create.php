<?php

namespace App\Livewire\Category;

use App\Models\Category;
use App\Models\Product;
use Illuminate\View\View;
use Livewire\Component;

class Create extends Component
{
    public string $name;

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
        ];
    }

    public function render(): View
    {
        return view('livewire.category.create')
            ->layout('layouts.main')
            ->title('Add Category');
    }

    public function submit(): void
    {
        Category::create($this->validate());

        session()->flash('message', 'Category created successfully.');

        $this->redirect(route('categories.index'));
    }
}
