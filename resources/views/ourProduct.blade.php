@extends('layout.layout')
@section('content')
@section('title'){{'Our Products'}} @endsection
@section('name1')Our Product <span class="sr-only">(current)</span>@endsection

@if (session('alert'))
<div class="alert alert-primary alert1" style=" position: absolute;top: 2%;left: 41%;" >
   {{session('alert')}}

</div>
@endif
<div class="container-fluid" style=" margin-left:1rem;display:grid ;gap:1.8rem;grid-template-columns:1fr 1fr 1fr 1fr;">
    @foreach ($data as $product)
     <div class="card" style="width: 18rem; padding-bottom:2rem;">
        <img class="card-img-top " style="height: 17rem; width:15rem; align-self: center; " src="{{$product->image_url}}" alt="Card image cap">
        <div class="card-body"  style="font-size:1.2rem">
          <h5 class="card-title" style="text-shadow: 1px 1px 15px blue; font-weight: bolder;">{{$product->model_name}}</h5>
          <p class="card-text "><span style="color:rgb(38, 23, 126);font-weight: bolder; margin-right:0.2rem">Price :</span>{{$product->price}} </p>

          <p class="card-text " ><span style="color:rgb(38, 23, 126);font-weight: bolder;margin-right:0.5rem">Sale :</span>{{$product->sale}}</p>
          {{-- <p class="card-text " ><span style="color:rgb(38, 23, 126);font-weight: bolder;margin-right:0.5rem">company :</span>{{$product->company->address}}</p> --}}

          <a href="{{route('products.show',$product->id)}}" class="btn btn-primary ">For More Details</a>
          @if(Auth::id())
          @if (Auth::user()->role_id == 1)
               <a href="{{route('products.edit',$product->id)}}" class="btn btn-primary ">Edit</a>
          @endif
          @endif

        </div>
      </div>
    @endforeach

</div>
@endsection
