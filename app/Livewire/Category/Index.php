<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Illuminate\View\View;
use Livewire\Component;

class Index extends Component
{
    public function render(): View
    {
        return view('livewire.category.index', [
            'categories' => Category::orderBy('id', 'desc')
                ->paginate(),
        ])
            ->layout('layouts.main')
            ->title('Categories');
    }

    public function delete(Category $category): void
    {
        session()->flash('message', 'Category deleted successfully.');
        $category->delete();
    }
}
