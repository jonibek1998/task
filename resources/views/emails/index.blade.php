@extends('layout')
@section('content')

    <div class="row">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{$data->firstname}}'s email address</h3>

                <div class="card-tools">
                    <a href="{{route('emails.create')}}" class="btn btn-info">create</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                        <tr>
                        <th>Emails</th>
                        <th style="width: 40px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($contactemails) < 1)
                        <div class="alert alert-warning">
                            <strong>Sorry!</strong> No addition email address Found.
                        </div>
                        @else
                        @foreach ($contactemails as $item)
                        <tr>
                        <td>{{$item->email}}</td>
                        <td>
                            {{Form::open(['route'=>['emails.destroy', $item->id], 'method'=>'DELETE'])}}
                            <button onclick="return confirm('are you sure?')" type="submit" class="btn btn-sm btn-danger">
                                delete
                            </button>
                            {{Form::close()}}
                        </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{$data->firstname}}'s phone numbers</h3>

                    <div class="card-tools">
                        <a href="{{route('phones.create')}}" class="btn btn-info">create</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                            <tr>
                            <th>Phones</th>
                            <th style="width: 40px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($contactphones) < 1)
                            <div class="alert alert-warning">
                                <strong>Sorry!</strong> No addition phone number Found.
                            </div>
                            @else
                            @foreach ($contactphones as $item)
                            <tr>
                            <td>{{$item->phone}}</td>
                            <td>
                                {{Form::open(['route'=>['phones.destroy', $item->id], 'method'=>'DELETE'])}}
                                <button onclick="return confirm('are you sure?')" type="submit" class="btn btn-sm btn-danger">
                                    delete
                                </button>
                                {{Form::close()}}
                            </td>
                            </tr>
                            @endforeach

                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
@endsection
