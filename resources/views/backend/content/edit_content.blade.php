<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
@extends('admin.admin_dashboard')
@section('page-content')

<div class="page-content">



      <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                <h6 class="card-title">Edit Content </h6>

                <form class="forms-sample" method="POST" action="{{route('update.content')}}">
                    @csrf
                    <div class="row mb-3">
                        <input type="hidden" name="id" value="{{$contents->id}}">
                        <label for="title" class="col-sm-3 col-form-label">Title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                            id="title" name="title" value="{{$contents->title}}">
                            @error('title')
                            <span class="text-danger">{{$message}}</span>

                            @enderror
                        </div>

                        <label for="description" class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('description') is-invalid @enderror"
                                id="description" name="description" value="{{$contents->description}}">
                                @error('description')
                                <span class="text-danger">{{$message}}</span>

                                @enderror
                            </div>



                    </div>




                    <div class="form-check mb-3">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">
                            Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Update</button>

                </form>

            </div>
        </div>
    </div>
</div>
      <!-- middle wrapper start -->




@endsection
