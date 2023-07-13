<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index(){
      // dd(request());
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    }

    public function show(Listing $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    public function create(){
        return view('listings.create');
    }

    //store listing data  'unique:posts'
    public function store(Request $request){
        // dd($request->file('logo'));
       $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', 'unique:listings'],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'logo' => 'nullable',
            'description' => 'required'
       ]);
            if($request->hasFile('logo')) {
                $formFields['logo'] = $request->file('logo')->store('logos', 'public');
            } 
            // dd(Listing::create($formFields));
        Listing::create($formFields);
        return redirect ('/')->with('message', 'Job listing created successfully');
    }

    //show edit form
    public function edit(Listing $listing) {
    //    dd($listing);
        return view('listings.edit', ['listing'=>$listing]);
    }
         //Update Listing
    public function update(Request $request, Listing $listing){
        // dd($request->file('logo'));
       $formFields = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'logo' => 'nullable',
            'description' => 'required'
       ]);
            if($request->hasFile('logo')) {
                $formFields['logo'] = $request->file('logo')->store('logos', 'public');
            } 
           
        $listing->update($formFields);
        return back()->with('message', 'Job listing updated successfully!');
    }
    

    

}


