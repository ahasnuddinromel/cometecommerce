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
                                <a class="btn btn-sm btn-success" data-toggle="modal" data-target="#add_sub_catagory" href="#">Add New Catagory</i></a><hr> <br>
                                <h4 class="card-title">Sub Catagory List</h4>
                            </div>
                            <div class="card-body">                               
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                        <tr>
                                            <th>Sl No</th>
                                            <th>Sub Catagory Name</th>                                           
                                            <th>Create Date</th>
                                            <th>Status</th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($sub_cata_data as $subcata)
                                            <tr>
                                                <td>01</td>
                                                <td>{{ $subcata -> sub_catagory_name }}</td>                                           
                                                <td>{{ $subcata -> created_at }}</td>
                                                <td>
                                                    <div class="status-toggle">
                                                        {{--<input  type="checkbox" status_id="{{ $data -> id }}"  {{ ( $data -> status == true ? 'checked="checked"' : '' ) }} id="cat_status_{{ $loop -> index + 1 }}" class="check cat_check" >
                                                        <label for="cat_status_{{ $loop -> index + 1 }}" class="checktoggle">checkbox</label>--}}
                                                    </div>
                                                </td>
                                                <td  class="text-right">                                             
                                                  <a sub_cata_id="{{ $subcata -> id }}" class="btn btn-sm btn-warning edit_product_sub_cata" href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                 
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
<div class="modal fade" id="add_sub_catagory">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="card">                   
                    <div class="card-header">
                        <div class="msg"></div>
                        <h4 class="card-title">Add New Sub Catagory</h4>
                    </div>
                    <div class="card-body">                       
                        <form id="company_edit" action="{{ route('subcatagory.store') }}" method="POST">
                            @csrf                                                                 
                            <div class="form-group">
                                    @php
                                        $catagory = App\Models\ProductCatagory::all();
                                    @endphp
                                <label>Catagory</label>
                                <select name="product_catagorie_id"  class="form-control" id="">
                                    @foreach ($catagory as $cata)
                                         <option value="{{ $cata->id }}">{{ $cata->catagory_name }}</option>          
                                    @endforeach
                                </select>                                                        
                            </div> 
                            <div class="form-group">
                                <label>Sub Catagory</label>
                                <input name="sub_catagory_name" type="text" class="form-control">                           
                            </div>           
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Add New Sub Catagory</button>
                            </div>                               
                        </form>                      
                    </div>
                </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="sub_cata_edit">
        <div class="modal-dialog">
            <div class="modal-content">
                    <div class="card">
                        <div class="card-header">
                            <div class="msg"></div>
                            <h4 class="card-title">Edit Catagory</h4>
                        </div>
                        <div class="card-body">
                         
                           <form action="{{ route('subcatagory.update', 1) }}" method="POST">
                            @csrf
                            @method('PUT')  
                            <div class="form-group">
                                <label>Sub Catagory Name</label>
                                <input name="sub_catagory_name" type="text" class="form-control" value="" >
                                <input name="sub_catagory_id" type="hidden" class="form-control" value="" >
                            </div> 
                            <div class="form-group">                                
                            <label>Catagory</label>
                            <select name="product_catagorie_id"  class="form-control" id="">                               
                                     <option value=""></option>  
                            </select>                                                        
                        </div>        
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Update Sub Catagory</button>
                            </div>                               
                        </form>   
                        </div>
                    </div>
            </div>
        </div>
        </div>
@endsection
