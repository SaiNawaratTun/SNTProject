@extends ('layouts.user_view')
@section ('uview')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

  <div class="fables-testimonial fables-after-overlay py-3 py-md-5 bg-rules">
    <div class="container">
        <h2 class="position-relative z-index white-color font-35 font-weight-bold text-center mb-4">User Profile</h2> 
        <div class="owl-carousel owl-theme" id="fables-testimonial-carousel">
          @php

            $id =  Auth::user()->id;
            $profileData = App\Models\User::find($id);

          @endphp
              <div class="row text-center fables-testimonial-carousel-item rounded py-4"> 
                   <div class="col-12 col-md-3">
                      <img src="{{(!empty($profileData->photo)) ?url('upload/user_image/' .$profileData->photo) :url('upload/no_image.jpg')}}" alt="Fables Template" class="fables-testimonial-carousel-img">  
                      <h3 class="font-14 semi-font text-white">{{ $profileData->name}}</h3>
                      <h3 class="font-14 font-italic text-white mt-2">{{ $profileData->email }}</h3>
                   </div>
                   <div class="col-12 col-md-9 p-0 p-md-2">
                        <div class="fables-testimonial-detail font-15 font-italic text-white p-4 position-relative"> 
                            No matter what issue or questions pops up, you are always there to 
                            assist me. Thank you so much for your excellent assistance and great 
                            customer support through years.
                        </div>
                   </div>
              </div>
              

        </div>
    </div>
</div>

<div class="container">
    <div class="fables-Testimonials my-3 ">             
       <h3 class="fables-second-text-color mb-5 font-weight-bold"> Edit Profile </h3> 
       <div class="row profile-body">
  <!-- left wrapper start -->
  <div class="col-12 col-sm-6 wow fadeInLeft">
    <div class="card rounded">
      <div class="card-body">
        <div class="d-flex align-items-center justify-content-between mb-2">
          <div>
          <img class="rounded-circle" width="100" height="100" src="{{(!empty($profileData->photo)) ?url('upload/user_image/' .$profileData->photo) :url('upload/no_image.jpg')}}" alt="profile">
            
          </div>
        </div>
        <div class="mt-3">
          <label class="tx-11 fw-bolder mb-0 text-uppercase">Name:</label>
          <p class="text-muted">{{ $profileData->name}}</p>
        </div>
        <div class="mt-3">
          <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
          <p class="text-muted">{{ $profileData->email}}</p>
        </div>
        <div class="mt-3">
          <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>
          <p class="text-muted">{{ $profileData->phone}}</p>
        </div>
        <div class="mt-3">
          <label class="tx-11 fw-bolder mb-0 text-uppercase">Address:</label>
          <p class="text-muted">{{ $profileData->address}}</p>
        </div>
        <div class="mt-3 d-flex social-links">
          <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
            <i data-feather="github"></i>
          </a>
          <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
            <i data-feather="twitter"></i>
          </a>
          <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
            <i data-feather="instagram"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- left wrapper end -->
  <!-- middle wrapper start -->
  <div class="col-12 col-md-6 wow fadeInRight">
    <div class="row">
        <div class="card rounded">
            <div class="card-body">

                <h4 class="card-title">Update Profile</h4>

                <form method="POST" action="{{ route('user.profile.store')}}" class="fables-contact-form" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="exampleInputUsername1" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control rounded-0 p-3" id="exampleInputUsername1" autocomplete="off" value="{{$profileData->username}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control rounded-0 p-3" id="exampleInputUsername1" autocomplete="off" value="{{$profileData->name}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control rounded-0 p-3" id="exampleInputUsername1" autocomplete="off" value="{{$profileData->email}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1" class="form-label">Phone</label>
                        <input type="text" name="phone" class="form-control rounded-0 p-3" id="exampleInputUsername1" autocomplete="off" value="{{$profileData->phone}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control rounded-0 p-3" id="exampleInputUsername1" autocomplete="off" value="{{$profileData->address}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1" class="form-label">Photo</label>
                        <input class="form-control rounded-0 p-3" name="photo" type="file" id="image">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1" class="form-label"> </label>
                        <img id="showImage" width="60" height="60" class=" rounded-circle" src="{{ (!empty($profileData->photo)) ? url('upload/user_image/'.$profileData->photo) : url('upload/no_image.jpg')}}" alt="profile">
                    </div>
                        <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                </form>

            </div>
        </div>

    </div>
  </div>

  <!-- middle wrapper end -->

</div>
 
    </div>  
</div>           
<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader= new FileReader();
            reader.onload = function(e){
              $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });

    });

    </script>

  
  @endsection