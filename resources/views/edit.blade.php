
<a href="/">Back to all</a>
<h1>Edit {{$product->name}}</h1>

<form method="POST" action="/api/products/{{$product->id}}">
    @csrf
    @method('PUT')
    <div class="mb-6">
        <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="name">
            Name
        </label>
        <input class="w-full p-2 border border-gray-400 rounded" type="text" id="name" name="name" value="{{$product->name}}"
            required/>

        @error('name')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="price">
            Price
        </label>
        <input class="w-full p-2 border border-gray-400 rounded" type="number" step="0.01" id="price" name="price"
            value="{{$product->price}}" required>

        @error('price')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="description">
            Description
        </label>
        <textarea class="w-full p-2 border border-gray-400" id="description" name="description" required
        >{{$product->description}}</textarea>

        @error('description')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>

    <button type="submit" class="bg-blue-500 text-white uppercase font-semibold text-xsx py-2 px-10 rounded-2xl hover:bg-blue600">Edit product</button>
</form>
