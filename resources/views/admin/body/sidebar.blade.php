<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
        PL<span>EF</span>
        <img src="{{asset('../backend/images/pristine_logo.png')}}" width="35" alt="">
        </a>
        <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        <li class="nav-item">
            <a href="{{route('admin.dashboard')}}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item nav-category">Settings</li>
        <li class="nav-item">
            <a href="{{route('all.slider')}}" class="nav-link">
            <i class="link-icon" data-feather="message-square"></i>
            <span class="link-title">Sliders</span>
            </a>
        </li>
       
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#services" role="button" aria-expanded="false" aria-controls="services">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">Manage Services</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="services">
            <ul class="nav sub-menu">
                <li class="nav-item">
                <a href="{{route('view.services')}}" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('all.services')}}" class="nav-link">All Service</a>
                    </li>
                <li class="nav-item">
                <a href="{{route('service.category')}}" class="nav-link">Service Category</a>
                </li>
               
            </ul>
            </div>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#project" role="button" aria-expanded="false" aria-controls="project">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">Manage Project</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="project">
            <ul class="nav sub-menu">
                <li class="nav-item">
                <a href="{{route('all.project')}}" class="nav-link">All Project</a>
                </li>
                <li class="nav-item">
                <a href="{{route('project.category')}}" class="nav-link">Project Category</a>
                </li>
               
            </ul>
            </div>
        </li> --}}
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#testimony" role="button" aria-expanded="false" aria-controls="testimony">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">Manage Testimonials</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="testimony">
                <ul class="nav sub-menu">
                    <li class="nav-item">
                    <a href="{{route('testimony')}}" class="nav-link">Testimonials</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#event" role="button" aria-expanded="false" aria-controls="testimony">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">Manage Events</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="event">
                <ul class="nav sub-menu">
                    <li class="nav-item">
                    <a href="{{route('events')}}" class="nav-link">Events</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#blog" role="button" aria-expanded="false" aria-controls="blog">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">Manage Blog</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="blog">
            <ul class="nav sub-menu">
                <li class="nav-item">
                <a href="{{route('allblog')}}" class="nav-link">All Blog</a>
                </li>
                <li class="nav-item">
                <a href="{{route('blog.category')}}" class="nav-link">Blog Category</a>
                </li>
               
            </ul>
            </div>
        </li>
        
         {{-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#team" role="button" aria-expanded="false" aria-controls="team">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">Manage Team</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="team">
            <ul class="nav sub-menu">
                <li class="nav-item">
                <a href="{{route('all.team')}}" class="nav-link">All Team Member</a>
                </li>
                <li class="nav-item">
                <a href="{{route('team.category')}}" class="nav-link">Team Category</a>
                </li>
               
            </ul>
            </div>
        </li> --}}
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#gallery" role="button" aria-expanded="false" aria-controls="gallery">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">Manage Gallery</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="gallery">
            <ul class="nav sub-menu">
                <li class="nav-item">
                <a href="{{route('all.gallery')}}" class="nav-link">All Gallery</a>
                </li>
                <li class="nav-item">
                <a href="{{route('gallery.category')}}" class="nav-link">Gallery Category</a>
                </li>
               
            </ul>
            </div>
        </li>
        <li class="nav-item">
            <a href="{{route('all.contact')}}" class="nav-link">
            <i class="link-icon" data-feather="calendar"></i>
            <span class="link-title">Contact</span>
            </a>
        </li>
       
     
       
        </ul>
    </div>
</nav>