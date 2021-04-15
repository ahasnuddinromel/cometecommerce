@extends('admin.layouts.app')

@section('main-content')

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        @include('admin.layouts.section.headertop')
        
        @include('admin.layouts.section.summery') 
        
                <div class="row">
                    <div class="col-md-12">
                        <!-- Recent Orders -->
                        <div class="card card-table">
                            <div class="card-header">                                
                                <br>
                                <br>
                                <h4 class="card-title">Order List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                            <tr>                                                
                                                <th>Product ID</th>
                                                <th>Customer Name</th>
                                                <th>Email</th>
                                                <th>Cell</th>
                                                <th>Address</th>                                                
                                                <th>Quantity</th>                                               
                                                <th>Price</th>
                                                <th>Image</th>
                                                <th class="text-right">Action</th>
                                            </tr> 
                                         </thead>
                                        <tbody>
                                            @foreach ($order as $pro)  
                                        <tr>
                                            <td>{{$pro-> product_id }}</td>
                                            <td>{{$pro-> customer_name }}</td>
                                            <td>{{$pro-> email }}</td>
                                            <td>{{$pro-> phone_number }}</td>                                           
                                            <td>{{$pro-> address }}</td>                                           
                                            <td>{{$pro-> product_quantity }}</td>                                           
                                            <td>{{$pro-> sp}}/=</td>
                                            <td><img style="width: 50px;" src="{{ URL::to('frontend/assets/images/product') .'/'. $pro-> photo}}" alt=""></td>
                                          <td>
                                                {{--<div class="status-toggle">
                                                    <input  type="checkbox" status_id="{{ $pro -> id }}"  {{ ( $pro -> status == true ? 'checked="checked"' : '' ) }} id="cat_status_{{ $loop -> index + 1 }}" class="check cat_check" >
                                                    <label for="cat_status_{{ $loop -> index + 1 }}" class="checktoggle">checkbox</label>
                                                </div>--}}
                                            </td>                                           
                                        </tr> 
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /Recent Orders -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Wrapper -->
    </div>
    <!-- /Main Wrapper -->  
@endsection
