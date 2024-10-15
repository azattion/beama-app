<div class="container">
    <h1 class="text-2xl font-bold mb-4">Product Tags</h1>

    <h2 class="text-xl font-bold mb-4">Select tags</h2>
    <form action="" method="post">
        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Tags:</label>
            <select type="text" name="name" id="name"
                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                   required>
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
            @error('tags')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <button wire:click.prevent="submit()" type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add Tag
        </button>
    </form>
</div>
