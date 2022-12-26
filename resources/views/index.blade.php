@extends('layout.layout')
@section('content')
@section('title'){{'My Project'}} @endsection
@section('name1')Our Product <span class="sr-only">(current)</span>@endsection
@if (session('alert'))
<div class="alert alert-primary alert1" style=" position: absolute;top: 2%;left: 41%;" >
   {{session('alert')}}

</div>
@endif
<div class=" carousell">
    <div id="carouselExampleSlidesOnly" class="carousel slide " data-ride="carousel">


          <div class="carousel-inner">
          <div class="carousel-item active">
            <img class=" " src="image/slider_image/clo10.jpg" >
          </div>
           @foreach ($data as $dataa )
           <div class="carousel-item">
            <img class="   " src="{{$dataa->image_url}}" ></div>
             @endforeach


             {{--
          <div class="carousel-item " style="padding-left: 35%" >
            <img class="d-block w-50 " src="image/slider_image/clo5.jpg" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-50 " src="image/slider_image/clo3.jpg" alt="Third slide">
          </div> <div class="carousel-item">
            <img class="d-block w-50 " src="image/slider_image/clo9.webp" alt="Third slide">
          </div> <div class="carousel-item">
            <img class="d-block w-50 " src="image/slider_image/clo7.jpg" alt="Third slide">
          </div> <div class="carousel-item">
            <img class="d-block w-50 " src="image/slider_image/clo2.webp" alt="Third slide">
          </div> <div class="carousel-item">
            <img class="d-block w-50 " src="image/slider_image/clo8.webp" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-50 " src="image/slider_image/clo4.jpg" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-50 " src="image/slider_image/clo6.jpg" alt="Third slide">
          </div> --}}
        </div>

    </div>
    <div class="">
        <div class=" d-none d-md-block">
            <h5 class="slider_description">Welcome to Our Website</h5>
            <hr>
            <br>
            <p class="slider-des">Enjoy watching modern clothes</p>
            <br>
            <p class="slider-des">You Will Find Everything You Are Looking For</p>

            <br>

          </div>
    </div>

</div>
<!--content-->
  <div style="position:relative;direction:rtl;height:40rem; margin:6% 10% 4% 4%; padding:2rem">
   <div class="row" style="display:grid; grid-template-columns: 1fr 1fr 1fr 1fr;text-align: center; ">
   <div style="display:grid; grid-template-rows: 1fr 0.1fr ; gap: 1rem;">
   <div class="" ><img src="https://image.winudf.com/v2/image/Y29tLk1vZGVyblNraXJ0RGVzaWduLmdvemFsaV9zY3JlZW5fNV80cThuNzUwag/screen-5.jpg?fakeurl=1&type=.jpg" alt="" style="height:15rem; width:10rem"></div>
   <div class="" s style=""tyle=""><h6 class="white-text-with-blue-shadow">Skirts</h6></div></div>
   <div style="display:grid; grid-template-rows: 1fr 0.1fr; gap: 1rem; ">
    <div class="" style=""><img src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/productimage/2020/10/11/f3b7eb35-ea09-4bd6-b0e7-9de4157b14bd1602370012077-1.jpg" alt="" style="height:15rem; width:10rem"></div>
    <div class=""  ><h6 class="white-text-with-blue-shadow" >Pants</h6></div>
   </div>
    <div style="display:grid; grid-template-rows: 1fr 0.1fr; gap: 1rem;">
      <div class="" style=""><img src="https://www.hijabfashioninspiration.com/wp-content/uploads/2020/11/123717733_539933233651967_3442768097083660209_n-819x1024.jpg" alt="" style="height:15rem; width:12rem"></div>
    <div class="" style=""><h6 class="white-text-with-blue-shadow">Jacket</h6></div>
    </div>
   <div style="display:grid; grid-template-rows: 1fr 0.1fr; gap: 1rem;">
    <div class="" style=""><img src="https://assets.ajio.com/medias/sys_master/root/20220303/gPoS/621fd5e4f997dd03e2fdcb73/purvaja_black_%26_peach_striped_round-neck_empire_dress.jpg" alt="" style="height:15rem; width:12rem"></div>
    <div class="" style=""><h6 class="white-text-with-blue-shadow">Dresses</h6></div>
   </div>

   </div>
   <div class="row" style="margin-top:5%; margin-right:7%;display:grid; grid-template-columns: 2fr 2fr ; gap: 1rem;">
   <div style="display:grid; grid-template-columns: 1fr 1fr ; gap: 1rem; align-items: center;">
    <div class="" style=""><img src="https://rukminim1.flixcart.com/image/332/398/k3dc7m80/sweater/j/a/4/xl-tta1000144-tokyo-talkies-original-imafmgnngjcbhkbs.jpeg?q=50" alt="" style="height:10rem; width:15rem"></div>
    <div class="" style="" ><h6 class="white-text-with-blue-shadow">Swaeters</h6></div>
   </div>
 <div style="display:grid; grid-template-columns: 1fr 1fr ; gap: 1rem;  align-items: center;">
  <div class="" style=""><img src="https://m.media-amazon.com/images/I/51L-izyRSRL._AC_SY780_.jpg" alt="" style="height:10rem; width:15rem"></div>
  <div class="" style=""><h6 class="white-text-with-blue-shadow">Shoes</h6></div>
 </div>
   </div>
