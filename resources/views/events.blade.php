@extends('admin.admin-dashboard')
@section('pageTitle', 'Events')
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
                New Event
               </button>
        </ol>
    </nav>
<br><br><br><br>
 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Events</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
        </div>
        <div class="modal-body ">
          <form class="forms-sample" action="{{route('add.events')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Event Title</label>
                <input type="text" class="form-control" name="title" id="title" autocomplete="off" placeholder="Event Title">
            </div>
              <div class="mb-3">
                  <label for="name" class="form-label">Location</label>
                  <input type="text" class="form-control" name="location" id="location" autocomplete="off" placeholder="Event Location e.g Lagos">
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Event Date (optional)</label>
                <input type="date" class="form-control" name="envent_date" autocomplete="off" placeholder="Event date">
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">Is This an Upcoming Event</label>
              <select name="event_status" class="form-control" id="">
                <option value="1">Yes</option>
                <option value="0">No</option>
              </select>
          </div>
            <div class="mb-3">
              <label for="image" class="form-label">Image</label>
              <input type="file" class="form-control" name="image" id="image">
            </div>
            <div class="mb-3">
              <img id="showimage" class="rounded-circle wd-100" src="{{(!empty($item->image)) ? url('uploads/services/'.$item->image) : url('backend/uploads/no-image.jpeg')}}" alt="">
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
            <h6 class="card-title">All Events</h6>
            <div class="table-responsive">
                <table id="dataTableExample" class="table">
                <thead>
                    <tr>
                    <th>S/N</th>
                    <th>Title</th>
                    <th>Location</th>
                    <th>Status</th>
                    <th>Event Date</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>		                       
                    </tr>
                </thead>
                <tbody>
                 
                      @forelse ($events as $item)
                      <tr>
                        <td>{{$loop->index +1}}</td>
                        <td>{{$item->title}} </td>
                        <td>{{$item->location}} </td>
                        <td>
                          @if($item->status == 1)
                          <span class="badge bg-success">Upcoming</span>
                          @else
                          <span class="badge bg-danger">Past</span>
                          @endif
                        </td>
                        <td>{{$item->event_date}} </td>
                        <td>{!! Str::limit($item->description, 90) !!}</td>
                       <td><img src="{{$item->image_url}}" alt=""/></td> 
                          <td>                           
                            <a  type="button" class="btn btn-inverse-warning" data-bs-toggle="modal" data-bs-target="#eventModal{{$item->id}}">Edit</a>
                            <a href="{{route('delete.events', $item->id)}}" type="button" class="btn btn-inverse-danger" id="delete">Delete</a>
                          </td>                    
                      </tr>

                      <!-- Modal -->
          <div class="modal fade" id="eventModal{{$item->id}}" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Edit Event</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                </div>
                <div class="modal-body ">
                  <form class="forms-sample" action="{{route('update.events', ['id' => $item->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$item->id}}">
                   
                        <div class="mb-3">
                            <label for="title" class="form-label">Event Title</label>
                            <input type="text" class="form-control" name="title" value="{{$item->title}}">
                        </div>

                      <div class="mb-3">
                          <label for="location" class="form-label">Location</label>
                          <input type="text" class="form-control" name="location" value="{{$item->location}}">
                      </div>

                      <div class="mb-3">
                        <label for="name" class="form-label">Event Date</label>
                        <input type="date" class="form-control" name="event_date" value="{{$item->event_date}}">
                    </div>

                    <div class="mb-3">
                      <label for="name" class="form-label">Is This an Upcoming Event</label>
                      <select name="event_status" class="form-control" id="">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                      </select>
                    </div>
                  
                      <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image" id="image">
                      </div>

                      <div class="mb-3">
                        <img id="showimage" class="rounded-circle wd-100" src="{{(!empty($item->image)) ? url('uploads/services/'.$item->image) : url('backend/uploads/no-image.jpeg')}}" alt="">
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