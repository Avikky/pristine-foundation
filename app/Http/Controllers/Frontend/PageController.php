<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\Service;
use App\Models\AllServices;
use App\Models\Project;
use App\Models\Contact;
use App\Models\Slider;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\BlogCategory;
use App\Models\Event;
use App\Models\GalleryCategory;
use App\Models\ServiceCategory;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $services = Service::with('ServiceCat')->where('deleted_at', 0)->where('status', '!==1')->get();
        $blogposts = Blog::with('blog_category')->where('deleted_at', 0)->get();
        // $serviceDetail = Service::where('slug', $slug)->first();
        $settings = Setting::where('id', 1)->first();
        $sliders = Slider::where('deleted_at', 0)->get();
        $testimonials = Testimonial::inRandomOrder()->limit(6)->get();
    
        $events = Event::inRandomOrder()->limit(3)->get();
        // return $sliders;
        // return view('frontend.index', compact('sliders', 'settings', 'services', 'projects'));
        return view('frontend.index', compact('sliders', 'settings', 'services', 'blogposts', 'testimonials', 'events'));
    }

    public function aboutUs(){
        $settings = Setting::where('id', 1)->first();
        $blogposts = Blog::with('blog_category')->where('deleted_at', 0)->get();
        // return $settings;
        return view('frontend.about-us', compact('settings', 'blogposts'));
    }
    
    public function AllServices(){
        $settings = Setting::where('id', 1)->first();
        $allservices = AllServices::where('deleted_at', 0)->first();
        $blogposts = Blog::with('blog_category')->where('deleted_at', 0)->get();
        $services = Service::with('ServiceCat')->where('deleted_at', 0)->get();
        // return $services;
        return view('frontend.services', compact('settings', 'allservices', 'services', 'blogposts'));
    } 
    public function Services(){
        $settings = Setting::where('id', 1)->first();
        $blogposts = Blog::with('blog_category')->where('deleted_at', 0)->get();
        $services = Service::with('ServiceCat')->where('deleted_at', 0)->get();
        // return $services;
        return view('frontend.services', compact('settings', 'services', 'blogposts'));
    } 

    public function serviceDetails($slug){
        $serviceDetail = Service::where('slug', $slug)->first();
        // return $serviceDetail;
        $settings = Setting::where('id', 1)->first();
        $services = Service::with('ServiceCat')->where('deleted_at', 0)->where('status', '!==1')->get();
        $blogposts = Blog::with('blog_category')->where('deleted_at', 0)->get();
        return view('frontend.service-details', compact('services', 'settings', 'serviceDetail', 'blogposts')); 
    }

    public function qhse(){
        $service_qhse = Service::with('ServiceCat')->where('status', 1)->first();
        // return $service_qhse;
        $settings = Setting::where('id', 1)->first();
        return view('frontend.qhse', compact('service_qhse', 'settings'));
    }
    
    public function Projects(){
        $settings = Setting::where('id', 1)->first();
        $project_overview = Project::where('status',1)->where('deleted_at', 0)->first();
        $projects = Project::where('deleted_at', 0)->where('status', 0)->get();
        // return $projects;
        return view('frontend.projects', compact('settings', 'projects', 'project_overview'));
    } 

    public function Gallery(Request $request){
        if($request->has('category')){
            $gallerys = Gallery::with('gallery_category')->where('gallery_cat_id', $request->category)->where('deleted_at', 0)->get();
        }else{
            $gallerys = Gallery::with('gallery_category')->where('deleted_at', 0)->get();
        }
        
        $galleryCategories = GalleryCategory::inRandomOrder()->latest()->get();
        $blogposts = Blog::with('blog_category')->where('deleted_at', 0)->get();
        $settings = Setting::where('id', 1)->first();
        return view('frontend.gallery', compact('settings', 'gallerys', 'blogposts', 'galleryCategories'));
    }

    public function Blog(){
        $blogposts = Blog::with('blog_category')->where('deleted_at', 0)->get();        
        // return $blogposts;
        $settings = Setting::where('id', 1)->first();
        return view('frontend.blog', compact('settings', 'blogposts'));
    }

    public function BlogDetails($slug){
        $blogDetail = Blog::where('slug', $slug)->first();
        $serviceCategorys = ServiceCategory::all();
        $blogposts = Blog::with('blog_category')->where('deleted_at', 0)->get();
        // return $serviceCategorys;
        $settings = Setting::where('id', 1)->first();
        return view('frontend.blog-details', compact('settings', 'blogDetail', 'serviceCategorys', 'blogposts'));
    }
    
    public function Contact(){
        $settings = Setting::where('id', 1)->first();
        $blogposts = Blog::with('blog_category')->where('deleted_at', 0)->get();
        return view('frontend.contact', compact('settings', 'blogposts'));
    }

    public function addContact(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);


        // return $request;
        
        
        $addContact = new Contact;
        
        $addContact->name = $request->name;
        $addContact->email = $request->email;
        $addContact->phone = $request->phone;
        $addContact->subject = $request->subject;
        $addContact->message = $request->message;
        
        $addContact->save();

        // session()->flash('success', 'Thank you for reaching out. Our team will get in touch with you soon!');

        $notification = [
            'message' => 'Thank you for reaching out. Our team will get in touch with you soon!',
            'alert-type' => 'success'
        ];

        return redirect()->route('contact')->with($notification);
        // return back();
    }

    // Donation page
    public function donation(){
        $settings = Setting::where('id', 1)->first();

        return view('frontend.donation', compact('settings'));
    }
}
