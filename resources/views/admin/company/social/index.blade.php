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
                        <h4 class="card-title">Social Links</h4>
                        @include('validate')
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-center mb-0">
                                <thead>
                                <tr>
                                    <th>Social Title</th>
                                    <th>Links Discription</th> 
                                    <th class="text-right">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($social_data as $social) 
                                <tr>
                                    <td>Facebook </td>
                                    <td>{{ $social -> facebook }}</td>
                                </tr>
                                <tr>
                                    <td>Twitter </td>
                                    <td>{{ $social -> twitter }}</td>
                                </tr>
                                <tr>
                                    <td>Linkedin</td>
                                    <td>{{ $social -> linkedin }}</td>
                                </tr>                              
                                <tr>
                                    <td>Google Plus </td>
                                    <td>{{ $social -> google_plas }}</td>
                                </tr>                               
                                <tr>
                                    <td>Instagram</td>
                                    <td>{{ $social -> instagram }}</td>
                                    <td  class="text-right">                                     
                                        <a class="btn btn-sm btn-warning"  data-toggle="modal" data-target="#edit_social_show" href="{{ $social -> id }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
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



<div class="modal fade" id="edit_social_show">
<div class="modal-dialog">
    <div class="modal-content">
            <div class="card">
                <div class="card-header">
                    <div class="msg"></div>
                    <h4 class="card-title">Edit Company Social Links</h4>
                </div>
                <div class="card-body">
                    @foreach ($social_data as $data) 
                    <form id="company_edit" action="{{ route('social.update', $data -> id) }}" method="POST">
                        @csrf
                        @method('PUT')                       
                        <div class="form-group">
                            <label>Facebook</label>
                            <input name="facebook" type="text" class="form-control" value="{{ $data -> facebook }}">
                        </div>
                        <div class="form-group">
                            <label>Twitter</label>
                            <input name="twitter" type="text" class="form-control" value="{{ $data -> twitter }}">
                        </div> 
                        <div class="form-group">
                            <label >Linkedin</label>
                            <input name="linkedin" type="text" class="form-control" value="{{ $data -> linkedin }}">
                        </div>                              
                        <div class="form-group">
                            <label>Google Plus</label>                          
                            <input name="google_plas" type="text" class="form-control" value="{{ $data -> google_plas }}">
                        </div>                       
                        <div class="form-group">
                            <label>Instagram</label>
                            <input name="instagram" type="text" class="form-control" value="{{ $data -> instagram }}">
                        </div>                        
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update social</button>
                        </div>                               
                    </form>
                    @endforeach
                </div>
            </div>
    </div>
</div>
</div>

@endsection
