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
                                <a class="btn btn-sm btn-success" data-toggle="modal" data-target="#add_brand" href="#">Add New Brand</i></a><hr> <br>
                                <h4 class="card-title">Brand List</h4>
                            </div>
                            <div class="card-body">                               
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                        <tr>
                                            <th>Sl No</th>
                                            <th>Brand Name</th>                                           
                                            <th>Create Date</th>
                                            <th>Status</th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($brand_data as $brand)
                                            <tr>
                                                <td>01</td>
                                                <td>{{ $brand -> brand_name }}</td>                                           
                                                <td>{{ $brand -> created_at }}</td>
                                                <td>
                                                    <div class="status-toggle">
                                                        {{--<input  type="checkbox" status_id="{{ $data -> id }}"  {{ ( $data -> status == true ? 'checked="checked"' : '' ) }} id="cat_status_{{ $loop -> index + 1 }}" class="check cat_check" >
                                                        <label for="cat_status_{{ $loop -> index + 1 }}" class="checktoggle">checkbox</label>--}}
                                                    </div>
                                                </td>
                                                <td  class="text-right">                                             
                                                  <a brand_id="{{ $brand -> id }}" class="btn btn-sm btn-warning edit_brand" href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                  <form style="display: inline-block" action="{{route('brand.destroy', $brand -> id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                </form> 
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



    {{--Add New Catagory--}}
<div class="modal fade" id="add_brand">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="card">                   
                    <div class="card-header">
                        <div class="msg"></div>
                        <h4 class="card-title">Add New Brand</h4>
                    </div>
                    <div class="card-body">                       
                        <form id="company_edit" action="{{ route('brand.store') }}" method="POST">
                            @csrf                                        
                            <div class="form-group">
                                <label>Brand Name</label>
                                <input name="brand_name" type="text" class="form-control">                           
                            </div>           
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Add New Brand</button>
                            </div>                               
                        </form>                      
                    </div>
                </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="brand_edit">
        <div class="modal-dialog">
            <div class="modal-content">
                    <div class="card">
                        <div class="card-header">
                            <div class="msg"></div>
                            <h4 class="card-title">Edit Brand</h4>
                        </div>
                        <div class="card-body">
                         
                           <form action="{{ route('brand.update', 1) }}" method="POST">
                            @csrf
                            @method('PUT')  
                            <div class="form-group">
                                <label>Brand Name</label>
                                <input name="brand_name" type="text" class="form-control" value="" >
                                <input name="brand_id" type="hidden" class="form-control" value="" >
                            </div>        
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Update Brand</button>
                            </div>                               
                        </form>   
                        </div>
                    </div>
            </div>
        </div>
        </div>
@endsection
