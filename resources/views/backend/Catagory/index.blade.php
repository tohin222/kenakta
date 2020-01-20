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
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($varCatagory as $showCatagory)              
                                        <tr>
                                            <td>{{$showCatagory->name}}</td>
                                            <td> {{$showCatagory->description}}</td>
                                            
                                            <td><img src="{{asset('/storage')}}/{{$showCatagory->image}}" alt="" height="40" width="140"></</td>

                                            <td>
                                            
                                            
                    <form action="{{url('catagory', [$showCatagory->id])}}" method="POST">
                          {{method_field('DELETE')}}
                          @csrf
                           <a class="btn btn-warning" href="{{route('catagory.edit', $showCatagory->id) }}">edit</a>
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