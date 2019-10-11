@extends('layouts.admin')


@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">
                
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Data Table</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">Admins Data Table</li>
                            </ol>
                            
                        </div>
                    </div>
                    
                </div>

            </div><!-- end row -->
            <div class="page-content-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-20">
                            <div class="card-body">
                               
                                <h4 class="mt-0 header-title">Admin Datatable</h4>
                                <table id="datatable" class="table table-bordered  dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Date Sent</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($all_admins as $key => $admin)
                                        <tr>
                                            <td>
                                                {{ ++$key }}
                                            </td>
                                            <td>
                                            {{ $admin->first_name."".$admin->last_name }}

                                            </td>
                                            <td>
                                                {{ $admin->email }}
                                            </td>
                                             
                                             <td>
                                                {{ Carbon\Carbon::parse($admin->created_at)->toDayDateTimeString() }}
                                            </td>
                                           
                                            <td>
                                                <a href="{{route('admin.contact_delete',$admin->id)}}" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger waves-effect waves-light">
                                                     <i class="far fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

            </div><!-- end page content-->
        </div><!-- container-fluid -->
    </div><!-- content -->
    @include('admin.footer')
    </div>
@endsection
@section('script')
@include('admin.datatable')

<script type="text/javascript">

   

    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });

   

    $(".btn-submit").click(function(e){

  

        e.preventDefault();

   

        var name = $("input[name=name]").val();

        var password = $("input[name=password]").val();

        var email = $("input[name=email]").val();

   

        $.ajax({

           type:'POST',

           url:'/ajaxRequest',

           data:{name:name, password:password, email:email},

           success:function(data){

              alert(data.success);

           }

        });

  

	});

</script>
@endsection

