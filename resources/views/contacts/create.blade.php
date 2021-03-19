@extends('layout')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Create New Contact</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    {{Form::open(['route' => 'contacts.store'])}}
      <div class="card-body">
          @include('errors')
        <div class="form-group">
          <label for="exampleInputEmail1">First Name</label>
          <input type="text" class="form-control" name="firstname" id="exampleInputEmail1" placeholder="Enter name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Last Name</label>
          <input type="text" class="form-control" name="lastname" id="exampleInputEmail1" placeholder="Enter lastname">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">E-mail</label>
          <input type="text" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Phone</label>
          <input type="text" class="form-control" name="phone" id="exampleInputEmail1" placeholder="Enter phone">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    {{Form::close()}}
  </div>
@endsection
