<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index', ['products' => Product::paginate(50)]);
    }

    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(request()->all());
        $attr = $request->validate([
            'name' => [
                'required',
                'max:255'
            ],
            'price' => [
                'required',
                // 'numeric',
                // 'lte:999999.990',
                // 'gte:0',
                'regex:/^\d{1,6}(\.\d{1,2})?$/'
            ],
            'description' => [
                'required'
            ],
        ]);
        Product::create($attr);
        return redirect('api/products/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $product = Product::find($id)->first();

        // dd($product);
        return view('show', ['product' => $product]);
    }
}
