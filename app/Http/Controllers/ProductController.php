<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\ProductService;

use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function __construct(private ProductService $productService) {}

    public function create()
    {
        return view('create');
    }
    public function edit(Request $request, $id)
    {
        $product = Product::find($id)->first();
        return view('edit', ['product'=>$product]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response($this->productService->index());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
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

        return response($this->productService->store($data));
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
