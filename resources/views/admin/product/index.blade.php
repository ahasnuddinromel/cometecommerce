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
                                <a class="btn btn-primary"  href="{{ route('product.create') }}">Add Products</a>
                                <br>
                                <br>
                                <h4 class="card-title">Product List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Product ID</th>
                                                <th>Product</th>                                               
                                                <th>Quantity</th>
                                                <th>Tread Price</th>
                                                <th>Selse Price</th>
                                                <th>Image</th>
                                                <th class="text-right">Action</th>
                                            </tr> 
                                         </thead>
                                        <tbody>
                                            @foreach ($product as $pro)  
                                        <tr>
                                            
                                            <td>{{ $loop -> index + 1 }}</td>
                                            <td>{{ $pro-> pid }}</td>
                                            <td>{{ $pro-> pname }}</td>                                           
                                            <td>{{ $pro-> quantity }}</td>                                           
                                            <td>{{ $pro-> tp }}/=</td>                                           
                                            <td>{{ $pro-> sp }}/=</td>
                                            <td><img style="width: 50px;" src="{{ URL::to('frontend/assets/images/product')  .'/'.$pro-> photo }}" alt=""></td>
                                          <td>
                                                {{--<div class="status-toggle">
                                                    <input  type="checkbox" status_id="{{ $pro -> id }}"  {{ ( $pro -> status == true ? 'checked="checked"' : '' ) }} id="cat_status_{{ $loop -> index + 1 }}" class="check cat_check" >
                                                    <label for="cat_status_{{ $loop -> index + 1 }}" class="checktoggle">checkbox</label>
                                                </div>--}}
                                            </td>
                                            <td  class="text-right">                                             
                                              <a class="btn btn-sm btn-warning edit_product" href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                              <form style="display: inline-block" action="{{route('product.destroy', $pro -> id)}}" method="post">
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
@endsection
