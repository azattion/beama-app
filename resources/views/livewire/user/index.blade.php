<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6 text-center">User List</h1>
    <div class="overflow-x-auto">
        <table class="table-auto border-collapse border border-slate-500 min-w-full shadow-md rounded-lg">
            <thead>
            <tr class="bg-gray-100 border-b">
                <th class="text-left p-4 font-medium text-gray-600">ID</th>
                <th class="text-left p-4 font-medium text-gray-600">Name</th>
                <th class="text-left p-4 font-medium text-gray-600">Email</th>
                <th class="text-left p-4 font-medium text-gray-600">Created At</th>
                <th class="text-left p-4 font-medium text-gray-600"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-4">{{ $user->id }}</td>
                    <td class="p-4">{{ $user->name }}</td>
                    <td class="p-4">{{ $user->email }}</td>
                    <td class="p-4">{{ $user->created_at->format('Y-m-d') }}</td>
                    <td class="p-4">
                        <a href="{{ route('users.edit', $user->id) }}">
                            edit
                        </a>
                        <a class="w-20 sm:w-28 btn btn-primary" href="#" wire:click.prevent="delete({{ $user->id }})" wire:confirm="Are you sure?" wire:loading.attr="disabled">
                            delete
                        </a>
                        <a href="" wire:click.prevent="send({{ $user->id }})">send</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    </div>
</div>
