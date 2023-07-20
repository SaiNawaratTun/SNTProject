@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<style type="text/css">
    .form-check-label{
        text-transform: capitalize;
    }
</style>

<div class="page-content">


<div class="row profile-body">
  <!-- middle wrapper start -->
  <div class="col-md-8 col-xl-8 middle-wrapper">
    <div class="row">
        <div class="card">
            <div class="card-body">

                <h6 class="card-title">Edit Role Permission</h6>

                <form id="myForm" method="POST" action="{{ route('admin.role.update', $role->id)}}" class="forms-sample" >
                    @csrf

                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="form-label">Role Name</label>
                    <h3>{{ $role->name }}</h3>
                    </div>
                    <div class="form-check mb-2">
                      <input type="checkbox" class="form-check-input" id="checkDefaultmain">
                        <label class="form-check-label" for="checkDefaultmain">
                            Permission all
                        </label>
                    </div>

            <hr>
            @foreach ($permission_group as $group)
                <div class="row">

                    <div class="col-3">
                        @php

                        $permissions = App\Models\User::getpermissionByGroupName($group->group_name)

                        @endphp
                    <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" id="checkDefault" {{ App\Models\User::roleHasPermission($role,$permissions) ? 'checked' : ''}}>
                                    <label class="form-check-label" for="checkDefault">
                                        {{ $group->group_name }}
                                    </label>
                                </div>
                    </div>

                    <div class="col-5">

                    @foreach ($permissions as $permission)
                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" name="permission[]" id="checkDefault{{ $permission->id }}" 
                                value="{{ $permission->id }}" {{ $role->hasPermissionTo($permission->name) ? 'checked' : ''}}>
                                    <label class="form-check-label" for="checkDefault{{ $permission->id }}">
                                        {{ $permission->name }}
                                    </label>
                            </div>
                    @endforeach
                    <br>
                    </div>

                </div> 
                <!-- End Row -->
                @endforeach
                    
                        <button type="submit" class="btn btn-primary me-2">Save change</button>
                </form>

            </div>
        </div>

    </div>
  </div>
  <!-- middle wrapper end -->

</div>

    </div>

    <script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                amenities_name: {
                    required : true,
                }, 
                
            },
            messages :{
                amenities_name: {
                    required : 'Please Enter Amenities Name',
                }, 
                 

            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>

<script type="text/javascript">
    
    $('#checkDefaultmain').click(function(){

        if($(this).is(':checked')) {
            $('input[ type= checkbox]').prop('checked', true);
        }else{
            $('input[ type= checkbox]').prop('checked', false);
        }
    });

</script>

@endsection