@extends('layout.layout')
@section('content')
@section('title'){{'Our Products'}} @endsection
@section('name1')Our Product <span class="sr-only">(current)</span>@endsection
@if (session('alert'))
<div class="alert alert-primary alert1" style=" position: absolute;top: 5;left: 35%;" >
   {{session('alert')}}

</div>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
              <div class="container">
                <div class="card">
                    <div class="card-header"><h4>Product : {{$product->model_name}} "{{$product->more_details}}"</h4></div>

                    <div class="card-body">


                            <form method="POST" action="{{route('products.buy.save',$product->id)}}">
                                @csrf
                                    <div class="form-group " style="display: grid; grid-template-columns:0.5fr 1fr; gap:1rem">
                                    <label for="inputEmail4" class=" col-form-label text-md-end text-light">Quantity</label>

                                    <div class="">
                                        <input type="number" class="form-control" id="inputQuantity4" placeholder="Quantity" name="number_of_pieces">
                                    </div>
                                    </div>

                                    <div class="form-group " style="display: grid; grid-template-columns:0.5fr 1fr; gap:1rem">
                                        <label for="inputState" class=" col-form-label text-md-end text-light">Size</label>

                                        <div class="" style="width: 14rem">
                                        <select name="co_si" id="inputState" class="form-control" >
                                            @foreach ($details as $de )
                                               <option >{{$de->size}} {{$de->color}}</option>
                                            @endforeach


                                        </select>

                                        </div>

                                    </div>
                                    <div class="form-group " style="display: grid; grid-template-columns:0.5fr 1fr; gap:1rem">
                                        <label for="inputEmail4" class=" col-form-label text-md-end text-light">Your Paypal</label>

                                        <div class="">
                                            <input required type="text" class="form-control" id="inputQuantity4" placeholder="Paypal" name="paypal">
                                        </div>
                                        </div>
                                    <div class="" style="padding-left:4rem;padding-top:1rem;justify-content: center; display:grid; grid-template-columns:0.01fr 0.5fr; gap:1rem">
                                        <input required class="form-check-input" type="checkbox" id="gridCheck" >
                                        <label  class="form-check-label text-dark " style="font-weight: bold;"for="gridCheck">
                                            Confirm
                                        </label>
                                    </div>


                                <div class="row mb-0 my-4 "  >
                                    <div class=" my-4 " style="display: grid; grid-template-columns:0.5fr 1fr 0.5fr ">
                                        <div></div>
                                        <button type="submit" class="btn btn-primary">
                                        Buy
                                        </button>
                                    </div>
                                </div>

                            </form>




                    </div>

                </div>
              </div>


            </div>
        </div>
    </div>
</div>
@endsection
