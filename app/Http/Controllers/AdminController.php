<?php

namespace App\Http\Controllers;

use App\Models\Admin;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(Admin $admin) {
        $this->admin = $admin;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = $this->admin->all();
        return response()->json($admins, 200);
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
     * @param  \App\Http\Requests\StoreAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->admin->rules(), $this->admin->feedback());

        $admin = $this->admin->create($request->all());
        return response()->json($admin, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = $this->admin->find($id);
        if ($admin === null) {
            return response()->json(['erro' => 'recurso não encontrado'], 404);
        }
        return response()->json($admin, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRequest  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $admin = $this->admin->find($id);
        if ($admin === null) {
            return response()->json(['erro' => 'recurso não encontrado'], 404);
        }

        if ($request->method() === 'PATCH') {

            $dynamicRules = array();

            foreach($admin->rules() as $input => $rule) {

                if (array_key_exists($input, $request->all())) {
                    $dynamicRules[$input] = $rule;
                }

            }

            $request->validate($dynamicRules, $admin->feedback());

        } else {
            $request->validate($admin->rules(), $admin->feedback());
        }

        $admin->update($request->all());
        return response()->json($admin, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = $this->admin->find($id);
        if ($admin === null) {
            return response()->json(['erro' => 'recurso não encontrado'], 404);
        }
        $admin->delete();
        return response()->json(['msg' => 'Removido com sucesso!!!'], 200);
    }
}
