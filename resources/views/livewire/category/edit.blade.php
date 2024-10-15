<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6 text-center">
        Edit Category Form
    </h1>

    <form class="max-w-lg mx-auto p-8 shadow-md rounded-lg text-black">

        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
            <input type="text" name="name" id="name" value="" wire:model="name"
                   class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('name') border-red-500 @enderror">
            @error('name')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-6">
            <button type="submit" wire:click.prevent="submit()"
                    class="w-full bg-white text-black font-bold py-2 px-4 rounded-lg">
                Save
            </button>
        </div>
    </form>
</div>
