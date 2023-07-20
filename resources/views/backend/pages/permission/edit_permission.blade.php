@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">


<div class="row profile-body">
  <!-- middle wrapper start -->
  <div class="col-md-8 col-xl-8 middle-wrapper">
    <div class="row">
        <div class="card">
            <div class="card-body">

                <h6 class="card-title">Add Permission</h6>

                <form id="myForm" method="POST" action="{{ route('update.permission')}}" class="forms-sample" >
                    @csrf

                    <input type="hidden" name="id" value="{{ $permission->id }}">

                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="form-label">Permission Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $permission->name }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="form-label">Group Name</label>
                        <select class="form-select" name="group_name">
                                <option selected="" disabled="" >Select Group Name</option>
                                <option value="type" {{ $permission->group_name == 'type' ? 'selected' : '' }}>Property Type</option>
                                <option value="amenities" {{ $permission->group_name == 'amenities' ? 'selected' : '' }}>Amenities</option>
                        </select>
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


@endsection