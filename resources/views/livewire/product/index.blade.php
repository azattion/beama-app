<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6 text-center">Products</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Add product</a>
    <div class="overflow-x-auto">
        <table class="table-auto border-collapse border border-slate-500 min-w-full shadow-md rounded-lg">
            <thead>
            <tr class="bg-gray-100 border-b">
                <th class="text-left p-4 font-medium text-gray-600">ID</th>
                <th class="text-left p-4 font-medium text-gray-600">Name</th>
                <th class="text-left p-4 font-medium text-gray-600">Price</th>
                <th class="text-left p-4 font-medium text-gray-600">Category</th>
                <th class="text-left p-4 font-medium text-gray-600">Created date</th>
                <th class="text-left p-4 font-medium text-gray-600">Updated date</th>
                <th class="text-left p-4 font-medium text-gray-600"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-4">
                        <a href="{{ route('products.show', $product->id) }}">{{ $product->id }}</a>
                    </td>
                    <td class="p-4">
                        <a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a>
                    </td>
                    <td class="p-4">{{ $product->price }} som</td>
                    <td class="p-4">{{ $product->category->name }}</td>
                    <td class="p-4">{{ $product->created_at }}</td>
                    <td class="p-4">{{ $product->updated_at }}</td>
                    <td class="p-4">
                        <a href="{{ route('products.edit', $product->id) }}">
                            edit
                        </a>
                        <a class="w-20 sm:w-28 btn btn-primary" href="#" wire:click="delete({{ $product->id }})"
                           wire:confirm="Are you sure?" wire:loading.attr="disabled">
                            delete
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $products->links() }}
    </div>
</div>
