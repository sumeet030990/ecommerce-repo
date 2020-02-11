@extends('frontend.index')
@section('content')
<div class="site-section">
    <div class="container">
        <div class="row">
            <form action="{{ route('order.store') }}" method="POST">
                @csrf
                <div class="col-md-12">
                    <h2 class="h3 mb-3 text-black font-heading-serif">Billing Details</h2>
                    <div class="p-3 p-lg-5 border">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="firstName" class="text-black">First Name <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="firstName" name="firstName" required>
                            </div>
                            <div class="col-md-6">
                                <label for="lastName" class="text-black">Last Name <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="lastName" name="lastName" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="address" class="text-black">Address <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="address" name="address"
                                    placeholder="Street address" required>
                            </div>
                        </div>

                        <div class="form-group row mb-5">
                            <div class="col-md-12">
                                <label for="emailAddress" class="text-black">Email Address <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="emailAddress" name="emailAddress" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h2 class="h3 mb-3 text-black font-heading-serif">Your Order</h2>
                            <div class="p-3 p-lg-5 border">
                                <table class="table site-block-order-table mb-5">
                                    <thead>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($cartItems as $cartItem)
                                            <tr>
                                            <td>{{$cartItem->name}} <strong class="mx-2">x</strong> {{$cartItem->quantity}}</td>
                                                <td>${{ $cartItem->getPriceSum() }}</td>
                                            </tr>
                                        @endforeach
                                            <tr>
                                                <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                                                <td class="text-black font-weight-bold"><strong>{{ \Cart::session(Auth::user()->id)->getTotal() }}</strong></td>
                                             </tr>
                                    </tbody>
                                </table>

                                <div class="form-group">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Place Order</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- </form> -->
    </div>
</div>
@endsection