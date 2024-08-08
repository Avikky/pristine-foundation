<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Testimony;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $events = Event::latest()->get();
        return view('events', compact('events'));
    }

    // All Team Method
    public function create(Request $request){
        $request->validate([
            'title' => 'required|string',
            'location' => 'nullable|string',
            'description' => 'required|string',
            'event_status' => 'required|integer',
            'event_date' => 'nullable|date',
            'image' => 'required|file|image|mimes:jpeg,png,jpg,gif,jpeg,webp|max:2048',
        ]);

        
        if($request->file('image')){
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('uploads/events'), $filename);
        }

        $event = new Event;

        $event->title = $request->title;
        $event->location = $request->location;
        $event->description = $request->description;
        $event->event_date = Carbon::parse($request->event_date)->format('Y-m-d');	
        $event->image = $filename;
        $event->image_url = asset('/uploads/events/'.$filename);
        $event->status = $request->event_status;
        $event->save();

       

        $notification = [
            'message' => 'New Event created Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('events')->with($notification);
    }

    //  Beginning of Service Update
    public function update(Request $request,$id){

        $request->validate([
            'title' => 'required|string',
            'location' => 'nullable|string',
            'description' => 'required|string',
            'event_status' => 'required|integer',
            'event_date' => 'nullable|date',
            'image' => 'required|file|image|mimes:jpeg,png,jpg,gif,jpeg,webp|max:2048',
        ]);

       $event = Event::findOrFail($id);
   
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('uploads/events/'.$event->image));
            $filename = $file->getClientOriginalName();
            $file->move(public_path('uploads/events'), $filename);
            $event->image = $filename;
            $event->image_url = asset('/uploads/events/'.$filename);
        }

            
        $event->title = $request->title;
        $event->location = $request->location;
        $event->description = $request->description;
        $event->event_date = Carbon::parse($request->event_date)->format('Y-m-d');	
        $event->image = $filename;
        $event->image_url = asset('/uploads/events/'.$filename);
        $event->status = $request->event_status;
        $event->save();


        $notification = [
            'message' => 'Event Updated Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('events')->with($notification);
    }
 //  End of Service Update

 
     //Partial Delete Team
     public  function deleteEvent($id){
    
        $deleteEvent = Event::findOrFail($id);
        // return $deleteTeam;
        $deleteEvent->delete();

        $notification = [
            'message' => 'Event deleted  Successfully!',
            'alert-type' => 'success'
        ];

        return back()->with($notification);
    }

}
