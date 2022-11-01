<x-layout>
    <h1>{{ $product->name }}</h1>
    <p>Price: {{ $product->price }}</p>
    <p>Description: <br/> {{ $product->description }}</p>
    <a href="/">Back to all</a>
</x-layout>
