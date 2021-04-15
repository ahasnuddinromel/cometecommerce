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
                        <a class="btn btn-sm btn-success" data-toggle="modal" data-target="#add_slider" href="#">Add New Slider</i></a><hr> <br>
                        <h4 class="card-title">Slider</h4>
                        @include('validate')
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-center mb-0">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Discription</th> 
                                    <th class="text-right">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($slider_data as $info) 
                                <tr>
                                    <td>Slider Title </td>
                                    <td>{{ $info -> slider_title }}</td>
                                </tr>
                                <tr>
                                    <td>Slider Discription </td>
                                    <td>{{ $info -> slider_discription }}</td>
                                </tr>
                                <tr>
                                    <td>Slider Image </td>
                                    <td>
                                        <img style="width: 300px" src="{{ URL::to('frontend/assets/images/slider')  .'/'. $info -> slider_image }}" alt="logo">
                                    </td>
                                </tr>
                                 <tr>
                                    <td  class="text-right">                                        
                                        <a edit_id ='{{$info -> id}}' class="btn btn-sm btn-warning edit_slider_modal" href="#" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>                                            
                                        <form style="display: inline-block" action="{{route('slider.destroy', $info -> id)}}" method="post">
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

{{--Add New Slider--}}
<div class="modal fade" id="add_slider">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="card">                   
                    <div class="card-header">
                        <div class="msg"></div>
                        <h4 class="card-title">Add New Slider</h4>
                    </div>
                    <div class="card-body">                       
                        <form id="company_edit" action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf                                        
                            <div class="form-group">
                                <label>Slider Title</label>
                                <input name="slider_title" type="text" class="form-control">                           
                            </div>
                            <div class="form-group">
                                <label>Slider Discription</label>
                                <input name="slider_discription" type="text" class="form-control">
                            </div>                               
                            <div class="form-group">
                                <label>Slider Image</label>                              
                                <input name="slider_image" type="file" class="form-control" value="">
                            </div>                      
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Add New Slider</button>
                            </div>                               
                        </form>                      
                    </div>
                </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="slider_edit">
        <div class="modal-dialog">
            <div class="modal-content">
                    <div class="card">
                        <div class="card-header">
                            <div class="msg"></div>
                            <h4 class="card-title">Edit Slider</h4>
                        </div>
                        <div class="card-body">
                         
                           <form action="{{ route('slider.update', 1) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')                                      
                            <div class="form-group">
                                <label>Slider Title</label>
                                <input name="slider_title" type="text" class="form-control" value="">
                                <input name="edit_id" type="hidden" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Slider Discription</label>
                                <input name="slider_discription" type="text" class="form-control" value="" >
                            </div>                               
                            <div class="form-group">
                                <label>Slider Image</label>
                                <img style="width: 100px" src="" alt="">
                                <input name="slider_image" type="hidden" class="form-control" value="">
                                <input name="new_slider_image" type="file" class="form-control">
                            </div>                      
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Update Slider</button>
                            </div>                               
                        </form>   
                        </div>
                    </div>
            </div>
        </div>
        </div>

@endsection
