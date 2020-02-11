@extends('frontend.index')
@section('content')
<div class="site-section mt-5">
        <div class="container">
  
          <div class="row mb-5">
            <div class="col-12 section-title text-center mb-5">
              <h2 class="d-block">Our Products</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, perspiciatis!</p>
            </div>
          </div>
  
          <div class="row">
            
            @foreach($products as $data)
              <div class="col-lg-4 mb-5 col-md-6">
    
                <div class="wine_v_1 text-center pb-4">
                  <a href="shop-single.html" class="thumbnail d-block mb-4">
                      <img src="{{ asset('wines/images/wine_2.png')}}" alt="Image" class="img-fluid">
                  </a>
                  <div>
                    <h3 class="heading mb-1"><a href="#">{{ $data->name }}</a></h3>
                    <span class="price">{{ $data->price. " Rs" }}</span>
                  </div>

                  <div class="wine-actions">
                    <h3 class="heading-2"><a href="#">{{ $data->name }}</a></h3>
                    <span class="price d-block">{{ $data->price. " Rs" }}</span>
                    <a href="{{route('cart.add', $data->id)}}" class="btn add"><span class="icon-shopping-bag mr-3"></span> Add to Cart</a>
                  </div>
                </div>

              </div>
            @endforeach
          </div>
        </div>
      </div>
@endsection