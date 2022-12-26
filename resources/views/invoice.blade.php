

@extends('layout.layout')
@section('content')
@section('title'){{'Our Products'}} @endsection
@section('name1')Our Product <span class="sr-only">(current)</span>@endsection
@if (session('alert'))
<div class="alert alert-primary alert1" style=" position: absolute;top: 5%;left: 40%;" >
   {{session('alert')}}

</div>
@endif
<div class="container" >
     <div class="card">
        <div class="card-header"><h4>Invoices:</h4></div>
        <div class="card-body">
         @if (Auth::user()->role_id == 1)
         <form class="form-inline  my-lg-1 " style="display: flex;" method="GET" action="{{route('invoice.search')}}">
            <input name="query" class="form-control mr-sm-2 mx-4" type="search" placeholder="Search for Model or User" aria-label="Search" style="font-size: 0.7rem; width:13rem">
            <button class="btn btn-outline-primary my-2 my-sm-0  " type="submit" style="border:2px solid ;box-shadow:1px 1px 10px blue;">Search</button>
        </form>
         @endif

            <table class="table table-borderless table3 " style="font-size:1.2rem; z-index:1 ; color:black">
                <thead>
                <input style="display:none" type="checkbox"   onclick="" id="option_all" value="bbb">
                <tr style=" color:black">
                    <th scope="col" ></th>
                @if (Auth::user()->role_id == 1)
                    <th scope="col" >user name</th>
                @endif
                    <th scope="col">product name</th>
                    <th scope="col" >Number of Pieces</th>
                    <th scope="col" >color</th>
                    <th scope="col" >size</th>
                    <th scope="col" >Price</th>
                    <th scope="col" >date</th>
                    <th scope="col" ></th>
                </tr>
                </thead>
                <tbody>

                    <form   action="{{route('invoice.res' )}}" method="POST">
                        @csrf
                    @foreach($invoices as $invoice)
                    <tr>

                        <td scope="col"><input type="checkbox" class="invoice"  id="option_a" name="invoices[]" value="{{$invoice->invoice}}"></td>
                        <td style="display:none">{{$invoice->id}}</td>
                        @if (Auth::user()->role_id == 1)
                        <td scope="col"><a style="text-decoration:none" href="{{route('user.show',$invoice->user->id)}}">{{$invoice->user->name}}</a></td>
                        @endif

                        <td scope="col"><a href="{{route('products.show',$invoice->product->id)}}">{{$invoice->product->model_name}}</a></td>
                        <td scope="col">{{$invoice->number_of_pieces}}</td>
                        <td scope="col">{{$invoice->color}}</td>
                        <td scope="col">{{$invoice->size}}</td>
                        <td scope="col">{{$invoice->invoice}}</td>
                        <td scope="col">{{$invoice->date}}</td>
                    </tr>
                            @endforeach
                        <input   type="submit"  class="btn btn-primary" value="Show Result " id="show"  href="#"  >
                      </form>
                      @if (session('alertt'))
                      <h1 class="btn btn-outline-primary mx-4 my-1" style="font-weight: bolder" > The Result :  {{session('alertt')}} S.P</h1>
                    @endif
                </tbody>
            </table>
        </div>
    </div>



</div>

@endsection
