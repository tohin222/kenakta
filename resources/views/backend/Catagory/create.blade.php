@extends('backend.layouts.master')
@section('contains')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Catagory Dashboard
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- SELECT2 EXAMPLE -->
    <div class="box box-default">

      <!-- /.box-header -->
      <div class="box-body">
        <div class="row">
          <div class="col-md-12 col-12">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
          @endif
            <form action="{{route('catagory.store')}}" method="post" enctype="multipart/form-data">
              @csrf
                  <div class="form-group">
                    <label for="inputEmail4">Name:</label>
                    <input type="text" class="form-control" name="name" placeholder="Title Text">
                  </div>
                    @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
                  <div class="form-group">
						<h5>Description:<span class="text-danger"></span></h5>
						<div class="controls">
							<textarea id="textarea" class="form-control" required placeholder="Textarea text" name="description"></textarea>
						</div>
					</div>
                @error('description')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
                  <div class="form-group">
                    <label for="inputEmail4">Image:</label>
                    <input type="file" class="form-control" name="image">
                  </div>
                  
                <button type="submit" class="btn btn-primary" style="width: 100% !important";>SUBMIT</button>
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