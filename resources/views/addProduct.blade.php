@extends('layout.layout')
@section('content')
@section('title'){{'Add New Product'}} @endsection
@section('name1')Our Product <span class="sr-only">(current)</span>@endsection

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Product</div>

                <div class="card-body">
                    <form action="{{url('/products/create')}}" method="POST"  >
                        @csrf
                        <div class="form-group" style="display: grid; grid-template-columns:0.5fr 2.5fr; gap:0.1">
                            <label for="exampleInputEmail1">Model Name :</label>
                            <input style="width: 25rem" type="text" class="form-control" id="exampleInputEmail1" name="model_name" aria-describedby="emailHelp" placeholder="Enter model name">
                        </div>
                        <div class="form-group" style="display: grid; grid-template-columns:0.5fr 2.5fr; gap:0.1">
                            <label for="more_details">More Details :</label>
                            <input style="width: 25rem" type="text" class="form-control" id="more_details" name="more_details" aria-describedby="emailHelp" placeholder="Enter more details">
                        </div>
                        <div class="form-group" style="display: grid; grid-template-columns:0.5fr 2.5fr; gap:0.1">
                            <label for="exampleInputEmail1">Texture :</label>
                            <input style="width: 25rem" type="text" class="form-control" id="exampleInputEmail1" name="texture" aria-describedby="emailHelp" placeholder="Enter texure">
                        </div>
                        <div class="form-group" style="display: grid; grid-template-columns:0.5fr 2.5fr; gap:0.1">
                            <label for="exampleInputEmail1">Height :</label>
                            <input style="width: 25rem" type="text" class="form-control" id="exampleInputEmail1" name="height" aria-describedby="emailHelp" placeholder="Enter height">
                        </div>
                        <div class="form-group" style="display: grid; grid-template-columns:0.5fr 2.5fr; gap:0.1">
                            <label for="exampleInputEmail1">Price :</label>
                            <input style="width: 25rem" type="text" class="form-control" id="exampleInputEmail1" name="price" aria-describedby="emailHelp" placeholder="Enter price">
                        </div>
                        <div class="form-group" style="display: grid; grid-template-columns:0.5fr 2.5fr; gap:0.1">
                            <label for="exampleInputEmail1">Sale :</label>
                            <input style="width: 25rem" type="text" class="form-control" id="exampleInputEmail1" name="sale" aria-describedby="emailHelp" placeholder="Enter sale">
                        </div>
                        <div class="form-group" style="display: grid; grid-template-columns:0.5fr 2.5fr; gap:0.1">
                            <label for="exampleInputEmail1">Image URL :</label>
                            <input style="width: 25rem" type="url" class="form-control" id="exampleInputEmail1" name="image_url" aria-describedby="emailHelp" placeholder="Enter image url">
                        </div>
                        <div class="form-group" style="display: grid; grid-template-columns:0.5fr 2.5fr; gap:0.1">
                            <label for="exampleInputEmail1">Company :</label>
                            <input style="width: 25rem" type="number" class="form-control" id="exampleInputEmail1" name="company_id" aria-describedby="emailHelp" placeholder="Enter company">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
