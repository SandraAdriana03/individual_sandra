<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use App\Http\Requests\StoreAutoRequest;
use App\Http\Requests\UpdateAutoRequest;

class AutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $auto = Auto::all();
        return view('auto.index',[
            'auto' =>$auto
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAutoRequest $request)
    {
        Auto::create($request->all());
        return redirect()->route('auto.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Auto $auto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Auto $auto)
    {
        return view('auto.edit', ['auto'=>$auto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAutoRequest $request, Auto $auto)
    {
        $auto->update($request->all());
        return redirect()->route('auto.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Auto $auto)
    {
        $auto->delete();
        return redirect()->route('auto.index');
    }
}
