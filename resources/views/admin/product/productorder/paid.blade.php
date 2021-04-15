@extends('admin.layouts.app')

@section('main-content')


    <div class="page-wrapper">
			
        <div class="content container-fluid"> 
        <div class="row">            
            <div class="col-sm-12">               
                <div class="card">
                    <div class="card-header">                        
                        <h4 class="card-title">Pre Paid List</h4>                        
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="datatable table table-stripped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product ID</th>
                                        <th>Customer Name</th>
                                        <th>Mobile</th>
                                        <th>Quantity</th>
                                        <th>Product name</th>
                                        <th>Product Size</th>
                                        <th>Payment Method</th>
                                        <th>Address</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>                                   
                                    <tr>
                                        <td>01</td>
                                        <td></td>                                        
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><img style="width: 50px;" src="" alt=""></td>
                                        <td>
                                            <a class="btn btn-sm btn-primary" href="#">Painding</a>
                                            <a class="btn btn-sm btn-warning" href="#">Complite</a>
                                        </td>
                                    </tr>    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>			
</div>
    <!-- /Add Product Modal -->	
@endsection