<div style="background-color:rgb(14, 14, 102) ;position:absolute; height:100%; width:100%; top:0%; left:3%; z-index:1; opacity:10%"></div>
  </div>
<!--footer1-->
<footer class="text-center text-lg-start bg-light text-muted my-4">

    <!-- Section: Links  -->
    <section class="py-1">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Opening Hours
            </h6>
            <p>
              All days
            </p>
            <p>
              9:00-1:00
            </p>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
             Our Address
            </h6>
            <p>
               Damascus-Alshaalan
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Contact
            </h6>

            <p><i class="fa fa-envelope "></i>
              S@Restaurant.com
            </p>
            <p><i class="fa fa-phone "></i> 0117788994</p>
            <p><i class="fa fa-1x fa-whatsapp"></i> +963933445566</p>
            <p><i class="fa fa-1x fa-facebook"></i> S.Store@facebook.com</p>
            <p><i class="fa fa-1x fa-instagram"></i> S.Store</p>


          </div>
          <!-- Grid column -->
           <!-- Grid column -->
           <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>About Us
            </h6>
            <p>
                We are a modern company that manufactures comfortable modern  clothes... at <span>reasonable</span>  prices....
                We make your shopping easier and more enjoyable. By browsing our website, you will find everything you are looking for
                 We aspire to be the largest clothing store and <span style="font-weight:bold">make you happy</span>.
            </p>
          </div>
          <!-- Grid column -->


      </div>

      <div class="col-md-6 col-md-12 media-icon ">
          <div class="">
           <!-- Facebook -->
               <button class="btn text-light"><i class="fa fa-1x fa-facebook"></i></button>
           <!-- Instagram -->
               <button class="btn text-light"><i class="fa fa-1x fa-instagram"></i></button>
           <!-- Whatsapp -->
               <button class="btn text-light"><i class="fa fa-1x fa-whatsapp"></i></button>
          </div>




        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  </footer>
<!-- endFooter1 -->

@endsection



{{-- <div class="container con1 ">
 <div class="buttons ">
  <a href="/invoice"  target="_blank" style="text-decoration: none"><button type="button" class="btn btn-primary b1" >فاتورة جديدة</button></a>
</div>

<div class="buttons1 ">
    <a href="/dailysales" target="_blank" style="text-decoration: none"><button type="button" class="btn btn-success b2">فواتير يومية</button></a>
</div>

<div class="buttons ">
    <a href="/jackets" target="_blank" style="text-decoration: none"> <button type="button" class="btn btn-danger ">Jackets</button></a>
</div>

<div class="buttons ">
    <a href="/sweaters" target="_blank" style="text-decoration: none"> <button type="button" class="btn btn-warning ">Sweaters</button></a>
</div>
<div class="buttons ">
    <a href="/pants" target="_blank" style="text-decoration: none"><button type="button" class="btn btn-info b5">Pants</button></a>
  </div>
  <div class="buttons ">
    <a href="/dresses" target="_blank" style="text-decoration: none"><button type="button" class="btn btn-success b5">Dresses</button></a>
  </div>
  <div class="dropdown show buttons ">
    <a class="btn btn-primary dropdown-toggle b6"  role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      معلومات
    </a>

    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
      <a class="dropdown-item" target="_blank"  href="/companies">الشركات</a>
      <a class="dropdown-item" target="_blank"  href="/clothes">القطع</a>

    </div>
  </div>


</div> --}}



