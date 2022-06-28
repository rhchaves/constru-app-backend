<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(Product $product) {
        $this->product = $product;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->product->all();
        return response()->json($products, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->product->rules(), $this->product->feedback());

        $image = $request->file('image');
        $imageUrn = $image->store('images', 'public');

        $product = $this->product->create([
            'name' => $request->name,
            'label' => $request->label,
            'skuId' => $request->skuId,
            'description' => $request->description,
            'category' => $request->category,
            'price' => $request->price,
            'productMark' => $request->productMark,
            'image' => $imageUrn,
        ]);

        return response()->json($product, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = $this->product->find($id);
        if ($product === null) {
            return response()->json(['erro' => 'recurso não encontrado'], 404);
        }
        return response()->json($product, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = $this->product->find($id);

        if ($product === null) {
            return response()->json(['erro' => 'recurso não encontrado'], 404);
        }

        if ($request->method() === 'PATCH') {

            $dynamicRules = array();

            foreach($product->rules() as $input => $rule) {

                if (array_key_exists($input, $request->all())) {
                    $dynamicRules[$input] = $rule;
                }

            }

            $request->validate($dynamicRules, $product->feedback());

        } else {
            $request->validate($product->rules(), $product->feedback());
        }

        $image = $request->file('image');
        $imageUrn = $image->store('images', 'public');

        $product->update([
            'name' => $request->name,
            'label' => $request->label,
            'skuId' => $request->skuId,
            'description' => $request->description,
            'category' => $request->category,
            'price' => $request->price,
            'productMark' => $request->productMark,
            'image' => $imageUrn,
        ]);

        return response()->json($product, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = $this->product->find($id);
        if ($product === null) {
            return response()->json(['erro' => 'recurso não encontrado'], 404);
        }
        $product->delete();
        return response()->json(['msg' => 'Removido com sucesso!!!'], 200);
    }
}
