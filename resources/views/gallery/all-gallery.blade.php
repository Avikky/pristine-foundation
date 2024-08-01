@extends('admin.admin-dashboard')
@section('pageTitle', 'Gallery')
@section('content')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


<div class="page-content">  
  @if($errors->any())
    <div class="alert alert-danger">
        <p><strong>Opps Something went wrong</strong></p>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
  @endif
    <nav class="page-breadcrumb float-end">
        <ol class="breadcrumb">
            <button type="button" class="btn btn-inverse-info float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                New Image
               </button>
        </ol>
    </nav>
<br><br><br><br>
 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Image</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
        </div>
        <div class="modal-body ">
          <form class="forms-sample" action="{{route('add.gallery')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Gallery Category</label>
                <select name="gallery_cat_id" class="form-control" id="">
                    <option value="">Select Category</option>
                     @foreach($gallerycategory as $item)
                        {
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        }
                    @endforeach
                </select>
            </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Title</label>
                    <input type="text" class="form-control" name="name" id="name" autocomplete="off" placeholder="Title">
                </div>

                <div class="mb-3">
                  <label for="image" class="form-label">Image</label>
                  <input type="file" class="form-control" name="image" id="image">
              </div>
              <div class="mb-3">
                <img id="showimage" class="rounded-circle wd-100" src="{{(!empty($item->image)) ? url('uploads/gallerys/'.$item->image) : url('backend/uploads/no-image.jpeg')}}" alt="">
              </div>
                  <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                     <textarea name="description" id="editor1"  class="form-control" cols="10" rows="3"></textarea>
                  </div>
                  <script>
                    CKEDITOR.replace('editor1');
                    </script>
                <div class="modal-footer">
                  <button type="submit"class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                  </div>
                 
                </form>
        </div>     
      </div>
    </div>
  </div>
      <!-- Modal End -->

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h6 class="card-title">All Gallery</h6>
            <div class="table-responsive">
                <table id="dataTableExample" class="table">
                <thead>
                    <tr>
                    <th>S/N</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>		                       
                    </tr>
                </thead>
                <tbody>
                    
                    @forelse ($all_gallery as $item)
                        <tr>
                          <th>{{$loop->index +1}}</th>
                          <td>{{$item->name}} </td>
                          <td>{!!Str::limit($item->description, 50)!!}</td>
                          <td><img src="{{asset('uploads/gallerys/'.$item->image)}}" alt=""></td>
                            <td>
                              <a  type="button" class="btn btn-inverse-warning" data-bs-toggle="modal" data-bs-target="#galleryModal{{$item->id}}">Edit</a>
                              {{-- <a href="#" type="button" class="btn btn-inverse-danger" id="delete">Delete</a> --}}
                              {{-- <a href="{{route('delete.gallery', $item->id)}}" type="button" class="btn btn-inverse-danger" id="delete">Delete</a> --}}
                            </td>                    
                        </tr>
              
              <!-- Modal -->
                <div class="modal fade" id="galleryModal{{$item->id}}" tabindex="-1" aria-labelledby="galleryModalLabel" aria-hidden="true">
                   <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit gallery {{$item->gallery_cat_id}}</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                      </div>
                    <div class="modal-body ">
                        {{-- <form class="forms-sample" action="#" method="POST" enctype="multipart/form-data"> --}}
                                <form class="forms-sample" action="{{route('update.gallery', ['id' => $item->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$item->id}}">
                          <div class="mb-3">
                              <label for="title" class="form-label">gallery Category</label>
                              <select name="gallery_cat_id" class="form-control" value="{{$item->gallery_cat_id}}">
                                  @foreach($gallerycategory as $galleryCat){
                                  <option value="{{$galleryCat->id}}"{{$item->gallery_cat_id == $galleryCat->id ? 'selected' : ''}}>{{$galleryCat->name}}</option>
                                  }
                                  @endforeach
                              </select>
                          </div>
                          <div class="mb-3">
                              <label for="name" class="form-label">Title</label>
                              <input type="text" class="form-control" name="name" value="{{$item->name}}">
                          </div>
              
                          <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" name="image" id="image">
                        </div>
              
                      <div class="mb-3">
                        <img id="showimage" class="rounded-circle wd-100" src="{{(!empty($item->image)) ? url('uploads/gallerys/'.$item->image) : url('backend/uploads/no-image.jpeg')}}" alt="">
                      </div>
                          <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="editor1{{$item->id}}"  class="form-control" cols="10" rows="3">{{$item->description}}</textarea>
                          </div>
                          <script>
                            CKEDITOR.replace('editor1{{$item->id}}');
                            </script>
                          <div class="modal-footer">
                            <button type="submit"class="btn btn-primary">Save changes</button>
                              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                          </div>
                        
                        </form>
                    </div>     
                    </div>
              </div>
              </div>
              <!-- Modal End -->
                @empty
                    
                @endforelse
              </tbody>
                
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
      $('#image').change(function(e){
          var reader = new FileReader();
          reader.onload = function(e){
              $('#showimage').attr('src', e.target.result);
          }
          reader.readAsDataURL(e.target.files['0']);
      });
  });

</script>


@endsection