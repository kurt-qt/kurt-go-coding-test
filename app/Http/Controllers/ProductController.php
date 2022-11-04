<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // public function create()
    // {
    //     return view('create');
    // }
    // public function edit(Request $request, $id)
    // {
    //     $product = Product::find($id)->first();
    //     return view('edit', ['product'=>$product]);
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::paginate(50);
        // return view('index', ['products' => Product::paginate(50)]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attr = $request->validate([
            'name' => [
                'required',
                'max:255'
            ],
            'price' => [
                'required',
                'numeric',
                // 'lte:999999.990',
                // 'gte:0',
                'regex:/^\d{1,6}(\.\d{1,2})?$/'
            ],
            'description' => [
                'required'
            ],
        ]);

        return Product::create($attr);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        return Product::find($id);
    }

    public function destroy(Request $request, $id)
    {
        $product = Product::find($id);

        if ($product) {
            return $product->delete();
        }
        return;
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $attr = $request->validate([
            'name' => [
                'required',
                'max:255'
            ],
            'price' => [
                'required',
                'numeric',
                // 'lte:999999.990',
                // 'gte:0',
                'regex:/^\d{1,6}(\.\d{1,2})?$/'
            ],
            'description' => [
                'required'
            ],
        ]);
        $product->update($attr);
        return $product;
    }
}
