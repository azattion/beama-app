<?php

namespace App\Livewire\Category;

use App\Models\Category;
use App\Models\Product;
use Illuminate\View\View;
use Livewire\Component;

class Edit extends Component
{
    public string $name;

    public Category $category;

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
        ];
    }

    public function mount(Category $category): void
    {
        $this->fill($category->toArray());
        $this->category = $category;
    }

    public function render(): View
    {
        return view('livewire.category.edit')
            ->layout('layouts.main')
            ->title('Edit Category');
    }

    public function submit(): void
    {
        $this->category->update($this->validate());

        session()->flash('message', 'Category updated successfully.');

        $this->redirect(route('categories.index'));
    }
}
