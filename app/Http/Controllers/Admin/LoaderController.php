<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Loader;
use Illuminate\Http\Request;

class LoaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loaders = Loader::all();
        return view('admin.loader.index', compact('loaders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.loader.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image_link' => 'required|string|max:5000',
            'name' => 'required|string|max:255',
            'html' => 'required|string|max:5000',
            'css' => 'required|string|max:5000',
            'js' => 'nullable|string|max:5000',
        ]);

        $loader = new Loader();
        $loader->image_link = $request->input('image_link');
        $loader->name = $request->input('name');
        $loader->html = $request->input('html');
        $loader->css = $request->input('css');
        $loader->js = $request->input('js');

        $loader->save();

        return redirect()->route('admin.loaders.index')->with('sucess', 'Loader Uploaded Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $loader = Loader::findOrFail($id);
        $isEdit = false;
        return view('admin.loader.edit', compact('loader', 'isEdit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'image_link' => 'required|string|max:255',
    //         'name' => 'required|string|max:255',
    //         'html' => 'required|string|max:255',
    //         'css' => 'required|string|max:255',
    //         'js' => 'required|string|max:255',
    //     ]);

    //     $loader = Loader::findOrFail($id);
    //     $loader->image_link = $request->image_link;
    //     $loader->name = $request->name;
    //     $loader->html = $request->html;
    //     $loader->css = $request->css;
    //     $loader->js = $request->js;

    //     $loader->save();

    //     return redirect()->route('admin.loaders.index')->with('sucess', 'Loader Updated Successfully!');
    // }

    // Controller method to handle updating the loader
    public function update(Request $request, $id)
    {
        $request->validate([
            'image_link' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'html' => 'required|string|max:255',
            'css' => 'required|string|max:255',
            'js' => 'required|string|max:255',
        ]);

        $loader = Loader::findOrFail($id);
        $loader->image_link = $request->image_link;
        $loader->name = $request->name;
        $loader->html = $request->html;
        $loader->css = $request->css;
        $loader->js = $request->js;

        $loader->save();

        return redirect()->route('admin.loaders.index')->with('success', 'Loader Updated Successfully!');
    }


    public function edit($id)
    {
        $loader = Loader::findOrFail($id);
        return view('admin.loaders.edit', compact('loader'));  // Pass loader to the edit view
    }

    public function destroy($id)
    {
        $loader = Loader::findOrFail($id);
        $loader->delete();

        return redirect()->route('admin.loaders.index')->with('success', 'Loader Deleted Successfully!');
    }
}
