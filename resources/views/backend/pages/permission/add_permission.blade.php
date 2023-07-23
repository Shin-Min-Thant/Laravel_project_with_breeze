<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
@extends('admin.admin_dashboard')
@section('page-content')

<div class="page-content">



      <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                <h6 class="card-title">Add Permission </h6>

                <form class="forms-sample" id="myForm" method="POST" action="{{route('restore.permission')}}">
                    @csrf
                    <div class="row mb-3 form-group">
                        <label for="name" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name">

                        </div>

                        <label for="group_name" class="col-sm-3 col-form-label">Group_name</label>
                            <div class="col-sm-9">
                                <select class="form-select" name="group_name" id="group_name" aria-label="Default select example">
                                    <option disabled selected="">Slect Group_name</option>
                                    <option value="type">Property Type</option>
                                    <option value="content">Content</option>
                                    <option value="role">Role & Permission</option>
                                  </select>
                            </div>



                    </div>

                    <button type="submit" class="btn btn-primary me-2">Save Change</button>

                </form>

            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                title: {
                    required : true,
                },

            },
            messages :{
                title: {
                    required : 'Please Enter Title',
                },


            },
            rules: {
                description: {
                    required : true,
                },

            },
            messages :{
                description: {
                    required : 'Please Enter Description',
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




@endsection
