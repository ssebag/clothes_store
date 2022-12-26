@extends('layout.layout')
@section('content')
@section('title'){{'Add New Product'}} @endsection
@section('name1')Our Product <span class="sr-only">(current)</span>@endsection

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit User <span style="color: rgb(24, 2, 105); font-weight:bolder">{{$user->name}}</span> </div>

                <div class="card-body">
                    <form action="{{route('users.update2',$user->id)}}" method="POST"  >
                        @csrf
                        @method('PUT')
                        <div class="form-group" style="display: grid; grid-template-columns:0.5fr 2.5fr; gap:0.1">
                            <label for="exampleInputEmail1">Name :</label>
                            <input value="{{$user->name}}" style="width: 25rem" type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Enter model name">
                        </div>
                        <div class="form-group" style="display: grid; grid-template-columns:0.5fr 2.5fr; gap:0.1">
                            <label for="exampleInputEmail1">Email :</label>
                            <input value="{{$user->email}}" style="width: 25rem" type="text" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter model name">
                        </div>


                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
