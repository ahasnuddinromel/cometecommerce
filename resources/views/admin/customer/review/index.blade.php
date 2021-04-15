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
                                <h4 class="card-title">User List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                        <tr>
                                            <th>User Name</th>
                                            <th>User Role</th>                                           
                                            <th>Joining Date</th>
                                            <th>Status</th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-01.jpg" alt="User Image"></a>
                                                    <a href="profile.html">Mahabubur Rahman</a>
                                                </h2>
                                            </td>
                                            <td>Admin</td>                                           
                                            <td>9 Nov 2019</td>
                                            <td>
                                                <div class="status-toggle">
                                                    {{--<input  type="checkbox" status_id="{{ $data -> id }}"  {{ ( $data -> status == true ? 'checked="checked"' : '' ) }} id="cat_status_{{ $loop -> index + 1 }}" class="check cat_check" >
                                                    <label for="cat_status_{{ $loop -> index + 1 }}" class="checktoggle">checkbox</label>--}}
                                                </div>
                                            </td>
                                            <td  class="text-right">
                                              <a class="btn btn-sm btn-success" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                              <a class="btn btn-sm btn-warning" href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                              <a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr> 
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
