<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
@extends('admin.admin_dashboard')
@section('page-content')

<div class="page-content">



      <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                <h6 class="card-title">Add Role </h6>

                <form class="forms-sample" id="myForm" method="POST" action="{{route('restore.role')}}">
                    @csrf
                    <div class="row mb-3 form-group">
                        <label for="name" class="col-sm-3 col-form-label">Role</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">

                            @error('name')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>





                    </div>

                    <button type="submit" class="btn btn-primary me-2">Save Change</button>

                </form>

            </div>
        </div>
    </div>
</div>




@endsection
