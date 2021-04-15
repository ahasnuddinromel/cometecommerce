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
                                <h4 class="card-title">Company Information</h4>
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
                                            @foreach ($com_data as $info) 
                                        <tr>
                                            <td>Company Title </td>
                                            <td>{{ $info -> title }}</td>
                                        </tr>
                                        <tr>
                                            <td>Company Name </td>
                                            <td>{{ $info -> company_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Company Logo </td>
                                            <td><img style="width: 50px" src="{{ URL::to('frontend/assets/images/')  .'/'. $info -> company_logo }}" alt="logo"></td>
                                        </tr>
                                        <tr>
                                            <td>Company Email </td>
                                            <td>{{ $info -> email }}</td>
                                        </tr>
                                        <tr>
                                            <td>Company Contact </td>
                                            <td>{{ $info -> phone_number }}</td>
                                        </tr>
                                        <tr>
                                            <td>Company Slogan </td>
                                            <td>{{ $info -> slogan }}</td>
                                        </tr>
                                        <tr>
                                            <td>Company Discription </td>
                                            <td>{{ $info -> company_discription }}</td>
                                        </tr>
                                        <tr>
                                            <td>Company Address </td>
                                            <td>{{ $info -> company_address }}</td>
                                        </tr>
                                        <tr>
                                            <td>Company Location Url </td>
                                            <td>{{ $info -> location_url }}</td>
                                        </tr>
                                        <tr>
                                            <td>Company Started At </td>
                                            <td>{{ $info -> created_at }}</td> 
                                            <td  class="text-right">                                             
                                              <a class="btn btn-sm btn-warning"  data-toggle="modal" data-target="#edit_company_show" href="{{ $info -> id }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>                                            
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



    <div class="modal fade" id="edit_company_show">
        <div class="modal-dialog">
            <div class="modal-content">
                    <div class="card">
                        <div class="card-header">
                            <div class="msg"></div>
                            <h4 class="card-title">Edit Company Info</h4>
                        </div>
                        <div class="card-body">
                            @foreach ($com_data as $data) 
                            <form id="company_edit" action="{{ route('company.update', $data -> id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                               
                                <div class="form-group">
                                    <label>Company Title</label>
                                    <input name="title" type="text" class="form-control" value="{{ $data -> title }}">
                                </div>
                                <div class="form-group">
                                    <label>Company Name</label>
                                    <input name="company_name" type="text" class="form-control" value="{{ $data -> company_name }}">
                                </div>                               
                                <div class="form-group">
                                    <label>Company Logo</label>
                                    <img style="width: 100px" src="{{ $data -> company_logo }}" alt="">
                                    <input name="company_logo" type="hidden" value="{{ $data -> company_logo }}">
                                    <input name="new_company_logo" type="file" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label >Company Email</label>
                                    <input name="email" type="text" class="form-control" value="{{ $data -> email }}">
                                </div>
                                <div class="form-group">
                                    <label>Contact Number</label>
                                    <input name="phone_number" type="text" class="form-control" value="{{ $data -> phone_number }}">
                                </div>
                                <div class="form-group">
                                    <label>Company Slogan</label>
                                    <input name="slogan" type="text" class="form-control" value="{{ $data -> slogan }}">
                                </div>
                                <div class="form-group">
                                    <label>Company Discription</label>                                    
                                    <input name="company_discription" type="text" class="form-control" value="{{ $data -> company_discription }}" >
                                </div>
                                <div class="form-group">
                                    <label>Company Address</label>                                    
                                    <input name="company_address" type="text" class="form-control" value="{{ $data -> company_address }}" >
                                </div>
                                <div class="form-group">
                                    <label>Company Location</label>                                    
                                    <input name="location_url" type="text" class="form-control" value="{{ $data -> location_url }}" >
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Update Info</button>
                                </div>                               
                            </form>
                            @endforeach
                        </div>
                    </div>
            </div>
        </div>
    </div>

@endsection
