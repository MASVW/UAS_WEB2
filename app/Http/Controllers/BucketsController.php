<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bucket as ModelsBucket;

class BucketsController extends Controller
{
    public function __construct(public string $id)
    {
        
    }
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        return ModelsBucket::where('users_id', $id)->with('prices.positions', 'events')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
