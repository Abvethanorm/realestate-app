<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Listing;
use Illuminate\Http\Request;


class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.showall');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createlisting');
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    request()->validate([
        'address' => 'required',
        'city' => 'required',
        'zip' => 'required',
        'state' => 'required',
        'bedrooms' => 'required',
        'baths' => 'required',
        'sqft' => 'required'
        
    ]);

    $listing = new Listing();
    $listing->address = $request->address;
    $listing->address2 = $request->address2;
    $listing->city = $request->city;
    $listing->zip = $request->zip;
    $listing->bedrooms = $request->bedrooms;
    $listing->baths = $request->baths;
    $listing->sqft = $request->sqft;
    $listing->state = $request->state;
    $listing->description = $request->description;
    $listing->slug = Helper::slugify("{$request->address}-{$request->state}-{$request->city}");
    $listing->save();
   
    return redirect("/admin/listings/{$listing->slug}/{$listing->id}/edit-listing");
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
    public function edit($slug, $id)
    {
        $listing = Listing::where(
            ['slug' => $slug,
             'id'=> $id
             ])->first();
            
       return view('admin.edit', ['listing'=> $listing]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug , $id)
    {
       request()->validate([
        'address' => 'required',
        'city' => 'required',
        'zip' => 'required',
        'state' => 'required',
        'bedrooms' => 'required',
        'baths' => 'required',
        'sqft' => 'required'
        
    ]);
      $listing = Listing::where(
            ['slug' => $slug,
             'id'=> $id
             ])->first();
  
    $listing->address = $request->address;
    $listing->address2 = $request->address2;
    $listing->city = $request->city;
    $listing->zip = $request->zip;
    $listing->bedrooms = $request->bedrooms;
    $listing->baths = $request->baths;
    $listing->sqft = $request->sqft;
    $listing->state = $request->state;
    $listing->description = $request->description;
    $listing->slug = Helper::slugify("{$request->address}-{$request->state}-{$request->city}");
    $listing->save();
   
    return redirect("/admin/listings/{$listing->slug}/{$listing->id}/edit-listing")->with('success' , 'updating complete');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
 