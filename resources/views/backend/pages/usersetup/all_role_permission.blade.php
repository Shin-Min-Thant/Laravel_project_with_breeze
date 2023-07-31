@extends('admin.admin_dashboard')
@section('page-content')


<div class="page-content">

    <nav class="page-breadcrumb">
        <a href="{{route('add.roles.permission')}}" class="btn btn-inverse-success">Add Role and Permission</a>
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
            <th>Role Name</th>
            <th>Permission</th>
            <th>Action</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($roles as $key => $item)


          <tr>
            <td>{{$key+1}}</td>
            <td>{{$item->name}}</td>
           <td>
            @foreach ($item->permissions as $iper)
            <span class="badge bg-secondary">{{$iper->name}}</span>
            @endforeach
           </td>

            <td>
                <a href="{{route('admin.edit.permission',$item->id)}}" class="btn btn-inverse-warning">Edit</a>
                <a href="{{route('delete.permission',$item->id)}}" id="delete" class="btn btn-inverse-danger">Delete</a>
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
