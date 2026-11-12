<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('brands.index', compact('brands'));
    }

    public function show($id)
    {
        $brand = Brand::findOrFail($id);
        return view('brands.show', compact('brand'));
    }
}
