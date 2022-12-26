@extends('layout.layout')
@section('content')
@section('title') {{$data->more_details}}  {{$data->model_name}} @endsection
@section('name1')Our Product <span class="sr-only">(current)</span>@endsection


<div class="container" style="display:grid ;gap:6rem;grid-template-columns:0.5fr 0.8fr ;">


    <div class="row" style="">
        <img src="{{$data->image_url}}" class="w-100" alt="" style="height: 30rem">
    </div>
    <div class="row" style="">
        <div style=" position:relative; padding-top:4%">
         <form action="{{url('carts/add'.$data->id),$data->id}}" method="POST">
            @csrf
            <table class="table table-borderless" style="font-size:1.2rem; ">
                <thead>
                  <tr>
                    <th scope="col" style="width: 11rem" >Model Number :</th>
                    <th scope="col">{{$data->model_name}}</th>
                  </tr>
                </thead>
                <tbody>

                    <tr>
                        <th scope="col">Details :</th>
                        <td scope="col">{{$data->more_details}}</td>
                   </tr>

                   <tr>
                    <th scope="col">Texture :</th>
                    <td scope="col">{{$data->texture}}</td>
                   </tr>

               <tr>
                    <th scope="col">Height :</th>
                    <td scope="col">{{$data->height}}</td>
                 </tr>   <tr>
                    <th scope="col">Price :</th>
                    <td scope="col">{{$data->price}}</td>
                 </tr>
                 <tr>
                    <th scope="col">Sale :</th>
                    <td scope="col">{{$data->sale}}</td>
                 </tr>
                 @if(Auth::id())
                 @if (Auth::user()->role_id == 1)
                 <th scope="col">Company :</th>
                 <td scope="col">{{$data->company->name}}</td>

                 @endif
                 @endif


                 <table class="table table-borderless " style="font-size:1.2rem; ">
                    <tbody>
                        <thead>
                            <tr>
                              <th scope="col" style="width: 11rem" >Colors & Sizes :</th>
                             </tr>
                          </thead>


                 @if(Auth::id())
                 @if (Auth::user()->role_id == 1)
                  @foreach ($details as $da )
                  <tr >
                    <th class="px-4" scope="col" style="color:{{$da->color}}; width: 20rem ; font-weight:bold; text-shadow:1px 2px 2px black"><span style="color:white"><iconify-icon icon="game-icons:beveled-star"></iconify-icon></span>
                     {{$da->color}} :
                     <span style="">{{$da->size}}</span>
                     <span style="color:white;">|| Number : {{$da->number_of_pieces}}</span></th>

                            <th class="px-2" scope="col" style="  ;color:{{$da->color}}; font-weight:bold; text-shadow:1px 2px 2px black">
                            <a href="{{route('products.edit.detail',$da->id)}}" class="btn btn-primary">edit</a>
                            <form method="POST" action="{{route('products.delete.detail',$da->id)}}" style="display: inline"  >
                                @method('Delete')
                                @csrf
                                <input type="submit" class="btn btn-danger mx-4" value="Delete" id="delete"  href="#"  >
                            </form>
                            </th>


                  </tr>
                   @endforeach


                 @elseif(Auth::user()->role_id == 2)
                            @foreach ($detailsss as $da=>$d )
                                <tr >
                                    <th class="px-4" scope="col" style=" width: 11rem ;color:{{$da}}; font-weight:bold; text-shadow:1px 2px 2px black"><span style="color:white"><iconify-icon icon="game-icons:beveled-star"></iconify-icon></span>
                                    {{$da}} :</th>
                                    @foreach ($d as $si )
                                        <td style=" width: 11rem ;color:{{$da}}; font-weight:bold; text-shadow:1px 2px 2px black">{{$si->size}}</td>
                                    @endforeach

                                </tr>
                            @endforeach
                  @endif
                @else
                        @foreach ($detailsss as $da=>$d )
                        <tr >
                            <th class="px-4" scope="col" style=" width: 11rem ;color:{{$da}}; font-weight:bold; text-shadow:1px 2px 2px black"><span style="color:white"><iconify-icon icon="game-icons:beveled-star"></iconify-icon></span>
                            {{$da}} :</th>
                            @foreach ($d as $si )
                                <td style=" width: 11rem ;color:{{$da}}; font-weight:bold; text-shadow:1px 2px 2px black">{{$si->size}}</td>
                            @endforeach

                        </tr>
                        @endforeach
               @endif

                    </tbody>
                 </table>

                </tbody>
            </table>
            <div style="margin-top:10%;margin-bottom:2%; margin-left:-4%;display: grid; grid-template-columns: 1fr 1fr 1fr; gap:0.5rem">

                <button type="submit" class="btn btn-success text-center " style="font-size: 1.5rem; ">Add To Cart</button>

                @if(Auth::id())
                @if (Auth::user()->role_id == 1)
                     <a href="{{route('products.edit',$data->id)}}" class="btn btn-primary " style="font-size: 1.5rem; ">Edit</a>
                     <a href="{{url('/products/adddetails/' .$data->id)}}" class="btn btn-danger " style="font-size: 1.5rem; ">Add</a>

                @endif
                @endif
                @if(Auth::id())
                @if (Auth::user()->role_id == 2)
                    <a href="{{route('products.buy',$data->id)}}" class="btn btn-primary text-center " style="font-size: 1.5rem; ">BUY</a>
                @endif
                @endif


               </div>
         </form>

       </div>


    </div>


</div>
@endsection
