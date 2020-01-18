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
            <form action="{{route('header.update',$header->id)}}" method="post" enctype="multipart/form-data">
              @csrf
                @method('PUT')
                  <div class="form-group">
                    <label for="inputEmail4">Facebook</label>
                  <input type="hidden" class="form-control" name="id" value="{{$header->id}}">
                    <input type="text" class="form-control" name="facebook" value="{{$header->facebook}}">
                  </div>
                  <div class="form-group">
                    <label for="inputEmail4">Linkdin</label>
                    <input type="text" class="form-control" name="linkdin" value="{{$header->linkdin}}">
                  </div>
                  <div class="form-group">
                    <label for="inputEmail4">Twitter</label>
                    <input type="text" class="form-control" name="twitter" value="{{$header->twitter}}">
                  </div>
                  <div class="form-group">
                    <label for="inputEmail4">Pinterest</label>
                    <input type="text" class="form-control" name="pinterest" value="{{$header->pinterest}}">
                  </div>
                  <div class="form-group">
                    <label for="inputEmail4">Google+</label>
                    <input type="text" class="form-control" name="google" value="{{$header->google}}">
                  </div>
                  <div class="form-group">
                    <label for="inputEmail4">Mobile Number</label>
                    <input type="text" class="form-control" name="number" value="{{$header->number}}">
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