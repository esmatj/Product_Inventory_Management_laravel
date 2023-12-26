@extends('frontend.layout.app')

@section('title')
    Products
@endsection

@section('body')
<!-- products -->
<div  class="products">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Products</h2>
                  </div>
               </div>
            </div>
            <div class="row">

               <div class="col-md-12">
                  <div class="our_products">
                     <div class="row">
                        @foreach($products as $item)

                           <div class="col-md-4">
                              <div class="product_box">
                                 <figure><img src="{{asset('/storage/Product-image/'.$item->image)}}" alt="{{$item->image}}"/></figure>
                                 <h3>{{$item->name}}</h3>
                              </div>
                           </div>
                        @endforeach
                        
                        <div class="col-md-12">
                           <a class="read_more" href="#">See More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end products -->
@endsection
