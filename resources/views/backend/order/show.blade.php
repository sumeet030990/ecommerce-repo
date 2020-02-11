@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Order View') }}</div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name"
                                value="{{ $order->first_name }}" disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name"
                                value="{{ $order->last_name }}" disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" value="{{ $order->email }}" disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" value="{{ $order->address }}" disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">{{ __('Order Total') }}</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" value="{{ $order->total }}" disabled>
                        </div>
                    </div>

                    @foreach ($order->items as $item)
                        <div class="card">
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">{{ __('Item Name') }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" value="{{ $item->product->name }}" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">{{ __('Item Quantity') }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" value="{{ $item->quantity }}" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">{{ __('Item price') }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" value="{{ $item->price }}" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">{{ __('Item Total') }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" value="{{ $item->total }}" disabled>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection