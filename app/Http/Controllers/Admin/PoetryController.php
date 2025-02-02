<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Poetry;
use Illuminate\Http\Request;

class PoetryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $poetrys = Poetry::all();
        return view('admin.poetry.index',compact('poetrys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.poetry.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string|max:5000',
        ]);

        $poetry = new Poetry();
        $poetry->description = $request->description;

        $poetry->save();

        return redirect('admin.poetrys.index')->with('success','Poetry created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $poetry = Poetry::findOrFail($id);
        $isEdit = false;
        return view('admin.poetry.edit', compact('poetry', 'isEdit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $poetry = Poetry::findOrFail($id);
        $isEdit = true;
        return view('admin.poetry.edit', compact('poetry', 'isEdit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'description' => 'required|string|max:5000',
        ]);

        $poetry = Poetry::findOrFail($id);
        $poetry->description = $request->description;

        $poetry->save();

        return redirect('admin.poetrys.index')->with('success','Poetry created successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $poetry = Poetry::findOrFail($id);
        $poetry->delete();
        return redirect('admin.poetrys.index')->with('success','Poetry deleted successfully');
    }
}
