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
                                <li class="breadcrumb-item active">Contact Data Table</li>
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
                               
                                <h4 class="mt-0 header-title">Contact Datatable</h4>
                                <table id="datatable" class="table table-bordered  dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Date Sent</th>
                                        <th>View</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($contacts as $key => $contact)
                                        <tr>
                                            <td>
                                                {{ ++$key }}
                                            </td>
                                            <td>
                                            {{ ($contact->name) }}

                                            </td>
                                            <td>
                                                {{ ($contact->email) }}
                                            </td>
                                             
                                             <td>
                                                {{ ($contact->created_at->diffForHumans()) }}
                                            </td>
                                            <td>
                                                <a href="#myModal{{$contact->id}}" data-toggle="modal" class="btn btn-success waves-effect waves-light">
                                                        <i class="fab fa-product-hunt"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{route('admin.contact_delete',$contact->id)}}" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger waves-effect waves-light">
                                                     <i class="far fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @include('admin_pages.contactmodal')
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
@endsection

