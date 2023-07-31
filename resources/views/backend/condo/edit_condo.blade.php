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

                <form id="myForm" method="POST" action="{{ route('update.condo')}}" class="forms-sample" enctype="multipart/form-data" >
                    @csrf

                    <input type="hidden" name="id" value="{{ $item->id }}">

                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ $item->name }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="form-label">Price</label>
                        <input type="price" name="price" class="form-control @error('price') is-invalid @enderror"  id="price" value="{{ $item->price }}">
                            @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="form-label">Room</label>
                        <input type="text" name="room" class="form-control @error('room') is-invalid @enderror"  id="room" value="{{ $item->room }}">
                            @error('room')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="form-label">Valid Date</label>  
                        <input name="valid_date" id="valid_date" type="date" value="{{ $item->validate_at }}" class="form-control mb-4 mb-md-0 @error('valid_date') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy"/>                         
                        @error('valid_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="form-label">Description</label>
                        <textarea name="description" type="text"  class="form-control  @error('description') is-invalid @enderror" id="description" rows="4">{{ $item->description }}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="form-label">Address</label>
                        <input type="text" name="address" value="{{ $item->address }}" class="form-control @error('address') is-invalid @enderror"  id="address">
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="form-label">Uploaded Images</label>
                        <br>
                        @if($item->uploadImage)
                            @foreach($item->uploadImage as $image)

                                    <img src="{{ asset($image->url) }}" width="100" height="100" alt="">
                                    <a href="{{ route('image.delete',$image->id) }}" class="btn btn-inverse-danger" id="delete"> Delete </a>
                                
                            @endforeach
                        @endif
                    </div><br>

                    <div class="form-group mb-2">
                        <label><b>Choose Images</b></label>
                        <input class="form-control" type="file" name="images[]" id="images" multiple>
                        @error('images')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="form-label">Select Amenities</label>
                        <br>
                        @foreach ($amenities_group as $amenity)
                        
                            <div class="form-check form-check-inline col-3">
                                <input type="checkbox" name="amenity[]" class="form-check-input" id="amenity" value="{{ $amenity->id}}" >
                                <label class="form-check-label" for="amenity">
                                {{ $amenity->amenities_name}}
                                </label>
                                <br>
                            </div>
                        
                        @endforeach
                    </div>
                    
                    
                    
                        <button type="submit" class="btn btn-primary me-2">Update</button>
                </form>

            </div>
        </div>

    </div>
  </div>
  <!-- middle wrapper end -->

</div>

    </div>


@endsection