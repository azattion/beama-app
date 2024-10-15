<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6 text-center">User Details</h1>
    <div class="overflow-x-auto">
        <p>ID: {{ $user->id }}</p>
        <p>Name: {{ $user->name }}</p>
        <p>Address: {{ $user->profile->address }}</p>
        <p>Phone: {{ $user->profile->phone }}</p>
    </div>
    <a href="{{ route('users.edit', $user->id) }}" class="w-20 sm:w-28 btn btn-primary">Edit</a>
    <a href="{{ route('users.index') }}" class="w-20 sm:w-28 btn btn-primary">Back</a>
</div>
