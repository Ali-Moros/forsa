<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    public function index()

    {
        // dd(request('tag'));
        // return view('listings.index', [

        //     'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(3)
        // ]);
// dd(request('tag'));
        return view('listings.jobListing', [

            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(4)
        ]);
    }



    // Show single listing
    public function show(Listing $listing)
    {
        return view('JobDescView.JobDescView', [
            'listing' => $listing
        ]);
    }

    //Show Form View
    public function apply()

    {
        
        return view('job-apply.jobApply');
    }
    //Store job data
    public function store(Request $request)
    {
     
        $formFields = $request->validate([
            'title' => 'required',
            'company' => 'nullable|string',
            'location' => 'required',
            'website' => 'nullable|string',
            'email' => 'nullable|email',
            'tags' => 'nullable|string',
            'shift' => 'nullable|string',
            'type' => 'nullable|string',
            'description' => 'required'
        ]);

          if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
          }


          $formFields['user_id'] = auth()->id();

        Listing::create($formFields);

        return redirect('/listings')->with('message', 'تم نشر الوظيفة بنجاح!');
    }
     

    // Show Edit Form
//    public function edit(Listing $listing) {
     
//     return view('listing.edit', ['listing' => $listing]);
//    }

public function destroy(Listing $listing) {

    // Delte Authentication 
  if($listing->user_id != auth()->id()) {
    abort(403, 'ليس لديك تصريح بالتعديل!');
  }

   $listing->delete();
   return redirect('/listings')->with('message', 'تم الحذف');
}


 // Listings Edits 
public function edit() {
   return view('edits.edits', ['listings' => auth()->user()->listings()->get()]);
}


// Profile 
 public function profile() {
    return view('profile.profile');
 }



}
