@extends('backend.layouts.master')
@section('contains')
      <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Product Table Dashboard:
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
 @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
          @endif
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Offer Price</th>
                                            <th>Status</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($myproduct as $showproduct)              
                                        <tr>
                                            <td>{{$showproduct->title}}</td>
                                            <td> {{$showproduct->textarea}}</td>
                                            <td>{{$showproduct->quantity}}</td>
                                            <td>{{$showproduct->price}}</td>
                                            <td>{{$showproduct->offer_price}}</td>
                                            <td>{{$showproduct->status}}</td>
                                            <td><img src="{{asset('/storage')}}/{{$showproduct->image}}" alt="" height="40" width="140"></</td>

                                            <td>
                                             

                                            <form action="{{url('product', [$showproduct->id])}}" method="POST">
                          {{method_field('DELETE')}}
                          @csrf
                           <a class="btn btn-warning" href="{{ route('product.edit', $showproduct->id) }}">Edit</a>
 <input type="submit" class="btn btn-danger" value="Delete"/>
 
                       </form>

                                            
                                            </td>
                                        </tr>
   @endforeach
                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
@endsection