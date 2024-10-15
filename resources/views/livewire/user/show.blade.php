<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6 text-center">User Details</h1>
    <div class="overflow-x-auto">
        <p>Name: {{ $user->name }}</p>
        <p>Address: {{ $user->profile->address }}</p>
        <p>Phone: {{ $user->profile->phone }}</p>
    </div>
</div>
