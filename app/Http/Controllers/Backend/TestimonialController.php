<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Testimony;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index(){
        
        $testimonials = Testimony::latest()->get();
        return view('testimonials', compact('testimonials'));
    }

    // All Team Method
    public function create(Request $request){
        $request->validate([
            'name' => 'required|string',
            'location' => 'nullable|string',
            'designation' => 'required|string',
            'testimony' => 'required|string',
            // 'image' => 'nullable|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        
        // if($request->file('image')){
        //     $file = $request->file('image');
        //     $filename = date('YmdHi').$file->getClientOriginalName();
        //     $file->move(public_path('uploads/testimonials'), $filename);
        // }

        $testimonial = new Testimony;

        $testimonial->name = $request->name;
        $testimonial->location = $request->location;
        $testimonial->designation = $request->designation;
        $testimonial->testimony = $request->testimony;
        $testimonial->save();

       

        $notification = [
            'message' => 'Testimoney Added Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('testimony')->with($notification);
    }

    //  Beginning of Service Update
    public function update(Request $request,$id){
        // return $request;
       $testimonial = Testimony::findOrFail($id);
   
        $testimonial->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'location' => $request->location,
            'testimony' => $request->testimony,
        ]);
        
        // if($request->file('image')){
        //     $file = $request->file('image');
        //     @unlink(public_path('uploads/testimonials/'.$testimonial->image));
        //     $filename = $file->getClientOriginalName();
        //     $file->move(public_path('uploads/testimonials'), $filename);
        //     $testimonial->image = $filename;
        //     $testimonial->image_url = asset('/uploads/testimonials/'.$filename);
            
        // }

        //    return $updateteam;

        $testimonial->save();

        $notification = [
            'message' => 'Project Updated Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('testimony')->with($notification);
    }
 //  End of Service Update

 
     //Partial Delete Team
     public  function deleteTeam($id){
    
        $deleteTestimony = Testimony::findOrFail($id);
        // return $deleteTeam;
        $deleteTestimony->delete();

        $notification = [
            'message' => 'Testimonial deleted  Successfully!',
            'alert-type' => 'success'
        ];

        return back()->with($notification);
    }

}
