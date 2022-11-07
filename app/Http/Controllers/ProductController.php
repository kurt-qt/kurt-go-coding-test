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
        $response = [
            "data" => $this->productService->index()
        ];
        return response($response);
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

        $response = [
            "data" => $this->productService->store($data)
        ];
        return response($response);
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
        $response = [
            "data" => $this->productService->destroy($id)
        ];
        return response($response);
    }

    public function update(Request $request, $id)
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

        $response = [
            "data" => $this->productService->update($id, $data)
        ];
        return response($response);
    }
}
