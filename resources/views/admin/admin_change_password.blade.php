<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
@extends('admin.admin_dashboard')
@section('page-content')

<div class="page-content">


    <div class="row profile-body">
      <!-- left wrapper start -->
      <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
        <div class="card rounded">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-2">

              <div>
                <img class="wd-100 rounded-circle" src="{{isset($profileData->photo) ?
                url('uploads/admin_imgs/' . $profileData->photo) : url('uploads/no_image.jpg')}}" alt="profile">
                <span class="h5 ms-3 text-light">{{$profileData->name}}</span>
              </div>

            </div>

            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Name:</label>
              <p class="text-muted">{{$profileData->name}}</p>
            </div>
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Username:</label>
              <p class="text-muted">{{$profileData->username}}</p>
            </div>
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
              <p class="text-muted">{{$profileData->email}}</p>
            </div>
            {{-- <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Password:</label>
              <p class="text-muted">{{$profileData->password}}</p>
            </div> --}}
            <div class="mt-3">
                <label class="tx-11 fw-bolder mb-0 text-uppercase">Address:</label>
                <p class="text-muted">{{$profileData->address}}</p>
              </div>
              <div class="mt-3">
                <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>
                <p class="text-muted">{{$profileData->phone}}</p>
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
      <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                <h6 class="card-title">Admin Change Password </h6>

                <form class="forms-sample" method="POST" action="{{route('admin.update.password')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="old_password" class="col-sm-3 col-form-label">Old Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control @error('old_password') is-invalid @enderror" id="old_password" name="old_password" autocomplete="off">
                            @error('old_password')
                            <span class="text-danger">{{$message}}</span>

                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="new_password" class="col-sm-3 col-form-label">New Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control @error('new_password') is-invalid @enderror" id="new_password" name="new_password" autocomplete="off">
                            @error('new_password')
                            <p class="text-danger">{{$message}}</p>

                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                      <label for="confirm_password" class="col-sm-3 col-form-label">Confirm New Password</label>
                      <div class="col-sm-9">
                          <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" autocomplete="off"
                          autocomplete="off">

                      </div>
                    </div>

                    <div class="form-check mb-3">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">
                            Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Save Change</button>

                </form>

            </div>
        </div>
    </div>
</div>
      <!-- middle wrapper start -->




@endsection
