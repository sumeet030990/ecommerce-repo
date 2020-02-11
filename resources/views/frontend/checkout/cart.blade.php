@extends('frontend.index')
@section('content')
<div class="site-section  pb-0">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-7 section-title text-center mb-5">
                <h2 class="d-block">Cart</h2>
            </div>
        </div>
        <div class="row mb-5">
            <form class="col-md-12" method="post">
                <div class="site-blocks-table">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="product-thumbnail">Image</th>
                                <th class="product-name">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-total">Total</th>
                                <th class="product-remove">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartItems as $cartItem)
                            <tr>
                                <td class="product-thumbnail">
                                    <img src="{{ asset('wines/images/wine_1.png')}}" alt="Image" class="img-fluid">
                                </td>
                                <td class="product-name">
                                    <h2 class="h5 cart-product-title text-black">{{ $cartItem->name }}</h2>
                                </td>
                                <td>{{ $cartItem->price }}</td>
                                <td>
                                    <div class="input-group mb-3" style="max-width: 120px;">
                                        <input type="text" class="form-control text-center border mr-0" value="{{ $cartItem->quantity }}"
                                            placeholder="" aria-label="Example text with button addon"
                                            aria-describedby="button-addon1" disabled>
                                    </div>
                                </td>
                                <td>{{ $cartItem->getPriceSum() }}</td>
                                <td><a href="{{ route('cart.remove', $cartItem->id)}}" class="btn btn-primary height-auto btn-sm">X</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </form>
        </div>

    </div>
</div>

<div class="site-section pt-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            </div>
            <div class="col-md-6 pl-5">
                <div class="row justify-content-end">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-12 text-right border-bottom mb-5">
                                <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <span class="text-black">Total</span>
                            </div>
                            <div class="col-md-6 text-right">
                                <strong class="text-black">{{ \Cart::session(Auth::user()->id)->getTotal() }}</strong>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <a href="{{ route('checkout')}}" class="btn btn-primary btn-lg btn-block">Proceed To
                                    Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection