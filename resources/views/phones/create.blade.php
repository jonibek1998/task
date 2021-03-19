@extends('layout')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Create New Phone number</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    {{Form::open(['route' => 'phones.store'])}}
      <div class="card-body">
          @include('errors')
        <div class="form-group">
          <label for="exampleInputEmail1">Phone Number</label>
          <input type="text" class="form-control" name="phone" id="exampleInputEmail1" placeholder="Enter phone">
        </div>
        <div class="form-group">
            <label>select contact</label>
            {{Form::select('contact_id',
            $contacts,
            null,
            ['class' => 'form-control select2'])}}
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    {{Form::close()}}
  </div>
@endsection
