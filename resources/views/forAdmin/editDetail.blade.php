@extends('layout.layout')
@section('content')
@section('title'){{'Add New Product'}} @endsection
@section('name1')Our Product <span class="sr-only">(current)</span>@endsection
@php
    $i = 1;
@endphp
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Details </div>

                <div class="card-body">
                    <form action="{{route('products.update.detail', $col_si->id)}}" method="POST"  >
                        @csrf
                        @method('PUT')
                        <div class="form-group" style="display: grid; grid-template-columns:0.5fr 2.5fr; gap:0.1">
                            <label for="exampleInputEmail1">color {{$i++}} :</label>
                            <input value="{{$col_si->color}}" style="width: 25rem" type="text" class="form-control" id="exampleInputEmail1" name="color" aria-describedby="emailHelp" placeholder="Enter image url">
                        </div>
                        <div class="form-group" style="display: grid; grid-template-columns:0.5fr 2.5fr; gap:0.1">
                            <label for="exampleInputEmail1">size :</label>
                            <input value="{{$col_si->size}}" style="width: 25rem" type="text" class="form-control" id="exampleInputEmail1" name="size" aria-describedby="emailHelp" placeholder="Enter image url">
                        </div>
                        <div class="form-group" style="display: grid; grid-template-columns:0.5fr 2.5fr; gap:0.1">
                            <label for="exampleInputEmail1">Number of Pieces :</label>
                            <input value="{{$col_si->number_of_pieces}}" style="width: 25rem" type="text" class="form-control" id="exampleInputEmail1" name="number_of_pieces" aria-describedby="emailHelp" placeholder="Enter image url">
                        </div>


                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
