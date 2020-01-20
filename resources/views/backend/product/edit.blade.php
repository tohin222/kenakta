@extends('backend.layouts.master')
@section('contains')
   <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Product Dashboard
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
            <form action="{{route('product.update',$editproduct->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                    <label for="inputEmail4">Title:</label>
                     <input type="hidden" name="id" value="{{$editproduct->id}}">
                  <div class="form-group">
                    <input type="text" class="form-control" name="title" placeholder="Title Text" value="{{$editproduct->title}}">
                  </div>
                    @error('title')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
                  <div class="form-group">
						<h5>Description:<span class="text-danger"></span></h5>
						<div class="controls">
							<textarea id="textarea" class="form-control" required placeholder="Textarea text" name="textarea" value="{{$editproduct->textarea}}"></textarea>
						</div>
					</div>
                @error('textarea')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
            <div class="form-group">
                    <label for="inputEmail4">Quantity:</label>
                    <input type="number" class="form-control" name="quantity" value="{{$editproduct->quantity}}">
                  </div>
                        @error('Quantity')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
                    <div class="form-group">
                    <label for="inputEmail4">Price:</label>
                    <input type="number" class="form-control" name="price" value="{{$editproduct->price}}">
                  </div>
                       @error('price')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
                   <div class="form-group">
                    <label for="inputEmail4">Offer Price:</label>
                    <input type="number" class="form-control" name="offer_price" value="{{$editproduct->offer_price}}">
                  </div>
                  @error('offer_price')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
                    <div class="form-group">
						<h5>Status:<span class="text-danger"></span></h5>
						<div class="controls">
							<textarea  id="textarea" class="form-control" required placeholder="Textarea text" name="status" value="{{$editproduct->status}}"></textarea>
						</div>
					</div>
            @error('status')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror

                  <div class="form-group">
                    <label for="inputEmail4">Image:</label>
                    <input type="file" class="form-control" name="image" value="{{$editproduct->image}}">
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