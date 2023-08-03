@extends('admin.admin_dashboard')
@section('page-content')


<div class="page-content">

    <nav class="page-breadcrumb">
        <a href="{{route('add.admin')}}" class="btn btn-inverse-success">Add Admin</a>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <h6 class="card-title">All Role Permission</h6>
    <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p>
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>Sl</th>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Photo</th>
            <th>Phone</th>
            <th>Role</th>
            <th>Action</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($users as $key => $item)


          <tr>
            <td>{{$key+1}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->username}}</td>
            <td>{{$item->email}}</td>
            <td><img src="{{(isset($item->photo) ? url('uploads/admin_imgs/' . $item->photo) : url('uploads/no_image.jpg'))}}"></td>
            <td>{{$item->phone}}</td>
            <td>
                @foreach ($item->roles as $role)
                <span class="badge badge-pill bg-secondary">{{$role->name}}</span>
                @endforeach

            </td>


            <td>
                <a href="{{route('admin.edit',$item->id)}}" class="btn btn-inverse-warning">Edit</a>
                <a href="{{route('admin.delete',$item->id)}}" id="delete" class="btn btn-inverse-danger">Delete</a>
                <a href="" class="btn btn-inverse-success">Publish</a>
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
