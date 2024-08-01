<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\DeleteBlog;
use illuminate\Support\Str;
use illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index(){
        $all_blog = Blog::with('blog_category')->where('deleted_at', 0)->get();
        $blogcategory = BlogCategory::all();
        // return $blogcategory;
        return view('blog.allblog', compact('all_blog', 'blogcategory'));
    }


    public function addBlog(Request $request){
        $request->validate([
            'blog_cat_id' => 'required|integer',
            'name' => 'required|string',
            'description' => 'required|string',
            'name' => 'required|string',
        ]);

        // return $request;
        
        if($request->file('image')){
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('uploads/blogs'), $filename);
        }
        // return $request;

        $slug = Str::slug($request->name, '-');
        $author_id = Auth::user()->id;

        Blog::insert([
            'blog_cat_id' => $request->blog_cat_id,
            'author_id' => $author_id,
            'name' => $request->name,
            'slug' => $slug,
            'description' => $request->description,
            'image' => $filename
        ]);

        $notification = [
            'message' => 'Blog Post Added Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('allblog')->with($notification);
    }
    // end of Blog Add

    public function updateBlog(Request $request){
        $request->validate([
            'blog_cat_id' => 'required|integer',
            'name' => 'required|string',
            'description' => 'required|string'
        ]);

        // return $request;

       $blogId = $request->id;
        $updateblog = Blog::findOrFail($blogId);
        // return $updateblog;
        $slug = Str::slug($request->name, '-');

        $updateblog->name = $request->name;
        $updateblog->blog_cat_id = $request->blog_cat_id;
        $updateblog->description = $request->description;
        $updateblog->slug = $slug;
        
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('uploads/blogs/'.$updateblog->image));
            $filename = $file->getClientOriginalName();
            $file->move(public_path('uploads/blogs'), $filename);
            $updateblog['image'] = $filename;
    
           }
        //    return $updateblog;
           $updateblog->save();

        $notification = [
            'message' => 'Blog Post Updated Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('allblog')->with($notification);
    }

    public function deleteBlog(Request $request){
        $BlogPostId = $request->id;
        $deleteBlogPost = Blog::where('id', $BlogPostId)->where('deleted_at', 0)->first();

        $updatedeleteblog = new DeleteBlog;

        $updatedeleteblog->author_id = $deleteBlogPost->author_id;
        $updatedeleteblog->blog_cat_id = $deleteBlogPost->blog_cat_id;
        $updatedeleteblog->name = $deleteBlogPost->name;
        $updatedeleteblog->description = $deleteBlogPost->description;
        $updatedeleteblog->image = $deleteBlogPost->image;
        $updatedeleteblog->slug = $deleteBlogPost->slug;

        // return $updatedeleteblog;
        $updatedeleteblog->save();
        
        $deleteBlogPost->delete();

        
        $notification = [
            'message' => 'Blog Post Deleted Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('allblog')->with($notification);

    }
    


    public function blogCategory(){
        $blogcategory = BlogCategory::all();
        return view('blog.blog-category', compact('blogcategory'));
    }

    public function addBlogCat(Request $request){
        $request->validate([
            'cat_name' => 'required|string',
            'description' => 'required|string',
        ]);
        
        
        $slug = Str::slug($request->cat_name, '-');
        
        BlogCategory::insert([
            'name' => $request->cat_name,
            'slug' => $slug,
            'description' => $request->description,
        ]);

        $notification = [
            'message' => 'Blog Category Added Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('blog.category')->with($notification);
    }

    public function updateBlogCat(Request $request) {
        $blogcategoryId = $request->id;

        // return $blogcategoryId;
        $slug = Str::slug($request->name, '-');
      
        BlogCategory::findOrFail($blogcategoryId)->update([
            'name' =>$request->name,
            'description' =>$request->description,
            'slug' =>$slug,
        ]);
       
         
        $notification = [
            'message' => 'Blog Category updated  Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('blog.category')->with($notification);
    }
}
