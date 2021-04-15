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
                                <a class="btn btn-sm btn-success" data-toggle="modal" data-target="#add_catagory" href="#">Add New Catagory</i></a><hr> <br>
                                <h4 class="card-title">Catagory List</h4>
                            </div>
                            <div class="card-body">                               
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                        <tr>
                                            <th>Sl No</th>
                                            <th>Catagory Name</th>                                           
                                            <th>Create Date</th>
                                            <th>Status</th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cata_data as $cata)
                                            <tr>
                                                <td>01</td>
                                                <td>{{ $cata -> catagory_name }}</td>                                           
                                                <td>{{ $cata -> created_at }}</td>
                                                <td>
                                                    <div class="status-toggle">
                                                        <input  type="checkbox" status_id="#"  {{ ( $cata -> status == true ? 'checked="checked"' : '' ) }} id="cat_status_{{ $loop -> index + 1 }}" class="check catgory_check" >
                                                        <label for="cat_status_{{ $loop -> index + 1 }}" class="checktoggle">checkbox</label>
                                                    </div>
                                                </td>
                                                <td  class="text-right">                                             
                                                  <a catagory_id="{{ $cata -> id }}" class="btn btn-sm btn-warning edit_product_cata" href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                  <form style="display: inline-block" action="#" method="post">
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
<div class="modal fade" id="add_catagory">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="card">                   
                    <div class="card-header">
                        <div class="msg"></div>
                        <h4 class="card-title">Add New Catagory</h4>
                    </div>
                    <div class="card-body">                       
                        <form id="company_edit" action="{{ route('cata.store') }}" method="POST">
                            @csrf                                        
                            <div class="form-group">
                                <label>Catagory</label>
                                <input name="catagory_name" type="text" class="form-control">                           
                            </div>           
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Add New Catagory</button>
                            </div>                               
                        </form>                      
                    </div>
                </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="cata_edit">
        <div class="modal-dialog">
            <div class="modal-content">
                    <div class="card">
                        <div class="card-header">
                            <div class="msg"></div>
                            <h4 class="card-title">Edit Catagory</h4>
                        </div>
                        <div class="card-body">
                         
                           <form action="{{ route('cata.update', 1) }}" method="POST">
                            @csrf
                            @method('PUT')  
                            <div class="form-group">
                                <label>Catagory Name</label>
                                <input name="catagory_name" type="text" class="form-control" value="" >
                                <input name="cata_id" type="hidden" class="form-control" value="" >
                            </div>        
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Update Catagory</button>
                            </div>                               
                        </form>   
                        </div>
                    </div>
            </div>
        </div>
        </div>
@endsection
