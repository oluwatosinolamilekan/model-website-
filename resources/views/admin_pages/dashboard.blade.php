
@extends('layouts.admin')


@section('content')

<div class="content-page">
        <!-- Start content -->
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="page-title-box">
                  <h4 class="page-title">Dashboard</h4>
                  
                </div>
              </div>
            </div><!-- end row -->
            <div class="page-content-wrapper">
              <div class="row">
                <div class="col-xl-3 col-md-6">
                  <div class="card bg-primary mini-stat position-relative">
                    <div class="card-body">
                      <div class="mini-stat-desc">
                        <h6 class="text-uppercase verti-label text-white-50">Models</h6>
                        <div class="text-white">
                          <h6 class="text-uppercase mt-0 text-white-50"> Total</h6>
                          <h3 class="mb-3 mt-0">{{$count_models}}</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6">
                  <div class="card bg-primary mini-stat position-relative">
                    <div class="card-body">
                      <div class="mini-stat-desc">
                        {{-- <h6 class="text-uppercase verti-label text-white-50">Admin</h6> --}}
                        <div class="text-white">
                          <h6 class="text-uppercase mt-0 text-white-50">Admin</h6>
                          <h3 class="mb-3 mt-0">{{$count_all_admin}}</h3>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6">
                  <div class="card bg-primary mini-stat position-relative">
                    <div class="card-body">
                      <div class="mini-stat-desc">
                        <h6 class="text-uppercase verti-label text-white-50">Models</h6>
                        <div class="text-white">
                          <h6 class="text-uppercase mt-0 text-white-50"> Today</h6>
                          <h3 class="mb-3 mt-0">{{$count_all_today_models}}</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6">
                  <div class="card bg-primary mini-stat position-relative">
                    <div class="card-body">
                      <div class="mini-stat-desc">
                        <h6 class="text-uppercase verti-label text-white-50">Pictures</h6>
                        <div class="text-white">
                          <h6 class="text-uppercase mt-0 text-white-50">Pending</h6>
                          <h3 class="mb-3 mt-0">{{$pending_galleries}}</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- end row -->
              <div class="row">
                {{-- @if(count($payments) > 0)
                <div class="col-xl-6">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="mt-0 header-title mb-4">Today's Transaction</h4>
                      <div class="table-responsive">
                        <table class="table table-hover mb-0">
                          <thead>
                            <tr>
                              <th scope="col">(#) Id</th>
                              <th scope="col">Name</th>
                              <th scope="col">Date</th>
                              <th scope="col">Amount</th>
                              <th scope="col" colspan="2">Status</th>
                            </tr>
                          </thead>
                          @foreach($payments as $payment)
                          <tbody>
                            <tr>
                              <th scope="row">{{$payment->id}}</th>
                              <td>
                                <div>
                                  {{$payment->user_name}}
                                </div>
                              </td>
                              <td> {{$payment->created_at->diffForHumans()}}</td>
                              <td>&#8358; {{$payment->amount_paid}}</td>
                              <td>
                                <span class="badge badge-success">
                                  Success
                                </span>
                              </td>
                            </tr>
                            
                          </tbody>
                          @endforeach
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                @else
                <div class="col-xl-6">
                  <div class="card">
                      <div class="card-body">
                          <h4 class="mt-0 header-title mb-4">No Trasaction Today</h4>
                      </div>
                  </div>
                </div>
                @endif
                @if(count($orders) > 0)
                <div class="col-xl-6">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="mt-0 header-title mb-4">Today's Order</h4>
                      <div class="table-responsive order-table">
                        <table class="table table-hover mb-0">
                          <thead>
                            <tr>
                              <th scope="col">Id</th>
                              <th scope="col">Name</th>
                              <th scope="col">Date</th>
                              <th scope="col">Amount</th>
                            </tr>
                          </thead>
                          @foreach($orders as $order)
                          <tbody>
                            <tr>
                              <th scope="row">{{$order->id}}</th>
                              <td>
                                <div>
                                  {{$order->product_name}}
                                </div>
                              </td>
                              <td>
                                {{$order->created_at->diffForHumans()}}
                              </td>
                              <td>&#8358; {{$order->product_price * $order->quantity}}</td>
                             
                            </tr>
                            
                          </tbody>
                          @endforeach
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                @else
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">No Orders Today</h4>
                        </div>
                    </div>
                  </div>
                @endif --}}
              </div>
            </div><!-- end page content-->
          </div><!-- container-fluid -->
        </div><!-- content -->
        @include('admin.footer')
      </div>
      
@endsection

