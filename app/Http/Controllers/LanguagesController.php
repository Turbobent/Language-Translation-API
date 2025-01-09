<?php

namespace App\Http\Controllers;

use App\Models\Languages;
use App\Http\Requests\StoreLanguagesRequest;
use App\Http\Requests\UpdateLanguagesRequest;

class LanguagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

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
    public function store(StoreLanguagesRequest $request)
    {
        $validated = $request->validated();

        $language = Language::create([
            'name' => $validated['name'],
            'code' => $validated['code'],
        ]);

        return response()->json([
            'message' => 'Language created successfully!',
            'language' => $language,
        ], 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(Languages $languages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Languages $languages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLanguagesRequest $request, Languages $languages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Languages $languages)
    {
        //
    }
}
