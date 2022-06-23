<?php

namespace App\Http\Controllers;

use App\Models\Seller;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function __construct(Seller $seller) {
        $this->seller = $seller;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sellers = $this->seller->all();
        return $sellers;
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
     * @param  \App\Http\Requests\StoresellerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $seller = $this->seller->create($request->all());
        return $seller;
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $seller = $this->seller->find($id);
        return $seller;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function edit(seller $seller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesellerRequest  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $seller = $this->seller->find($id);
        $seller->update($request->all());
        return $seller;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seller = $this->seller->find($id);
        $seller->delete();
        return ['msg' => 'Removido com sucesso!!!'];
    }
}
