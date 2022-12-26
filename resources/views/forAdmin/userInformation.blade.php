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
                    <th scope="col" >user name</th>
                    <th scope="col">emails</th>
                    <th scope="col" >role</th>
                    <th scope="col" >Is Deleted?</th>




                </tr>
                </thead>
                <tbody>
                    @foreach($user as $ur)
                    <tr>
                        <td scope="col">{{$ur->name}}</td>
                        <td scope="col">{{$ur->email}}</td>
                        <td scope="col">{{$ur->role->name}}</td>
                        <td scope="col">
                            @if ($ur->deleted_at == null)
                                not Deleted
                            @else
                              Deleted
                            @endif
                        </td>

                        </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>



</div>
@endsection
