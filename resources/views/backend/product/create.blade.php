@extends('backend.layouts.master')
@section('contains')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Basic mSells
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- SELECT2 EXAMPLE -->
    <div class="box box-default">

      <!-- /.box-header -->
      <div class="box-body">
        <div class="row">
          <div class="col-md-6 col-12">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
          @endif
            <form action="{{route('header.store')}}" method="post" enctype="multipart/form-data">
              @csrf
                  <div class="form-group">
                    <label for="inputEmail4">Facebook</label>
                    <input type="text" class="form-control" name="facebook">
                  </div>
                  <div class="form-group">
                    <label for="inputEmail4">Image</label>
                    <input type="file" class="form-control" name="image">
                  </div>
                <button type="submit" class="btn btn-primary">Add</button>
              </form>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
    

  </section>
@endsection