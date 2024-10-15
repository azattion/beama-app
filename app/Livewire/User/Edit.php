<?php

namespace App\Livewire\User;

use App\Models\User;
use Illuminate\View\View;
use Livewire\Component;

class Edit extends Component
{
    public string $id;
    public string $name;

    public string $email;

    public string $password;

    public string $address;

    public string $phone;

    public string $password_confirmation;

    public User $user;

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$this->id,
            'password' => 'required|string|min:8|confirmed',
        ];
    }

    public function mount(User $user): void
    {
        $this->fill($user->toArray());
        $this->user = $user;
    }

    public function render(): View
    {
        return view('livewire.user.edit')
            ->layout('layouts.main')
            ->title('Edit user');
    }

    public function submit(): void
    {
        $this->user->update($this->validate());

        session()->flash('message', 'User updated successfully.');
        $this->redirect(route('users.index'));
    }
}
