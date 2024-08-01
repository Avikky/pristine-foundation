<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GalleryCategory;
use App\Models\Gallery;
use illuminate\Support\Str;
use illuminate\Support\Facades\Auth;



class GalleryController extends Controller
{
    public function index(){
        $all_gallery = Gallery::with('gallery_category')->where('deleted_at', 0)->get();
        $gallerycategory = GalleryCategory::all();
        return view('gallery.all-gallery', compact('all_gallery', 'gallerycategory'));
    }

    public function addGallery(Request $request){
      
        $request->validate([
            'gallery_cat_id' => 'required|integer',
            'name' => 'required|string',
            'description' => 'required|string',
            'name' => 'required|string',
        ]);

        // return $request;
        
        if($request->file('image')){
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('uploads/gallerys'), $filename);
        }
        // return $request;

        $slug = Str::slug($request->name, '-');
        $author_id = Auth::user()->id;

        Gallery::insert([
            'gallery_cat_id' => $request->gallery_cat_id,
            'author_id' => $author_id,
            'name' => $request->name,
            'slug' => $slug,
            'description' => $request->description,
            'image' => $filename
        ]);

        $notification = [
            'message' => 'Gallery Post Added Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.gallery')->with($notification);
    }

    public function updateGallery(Request $request){
        $galleryId =   $request->id;
        $updateGallery = Gallery::findOrFail($galleryId)->first();
        // return $updateGallery;

        // $gallery_category_Id = $request->category_id;
        $slug = Str::slug($request->name, '-');

        $updateGallery->name = $request->name;
        $updateGallery->gallery_cat_id = $request->gallery_cat_id;
        $updateGallery->description = $request->description;
        $updateGallery->slug = $slug;
        
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('uploads/gallerys/'.$updateGallery->image));
            $filename = $file->getClientOriginalName();
            $file->move(public_path('uploads/gallerys'), $filename);
            $updateGallery['image'] = $filename;
    
           }
        //    return $updateGallery;
           $updateGallery->save();

        $notification = [
            'message' => 'Image Gallery Updated Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.gallery')->with($notification);

    }

    public function galleryCategory(){
        $gallerycategory = GalleryCategory::all();
        return view('gallery.gallery-category', compact('gallerycategory'));
    }

    public function addGalleryCat(Request $request){
        $request->validate([
            'cat_name' => 'required|string',
            'description' => 'required|string',
        ]);

        // return $request;
        
        
        $slug = Str::slug($request->cat_name, '-');
        
        GalleryCategory::insert([
            'name' => $request->cat_name,
            'slug' => $slug,
            'description' => $request->description,
        ]);

        $notification = [
            'message' => 'Gallery Category Added Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('gallery.category')->with($notification);
    }
}
