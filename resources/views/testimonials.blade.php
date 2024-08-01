@extends('admin.admin-dashboard')
@section('pageTitle', 'Testimonials')
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
                New Testimonial
               </button>
        </ol>
    </nav>
<br><br><br><br>
 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Testimonial</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
        </div>
        <div class="modal-body ">
          <form class="forms-sample" action="{{route('add.testimony')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Testifier Name</label>
                <input type="text" class="form-control" name="name" id="name" autocomplete="off" placeholder="e.g Dr. Segun Arinze">
            </div>
              <div class="mb-3">
                  <label for="name" class="form-label">Location</label>
                  <input type="text" class="form-control" name="location" id="location" autocomplete="off" placeholder="Testifier Location e.g Lagos">
              </div>
              <div class="mb-3">
                <label for="title" class="form-label">Designation</label>
                <input type="text" class="form-control" name="designation" id="designation" autocomplete="off" placeholder="e.g MD. Market Square">
            </div>

                {{-- <div class="mb-3">
                  <label for="image" class="form-label">Image</label>
                  <input type="file" class="form-control" name="image" id="image">
                </div>
                <div class="mb-3">
                  <img id="showimage" class="rounded-circle wd-100" src="{{(!empty($item->image)) ? url('uploads/services/'.$item->image) : url('backend/uploads/no-image.jpeg')}}" alt="">
                </div> --}}
                  <div class="mb-3">
                    <label for="description" class="form-label">Testimony</label>
                     <textarea name="testimony" id="editor1"  class="form-control" cols="10" rows="3"></textarea>
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
            <h6 class="card-title">All Testimonials</h6>
            <div class="table-responsive">
                <table id="dataTableExample" class="table">
                <thead>
                    <tr>
                    <th>S/N</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Location</th>
                    <th>Image</th>
                    <th>Action</th>		                       
                    </tr>
                </thead>
                <tbody>
                    
                      @forelse ($testimonials as $item)
                      <tr>
                        <td>{{$loop->index +1}}</td>
                        <td>{{$item->name}} </td>
                        <td>{{$item->designation}} </td>
                        <td>{{$item->location}} </td>
                        <td>{!! Str::limit($item->testimony, 90) !!}</td>
                        {{-- <td><img src="{{ asset('uploads/testimonials/' . $item->image )}}" alt=""/></td> --}}
                          <td>                           
                            <a  type="button" class="btn btn-inverse-warning" data-bs-toggle="modal" data-bs-target="#testimonyModal{{$item->id}}">Edit</a>
                            <a href="{{route('delete.testimony', $item->id)}}" type="button" class="btn btn-inverse-danger" id="delete">Delete</a>
                          </td>                    
                      </tr>

                      <!-- Modal -->
          <div class="modal fade" id="testimonyModal{{$item->id}}" tabindex="-1" aria-labelledby="testimonyModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Edit Testimonial</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                </div>
                <div class="modal-body ">
                  <form class="forms-sample" action="{{route('update.testimony', ['id' => $item->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$item->id}}">
                   
                        <div class="mb-3">
                            <label for="name" class="form-label">Testifier Name</label>
                            <input type="text" class="form-control" name="name" value="{{$item->name}}">
                        </div>

                      <div class="mb-3">
                          <label for="name" class="form-label">Location</label>
                          <input type="text" class="form-control" name="location" value="{{$item->location}}">
                      </div>

                      <div class="mb-3">
                        <label for="name" class="form-label">Designation</label>
                        <input type="text" class="form-control" name="designation" value="{{$item->designation}}">
                    </div>

                        {{-- <div class="mb-3">
                          <label for="image" class="form-label">Image</label>
                          <input type="file" class="form-control" name="image" id="image">
                        </div>

                        <div class="mb-3">
                          <img id="showimage" class="rounded-circle wd-100" src="{{(!empty($item->image)) ? url('uploads/services/'.$item->image) : url('backend/uploads/no-image.jpeg')}}" alt="">
                        </div> --}}


                          <div class="mb-3">
                            <label for="description" class="form-label">Testimony</label>
                            <textarea name="testimony" id="editor1{{$item->id}}"  class="form-control" cols="10" rows="3">{{$item->testimony}}</textarea>
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