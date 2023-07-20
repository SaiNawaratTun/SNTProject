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

                <h6 class="card-title">Add Condo</h6>

                <form id="myForm" method="POST" action="{{ route('store.condo')}}" class="forms-sample" enctype="multipart/form-data" >
                    @csrf


                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="form-label">Price</label>
                        <input type="price" name="price" class="form-control @error('price') is-invalid @enderror"  id="price">
                            @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="form-label">Room</label>
                        <input type="text" name="room" class="form-control @error('room') is-invalid @enderror"  id="room">
                            @error('room')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="form-label">Valid Date</label>  
                        <input name="valid_date" id="valid_date" type="date" class="form-control mb-4 mb-md-0 @error('valid_date') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy"/>                         
                        @error('valid_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="form-label">Description</label>
                        <textarea name="description" class="form-control  @error('description') is-invalid @enderror" id="description" rows="4"></textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"  id="address">
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="form-label">Upload Images</label>
                        <input class="form-control @error('images') is-invalid @enderror" type="file" name="images[]" id="images" multiple>
                        @error('images')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <hr>
                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="form-label">Select Amenities</label>
                        <br>
                        @foreach ($amenities_group as $amenity)
                        
                            <div class="form-check form-check-inline col-3">
                                <input type="checkbox" name="amenity[]" class="form-check-input" id="amenity" value="{{ $amenity->id}}">
                                <label class="form-check-label" for="checkInline1">
                                {{ $amenity->amenities_name}}
                                </label>
                                <br>
                            </div>
                        
                        @endforeach
                    </div>

                      <hr>
                    
                        <button type="submit" class="btn btn-primary me-2">Add</button>
                </form>

            </div>
        </div>

    </div>
  </div>
  <!-- middle wrapper end -->

</div>

    </div>


@endsection