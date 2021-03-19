@extends('layout')
@section('content')

<div class="row">
    <div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Friends Contact Table <a href="{{route('contacts.create')}}" class="btn btn-success mb-2">Create Contact</a></h3>

            <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 500px;">
                <form action="{{route('search')}}" method="get" style="display: inline-flex">
                    <input type="text" name="s" class="form-control float-right @error('s') is-invalid  @enderror" placeholder="Search">

                    <button type="submit" class="btn btn-outline-success ml-2">search</button>
                </form>
            </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                <th>First</th>
                <th>Last</th>
                <th>E-mail</th>
                <th>Phone</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if (count($contacts) > 0)
                @foreach ($contacts as $contact)
                <tr>
                <td>{{$contact->firstname}}</td>
                <td>{{$contact->lastname}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->phone}}</td>
                <td>
                    <a href="{{route('contacts.show', $contact->slug)}}" class="btn btn-sm btn-info">view</a>
                    <a href="{{route('contacts.edit', $contact->id)}}" class="btn btn-sm btn-light">edit</a>
                    {{Form::open(['route'=>['contacts.destroy', $contact->id], 'method'=>'DELETE'])}}
                    <button onclick="return confirm('are you sure?')" type="submit" class="btn btn-sm btn-danger">
                        delete
                    </button>
                {{Form::close()}}
                </td>
                </tr>
                @endforeach
                {{$contacts->links()}}
                @else
                <div class="alert alert-warning">
                    <strong>Sorry!</strong> No Contacts Found.
                </div>
                @endif
            </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        </div>
    </div>
</div>
</div>
</div>

@endsection


