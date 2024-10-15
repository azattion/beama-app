<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6 text-center">Product Details</h1>
    <div class="overflow-x-auto">
        <p>Name: {{ $product->name }}</p>
        <p>Price: {{ $product->price }}</p>
        <p>Description: {{ $product->description }}</p>
    </div>
</div>
