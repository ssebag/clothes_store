@extends('layout.layout')
@section('content')
@section('title'){{'Our Products'}} @endsection
@section('name1')Our Product <span class="sr-only">(current)</span>@endsection



<div class="container" >

     <div class="card">
        <div class="card-header"><h4>Users</h4></div>

        <div class="card-body">

            <table class="table table-borderless table3 " style="font-size:1.2rem; z-index:1 ; color:black">
                <thead>
                <tr style=" color:black">
                    <th scope="col" >Model Name</th>
                    <th scope="col">More Details</th>
                    <th scope="col" >Company</th>
                    <th scope="col" >Number of Pieces</th>
                    <th scope="col" ></th>



                </tr>
                </thead>
                <tbody>
                    @foreach($user as $ur)
                    <tr>
                        <td scope="col">{{$ur->name}}</td>
                        <td scope="col">{{$ur->email}}</td>
                        <td scope="col">{{$ur->role->name}}</td>
                        <td scope="col">
                             @if ($ur->role_id == 2)
                             <a href="{{route('users.update',$ur->id)}}">make him ADMIN</a>
                             @else
                             <a href="{{route('users.update',$ur->id)}}">make him USER</a>
                             @endif
                        </td>
                        <td>
                            <form method="POST" action="{{route('users.destroy',$ur->id)}}" style="display: inline"  >
                                @method('Delete')
                                 @csrf
                                <input type="submit" class="btn btn-danger" value="Delete" id="delete"  href="#"  >
                            </form>
                            <a href="{{route('users.edit',$ur->id)}}" type="submit" class="btn btn-success" value="Edit" id="edit"  href="#"  >Edit</a>

                        </td>

                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>



</div>
@endsection
