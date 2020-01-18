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
          <div class="col-md-12 col-12">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
          @endif
                <table class="table table-hover table-responsive">
                  <thead>
                    <tr>
                      <th scope="col">Action</th>
                      <th scope="col">Facebook</th>
                      <th scope="col">Linkdin</th>
                      <th scope="col">twitter</th>
                      <th scope="col">Linkdin</th>
                      <th scope="col">pinterest</th>
                      <th scope="col">google</th>
                      <th scope="col">number</th>
                      <th scope="col">Image</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                  
                   
                   
                  </tbody>
                </table>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
    

  </section>
@endsection