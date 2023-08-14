@extends('admin.admin_dashboard')
@section('admin')

      <div class="page-content">

      <nav class="page-breadcrumb">
          <ol class="breadcrumb">
          <a href="{{ route('add.apartment')}}" class="btn btn-inverse-info"> Add Apartment</a>
          </ol>
      </nav>

      <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
      <div class="card-body">
      <h6 class="card-title">All Apartment</h6>
      <div class="table-responsive">
        <table id="dataTableExample" class="table">
          <thead>
            <tr>
              <th>Sl</th>
              <th>Name</th>
              <th>Photo</th>
              <th>Price</th>
              <th>Room</th>
              <th>validat Date</th>
              <th>Amenities</th>
              <th>Desc</th>
              <th>Address</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($aparts as $key => $item)
            <tr>
              <td>{{ $key+1 }}</td>
              <td>{{ $item->name }}</td>
              <td>
              @if ($item->uploadImage)
                    @foreach ($item->uploadImage as $image)
                        <a href="{{ asset($image->url) }}" target="_blank">
                            <img src="{{ asset($image->url) }}" alt="" style="width: 80px; height: 60px;">
                        </a>
                    @endforeach
                @else
                    <p>No images available.</p>
                @endif
              </td>
              <td>{{ $item->price }}</td>
              <td>{{ $item->room }}</td>
              <td>{{ $item->validate_at }}</td>

              <td>
              
                 @foreach ($item->amenities as  $ame)
                <span class="badge bg-danger"> {{$ame->amenities_name}}</span>
                @endforeach

              </td>
              <td>{{ $item->description }}</td>
              <td>{{ $item->address }}</td>
              <td>
                  <a href="{{ route('edit.apartment', $item->id) }}" class="btn btn-inverse-warning"> Edit </a>
                  <a href="{{ route('delete.apartment', $item->id) }}" class="btn btn-inverse-danger" id="delete"> Delete </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      </div>
      </div>
          </div>
      </div>

      </div>




@endsection