@extends('layout.layout')
@section('content')

<a href="{{route('products.show',$data->id)}}" type="submit" class="btn btn-danger" style="margin-left:1rem">Return to Our Products if You Are Finish Add</a>

<div class="container" style="margin-left:30%">

    <div class="row">

        <form action="{{route('productt.add',$data->id)}}" method="POST"  >
            @csrf
            <div class="form-group" style="display: grid; grid-template-columns:0.2fr 2.5fr; gap:0.1">
                <label for="exampleInputEmail1" style="color:aliceblue;font-weight:bolder">color :</label>
                <input type="text" style="width: 25rem" name="color" list="color"/>
                <datalist id="color" >
                    <option value="red">red</option>
                    <option value="green">green</option>
                    <option value="black">black</option>
                    <option value="grey">grey</option>
                    <option value="white">white</option>
                    <option value="yellow">yellow</option>
                    <option value="pink">pink</option>
                    <option value="purple">purple</option>
                    <option value="gold">gold</option>
                    <option value="selver">yellow</option>

                </datalist>


            </div>
            <div class="form-group" style="display: grid; grid-template-columns:0.2fr 2.5fr; gap:0.1">
                <label for="exampleInputEmail1" style="color:aliceblue;font-weight:bolder">size :</label>
                <input style="width: 25rem" type="text" class="form-control" id="exampleInputEmail1" name="size" aria-describedby="emailHelp" placeholder="Enter Size">
            </div>
            <div class="form-group" style="display: grid; grid-template-columns:0.2fr 2.5fr; gap:0.1">
                <label for="exampleInputEmail1" style="color:aliceblue;font-weight:bolder">Number of Pieces :</label>
                <input style="width: 25rem" type="number" class="form-control" id="exampleInputEmail1" name="number_of_pieces" aria-describedby="emailHelp" placeholder="Enter Number">
            </div>

            <button type="submit" class="btn btn-primary" style="width: 30rem; margin-top:1rem; margin-left:0.5rem">Readd Another</button>

        </form>
    </div>


</div>

@endsection
