<?php

namespace App\Livewire\User;

use App\Events\UserCreated;
use App\Models\User;
use Illuminate\View\View;
use Livewire\Component;

class Index extends Component
{
    public function render(): View
    {
        return view('livewire.user.index', [
            'users' => User::with('profile')
                ->orderBy('id', 'desc')
                ->paginate(),
        ])
            ->layout('layouts.main')
            ->title('Users');
    }

    public function delete(User $user): void
    {
        session()->flash('message', 'User deleted successfully.');
        $user->delete();
    }

    public function send(User $user): void
    {
        broadcast(new UserCreated($user));
        session()->flash('message', 'Pushed successfully.');
    }
}
