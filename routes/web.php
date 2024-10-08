<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\EventController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\SettingsController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/', [PageController::class, 'index'])->name('home');


Route::controller(PageController::class)->group(function(){
    Route::get('/', 'index')->name('home');
    Route::get('/plef/about-us', 'aboutUs')->name('about.us');
    Route::get('/plef/all-services', 'AllServices')->name('index.services');
    Route::get('/plef/service-details/{slug}', 'serviceDetails')->name('service.details');
    Route::get('/plef/services', 'Services')->name('services');
    Route::get('/plef/projects', 'Projects')->name('projects');
    Route::get('/plef/donation', 'donation')->name('donation');
    Route::get('/plef/gallery', 'Gallery')->name('gallery');
    Route::get('/plef/blog', 'Blog')->name('blog');
    Route::get('/plef/blog-details/{slug}', 'BlogDetails')->name('blog.details');
    Route::get('/plef/contact', 'Contact')->name('contact');
    Route::post('/contact/add-contact', 'addContact')->name('add.contact');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('admin/login', [AdminController::class, 'adminLogin'])->name('admin.login');

// Admin Route
Route::middleware(['auth', 'role:admin'])->group(function(){

    Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('logout', [AdminController::class, 'adminLogout'])->name('admin.logout');
    Route::get('admin/profile', [AdminController::class, 'adminProfile'])->name('admin.profile');
    Route::post('admin/update', [AdminController::class, 'adminProfileUpdate'])->name('admin.profile.store');
    Route::get('admin/password', [AdminController::class, 'adminChangePassword'])->name('admin.change.password');
    Route::post('admin/update-password', [AdminController::class, 'updateChangePassword'])->name('update.password.profile');
});

// Agent Route
Route::middleware(['auth', 'role:agent'])->group(function(){
    Route::get('/agent/dashboard', [AgentController::class, 'agentDashboard'])->name('agent.dashboard');
});


// Admin Backend COntroller Route
Route::middleware(['auth', 'role:admin'])->group(function(){
    // Settings Controller groups
    Route::controller(SettingsController::class)->group(function(){
        Route::post('/admin/add-setting', 'AddSettingAdmin')->name('add.setting');
        Route::post('/admin/update-about', 'updateAbout')->name('update.about');
        Route::post('/admin/update-logo', 'updateLogo')->name('update.logo');
        Route::post('/admin/update-banner', 'updateBanner')->name('update.banner');
    });

     // Services Controller groups
     Route::controller(ServiceController::class)->group(function(){
        Route::get('/services/view-services', 'mainServices')->name('view.services'); 
        Route::post('/services/update-main-services', 'mainServiceUpdate')->name('update.main.services'); 
        Route::get('/services/all-services', 'allServices')->name('all.services');  
        Route::post('/services/add-services', 'addService')->name('add.services');   
        Route::post('/services/update-services', 'updateService')->name('update.services');
        Route::get('/services/delete-services/{id}', 'deleteService')->name('delete.services');
        Route::get('/services/service-category', 'serviceCategory')->name('service.category');   
        Route::post('/services/add-service-category', 'addServiceCategory')->name('add.service.category');    
        Route::post('/services/update-service-category/{id}', 'UpdateServicesCategory')->name('update.service.category');    
        Route::get('/services/delete-service-category/{id}', 'deleteServiceCategory')->name('delete.service.category');    
    });
    
    // Slider Controller groups
     Route::controller(SliderController::class)->group(function(){
        Route::get('/sliders/all-sliders', 'allSlider')->name('all.slider');
        Route::post('/sliders/add-sliders', 'addSlider')->name('add.slider'); 
        Route::post('/sliders/update-sliders', 'UpdateSlider')->name('update.slider');
        Route::get('/sliders/delete-sliders/{id}', 'deleteSlider')->name('delete.slider');
    });

     // Testimonial Controller groups
     Route::controller(TestimonialController::class)->group(function(){
        Route::get('/testimonials', 'index')->name('testimony');
        Route::post('/testimonials', 'create')->name('add.testimony'); 
        Route::post('/testimonials/update/{id}', 'update')->name('update.testimony');
        Route::get('/testimonials/delete/{id}', 'delete')->name('delete.testimony');
    });

    Route::controller(EventController::class)->group(function(){
        Route::get('/events', 'index')->name('events');
        Route::post('/events', 'create')->name('add.events'); 
        Route::post('/events/update/{id}', 'update')->name('update.events');
        Route::get('/events/delete/{id}', 'delete')->name('delete.events');
    });

    
    // Projects Controller groups
     Route::controller(ProjectController::class)->group(function(){ 
        Route::get('/projects/all-project', 'allProject')->name('all.project');
        Route::post('/projects/add-project', 'addProject')->name('add.project');
        Route::post('/projects/update-project', 'updateProject')->name('update.project');
        Route::get('/projects/delete-project/{id}', 'deleteProject')->name('delete.project');
        Route::get('/projects/project-category', 'ProjectCategory')->name('project.category');
        Route::post('/projects/add-project-category', 'addProjectCat')->name('add.project.category'); 
        Route::post('/projects/update-project-category', 'UpdateProjectCategory')->name('update.project.category');
        Route::get('/projects/delete-project-category/{id}', 'deleteProjectCategory')->name('delete.project.category');        
        
      });
    // Slider Controller groups
    Route::controller(TeamController::class)->group(function(){
        Route::get('/team/all-team', 'allTeam')->name('all.team');
        Route::post('/team/add-team', 'addTeam')->name('add.team'); 
        Route::post('/team/update-team', 'updateTeam')->name('update.team'); 
        Route::get('/team/team-category', 'teamCategory')->name('team.category');
        Route::post('/team/add-team-category', 'addTeamCategory')->name('add.team.category'); 
        Route::post('/team/update-team-category', 'UpdateTeamCategory')->name('update.team.category');
        Route::get('/team/delete-team/{id}', 'deleteTeam')->name('delete.team');
    });
    
    // Contact Controller groups
    Route::controller(ContactController::class)->group(function(){
        Route::get('/contact/all-contact', 'allContact')->name('all.contact');
        Route::get('/contact/delete-contact/{id}', 'deleteContact')->name('delete.contact');
       
    });

     // Blog Post Controller groups
     Route::controller(BlogController::class)->group(function(){
        Route::get('/blog/all-blog', 'index')->name('allblog');
        Route::post('/blog/add-blog', 'addBlog')->name('add.blog');   
        Route::post('/blog/update-blog', 'updateBlog')->name('update.blog');
        Route::get('/blog/delete-blog-post/{id}', 'deleteBlog')->name('delete.blog');
        Route::get('/blog/blog-category', 'blogCategory')->name('blog.category');   
        Route::post('/blog/add-blog-category', 'addBlogCat')->name('add.blog.category');    
        Route::post('/services/blog-category/{id}', 'updateBlogCat')->name('update.blog.category');    
        // Route::get('/services/delete-service-category/{id}', 'deleteServiceCategory')->name('delete.service.category');    
    });


    // Gallery Controller groups
    Route::controller(GalleryController::class)->group(function(){
        Route::get('/gallery/all-gallery', 'index')->name('all.gallery');
        Route::post('/gallery/add-gallery', 'addGallery')->name('add.gallery');   
        Route::post('/gallery/update-gallery', 'updateGallery')->name('update.gallery');
        // Route::get('/blog/delete-blog-post/{id}', 'deleteBlog')->name('delete.blog');
        Route::get('/gallery/gallery-category', 'galleryCategory')->name('gallery.category');   
        Route::post('/gallery/add-gallery-category', 'addGalleryCat')->name('add.gallery.category');    
        // Route::post('/services/blog-category/{id}', 'updateBlogCat')->name('update.blog.category');    
        // Route::get('/services/delete-service-category/{id}', 'deleteServiceCategory')->name('delete.service.category');    
    });

});