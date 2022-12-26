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
                <div class="card-header">Edit Product <span style="color: blue; font-weight:bolder; font-size:1.4rem">{{$product->model_name}}</span></div>

                <div class="card-body">
                    <form action="{{route('products.update', $product->id)}}" method="POST"  >
                        @csrf
                        @method('PUT')
                        <div class="form-group" style="display: grid; grid-template-columns:0.5fr 2.5fr; gap:0.1">
                            <label for="exampleInputEmail1">Model Name :</label>
                            <input value="{{$product->model_name}}" style="width: 25rem" type="text" class="form-control" id="exampleInputEmail1" name="model_name" aria-describedby="emailHelp" placeholder="Enter model name">
                        </div>
                        <div class="form-group" style="display: grid; grid-template-columns:0.5fr 2.5fr; gap:0.1">
                            <label for="more_details">More Details :</label>
                            <input value="{{$product->more_details}}" style="width: 25rem" type="text" class="form-control" id="more_details" name="more_details" aria-describedby="emailHelp" placeholder="Enter more details">
                        </div>
                        <div class="form-group" style="display: grid; grid-template-columns:0.5fr 2.5fr; gap:0.1">
                            <label for="exampleInputEmail1">Texture :</label>
                            <input value="{{$product->texture}}" style="width: 25rem" type="text" class="form-control" id="exampleInputEmail1" name="texture" aria-describedby="emailHelp" placeholder="Enter texure">
                        </div>
                        <div class="form-group" style="display: grid; grid-template-columns:0.5fr 2.5fr; gap:0.1">
                            <label for="exampleInputEmail1">Height :</label>
                            <input value="{{$product->height}}" style="width: 25rem" type="text" class="form-control" id="exampleInputEmail1" name="height" aria-describedby="emailHelp" placeholder="Enter height">
                        </div>
                        <div class="form-group" style="display: grid; grid-template-columns:0.5fr 2.5fr; gap:0.1">
                            <label for="exampleInputEmail1">Price :</label>
                            <input value="{{$product->price}}" style="width: 25rem" type="text" class="form-control" id="exampleInputEmail1" name="price" aria-describedby="emailHelp" placeholder="Enter price">
                        </div>
                        <div class="form-group" style="display: grid; grid-template-columns:0.5fr 2.5fr; gap:0.1">
                            <label for="exampleInputEmail1">Sale :</label>
                            <input value="{{$product->sale}}" style="width: 25rem" type="text" class="form-control" id="exampleInputEmail1" name="sale" aria-describedby="emailHelp" placeholder="Enter sale">
                        </div>
                        <div class="form-group" style="display: grid; grid-template-columns:0.5fr 2.5fr; gap:0.1">
                            <label for="exampleInputEmail1">Image URL :</label>
                            <input value="{{$product->image_url}}" style="width: 25rem" type="url" class="form-control" id="exampleInputEmail1" name="image_url" aria-describedby="emailHelp" placeholder="Enter image url">
                        </div>
                        <div class="form-group" style="display: grid; grid-template-columns:0.5fr 2.5fr; gap:0.1">
                            <label for="exampleInputEmail1">Company :</label>
                            <input value="{{$product->company_id}}" style="width: 25rem" type="number" class="form-control" id="exampleInputEmail1" name="company_id" aria-describedby="emailHelp" placeholder="Enter image url">
                        </div>


                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
