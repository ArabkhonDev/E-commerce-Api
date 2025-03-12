<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class FavoriteController extends Controller
{




    public function index()
    {
        return Auth::user()->favorites()->paginate(10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Auth::user()->favorites()->attach($request->product_id);

        return response()->json([
            'succes' => true,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * TODO refactor responce. make standart format
     */
    public function destroy($favorite_id)
    {
        if (Auth::user()->hasFavorite($favorite_id)) {
            Auth::user()->favorites()->detach($favorite_id);
            return response()->json([
                "id"=> $favorite_id,
                "message"=> "success favorite deleted"
            ]);
        }else{
            return response()->json([
                "id"=> $favorite_id,
                "message"=> "Favorites does not exist in this user"
            ]);
        }
    }
}
