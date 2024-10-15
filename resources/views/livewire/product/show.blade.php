<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6 text-center">Product Details</h1>
    <div class="overflow-x-auto">
        <p>Name: {{ $product->name }}</p>
        <p>Price: {{ $product->price }}</p>
        <p>Description: {{ $product->description }}</p>
        <p>Category: {{ $product->category->name }}</p>
        <p>Tags: {{ $product->tags->pluck('name')->implode(', ') }}</p>
        <p>Created at: {{ $product->created_at }}</p>
        <p>Updated at: {{ $product->updated_at }}</p>

        <a href="{{ route('products.edit', $product->id) }}" class="w-20 sm:w-28 btn btn-primary">Edit</a>
        <a href="{{ route('products.index') }}" class="w-20 sm:w-28 btn btn-primary">Back</a>
    </div>
</div>
