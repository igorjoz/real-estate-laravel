<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia('Listing/Index', [
            'listings' => Listing::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Listing/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'beds' => ['required', 'integer', 'min:0', 'max:10'],
            'baths' => ['required', 'integer'],
            'area' => ['required', 'integer'],
            'city' => ['required', 'string'],
            'code' => ['required', 'string'],
            'street_name' => ['required', 'string'],
            'street_number' => ['required', 'string'],
            'price' => ['required', 'numeric'],
        ]);

        Listing::create($validatedData);

        return redirect()->route('listing.index')
            ->with('success', 'Listing created successfully.')
            ->withInput();
    }

    /**
     * Display the specified resource.
     */
    public function show(Listing $listing)
    {
        return inertia('Listing/Show', [
            'listing' => $listing,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Listing $listing)
    {
        return inertia('Listing/Edit', [
            'listing' => $listing,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Listing $listing)
    {
        $validatedData = $request->validate([
            'beds' => ['required', 'integer', 'min:0', 'max:10'],
            'baths' => ['required', 'integer'],
            'area' => ['required', 'integer'],
            'city' => ['required', 'string'],
            'code' => ['required', 'string'],
            'street_name' => ['required', 'string'],
            'street_number' => ['required', 'string'],
            'price' => ['required', 'numeric'],
        ]);

        $listing->update($validatedData);

        return redirect()->route('listing.index')
            ->with('success', 'Listing updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Listing $listing)
    {
        $listing->delete();

        return redirect()->back()
            ->with('success', 'Listing deleted successfully.');
    }
}