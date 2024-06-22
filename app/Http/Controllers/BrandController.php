<?php

namespace App\Http\Controllers;

use App\Models\brand;
use Illuminate\Http\Request;
use Storage;

class brandController extends Controller
{

    public function index()
    {
        $brand = brand::latest()->paginate(5);
        return view('brand.index', compact('brand'));
    }

    public function create()
    {
        return view('brand.create');
    }

    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'nama_brand' => 'required|min:5',
        ]);

        $brand = new brand();
        $brand->nama_brand = $request->nama_brand;
        // upload image
        $brand->save();
        return redirect()->route('brand.index');
    }

    public function show($id)
    {
        $brand = brand::findOrFail($id);
        return view('brand.show', compact('brand'));
    }

    public function edit($id)
    {
        $brand = brand::findOrFail($id);
        return view('brand.edit', compact('brand'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_brand' => 'required|min:5',
        ]);

        $brand = brand::findOrFail($id);
        $brand->nama_brand = $request->nama_brand;
        // upload image
        //delete old image

        $brand->save();
        return redirect()->route('brand.index');
    }

    public function destroy($id)
    {
        $brand = brand::findOrFail($id);
        $brand->delete();
        return redirect()->route('brand.index');
    }
}
