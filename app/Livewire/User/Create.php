<?php

namespace App\Livewire\User;

use App\Events\UserCreated;
use App\Models\User;
use Illuminate\View\View;
use Livewire\Component;

class Create extends Component
{
    public string $name;

    public string $email;

    public string $password;

    public string $password_confirmation;


    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ];
    }

    public function render(): View
    {
        return view('livewire.user.create')
            ->layout('layouts.main')
            ->title('Add User');
    }

    public function submit(): void
    {
        $data = $this->validate();
        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);

        broadcast(new UserCreated($user))->toOthers();

        session()->flash('message', 'User created successfully.');
        $this->redirect(route('users.index'));
    }
}
