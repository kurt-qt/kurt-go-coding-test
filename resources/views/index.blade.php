<x-layout>

    <button class="bg-blue-500 text-white uppercase font-semibold text-xsx py-2 px-10 rounded-2xl hover:bg-blue600">
        <a href="/products/create">Create product</a>
    </button>

    <h1 class="text-center text-xl">Product list</h1>

    <div class="lg:grid lg:grid-cols-6">
        @foreach ($products as $product)
            <x-product-card :product="$product"/>
        @endforeach
    </div>

    {{ $products->links() }}

</x-layout>
