@props(['product'])

<div class="flex justify-center">
    <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
        <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">
            <a href="products/{{ $product->id }}">{{ $product->name }}</a>
        </h5>
        <p class="text-gray-700 text-base mb-4">
            {{ $product->description }}
        </p>
        <a href="/products/{{ $product->id }}/edit">Edit</a>
        <form method="POST" action="/api/products/{{ $product->id }}">
            @csrf
            @method('DELETE')
            <button>Delete</button>
        </form>
    </div>
</div>
