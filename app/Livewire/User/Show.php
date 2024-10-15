<?php

namespace App\Livewire\User;

use App\Models\User;
use Illuminate\View\View;
use Livewire\Component;

class Show extends Component
{
    public User $user;

    public function mount(User $user): void
    {
        $this->user = $user;
    }

    public function render(): View
    {
        return view('livewire.user.show')
            ->layout('layouts.main')
            ->title('User');
    }
}
