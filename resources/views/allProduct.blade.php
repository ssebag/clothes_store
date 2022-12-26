@extends('layout.layout')
@section('content')

<div class="container-fluid" style="direction:rtl">
    <div class="row" style="">
        <div style=" position:relative; padding-top:4%">

            <table class="table table-borderless" style="font-size:1.2rem; ">
                <thead>
                  <tr>
                    <th scope="col" style="width: 11rem" >Model Number</th>
                    <th scope="col" style="width: 11rem" >More Details</th>
                    <th scope="col" style="width: 11rem" >Texture</th>
                    <th scope="col" style="width: 11rem" >Height</th>
                    <th scope="col" style="width: 11rem" >Price</th>
                    <th scope="col" style="width: 11rem" >Sale</th>
                    <th scope="col" style="width: 11rem" ></th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col">{{$dataa->model_name}}</td>
                        <td scope="col">{{$dataa->more_details}}</td>
                        <td scope="col">{{$dataa->texture}}</td>
                        <td scope="col">{{$dataa->height}}</td>
                        <td scope="col">{{$dataa->price}}</td>
                        <td scope="col">{{$dataa->sale}}</td>
                        <td scope="col"><a  href="{{url('/products/adddetails/' .$dataa->id)}}" class="btn btn-success">Add Color & Size</a>
                        </td>
                    </tr>
                </tbody>
            </table>




       </div>
    </div>
    <div class="row " style="justify-content: center;">
        <img src="{{$dataa->image_url}}" alt="" style="height: 12rem; width:15rem">
    </div>


</div>

@endsection
