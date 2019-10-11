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
                                <table id="datatable" class="table table-bordered  dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Model</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($galleries as $key => $gallery)
                                        <tr>
                                            <td>
                                                {{ ++$key }}
                                            </td>
                                            <td>
                                                {{ $gallery->first_name."".$gallery->last_name }}
                                            </td>
                                            <td>
                                                <a href="#myModal{{$gallery->id}}" data-toggle="modal"  class="btn btn-success waves-effect waves-light">
                                                        <i class="fas fa-folder-open"></i>
                                                </a>
                                            </td>
                                            
                                            
                                        </tr>
                                        @include('admin_pages.galleriesmodal')
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

