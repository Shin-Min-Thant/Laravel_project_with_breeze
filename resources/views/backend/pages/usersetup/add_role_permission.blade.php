<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
@extends('admin.admin_dashboard')
@section('page-content')

<style>
    .form-check-label{
        text-transform: capitalize
    }
</style>

<div class="page-content">



      <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                <h6 class="card-title">Add Role and Permission</h6>

                <form class="forms-sample" id="myForm" method="POST" action="{{route('store.roles.permission')}}">
                    @csrf
                    <div class="row mb-3 form-group">


                        <label for="role_id" class="col-sm-3 col-form-label">Role_name</label>
                            <div class="col-sm-9">
                                <select class="form-select" name="role_id" id="role_id" aria-label="Default select example">
                                    <option disabled selected="">Slect Role_name</option>
                                    @foreach ($roles as $role)
                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach

                                  </select>
                            </div>

                            <div class="form-check col-lg-3">
                                <input class="form-check-input" type="checkbox" value="" id="mainCheckDefault">
                                <label class="form-check-label" for="mainCheckDefault">
                                  All Permission
                                </label>
                              </div>



                    </div>
                    <hr><br>

                @foreach ($permission_group as $group)


                    <div class="row">
                        <div class="col-lg-6 form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              {{$group->group_name}}
                            </label>
                        </div>

                    <div class="col-lg-6">
                        @php
                        $permissions = App\Models\User::getPermissionByGroupName($group->group_name)
                        @endphp
                        @foreach ($permissions as $permission)
                        <div class="mb-3 form-check">
                            <input class="form-check-input" name="permission[]"
                            type="checkbox" value="{{$permission->id}}" id="flexCheckDefault{{$permission->id}}">
                            <label class="form-check-label" for="flexCheckDefault{{$permission->id}}">
                              {{$permission->name}}
                            </label>
                        </div>
                        @endforeach
                        <br>
                    </div>

                    </div>

                    @endforeach

                    <button type="submit" class="btn btn-primary me-2">Save Change</button>

                </form>

            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$('#mainCheckDefault').click(function(){
    if($(this).is(':checked')){
        $('input[type=checkbox]').prop('checked',true);
    }else{
        $('input[type=checkbox]'.prop('checked',false));
    }
});

</script>




@endsection
