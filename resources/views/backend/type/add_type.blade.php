<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
@extends('admin.admin_dashboard')
@section('page-content')

<div class="page-content">



      <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                <h6 class="card-title">Add Property Type </h6>

                <form class="forms-sample" method="POST" action="{{route('restore.type')}}">
                    @csrf
                    <div class="row mb-3">
                        <label for="type_name" class="col-sm-3 col-form-label">Type_name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('type_name') is-invalid @enderror" id="type_name" name="type_name">
                            @error('type_name')
                            <span class="text-danger">{{$message}}</span>

                            @enderror
                        </div>

                        <label for="type_icon" class="col-sm-3 col-form-label">Type_Icon</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('type_icon') is-invalid @enderror" id="type_icon" name="type_icon">
                                @error('type_icon')
                                <span class="text-danger">{{$message}}</span>

                                @enderror
                            </div>



                    </div>




                    <button type="submit" class="btn btn-primary me-2">Save Change</button>

                </form>

            </div>
        </div>
    </div>
</div>
      <!-- middle wrapper start -->




@endsection
