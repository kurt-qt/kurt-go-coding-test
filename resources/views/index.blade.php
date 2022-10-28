<x-layout>

    @include('store')

    <h1>Product list</h1>
    <ul>
        @foreach ($products as $product)
            <li>
                <a href="products/{{ $product->id }}">{{ $product->name }}</a>
                <p>{{ $product->description }}</p>
            </li>
        @endforeach
    </ul>

</x-layout>
