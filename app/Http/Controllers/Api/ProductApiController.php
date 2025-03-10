<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{

    public function index()
    {
        return Product::with('stocks')->get();
    }

    public function store(Request $request)
    {
        //
    }

    public function show( string $id)
    {
        return Product::with('stocks')->find($id);
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json(['message'=> 'Successfully delted product'],200);
    }
}
