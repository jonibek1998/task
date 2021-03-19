@extends('layout')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Create New Email</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    {{Form::open(['route' => 'emails.store'])}}
      <div class="card-body">
          @include('errors')
        <div class="form-group">
          <label for="exampleInputEmail1">E-mail</label>
          <input type="text" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email">
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
