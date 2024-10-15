<div class="container mx-auto text-black py-8">
    <h1 class="text-2xl font-bold mb-6 text-center">
        Add Category Form
    </h1>

    <form method="POST" action="" class="max-w-lg mx-auto p-8 shadow-md rounded-lg">
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Category Name</label>
            <input type="text" name="name" id="name" value="" wire:model="name"
                   class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('name') border-red-500 @enderror">
            @error('name')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-6">
            <button type="submit" wire:click.prevent="submit()"
                    class="w-full bg-indigo-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                Add Category
            </button>
        </div>
    </form>
</div>

