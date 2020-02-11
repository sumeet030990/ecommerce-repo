@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Order Management</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>{{ __('Order Id') }}</th>
                                <th>{{ __('Customer Name') }}</th>
                                <th>{{ __('Email') }}</th>
                                <th>{{ __('Amount') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td> {{ $order->id }}</td>
                                    <td> {{ $order->first_name . " ". $order->last_name }}</td>
                                    <td> {{ $order->email }}</td>
                                    <td> {{ $order->total }}</td>
                                    <td> <a href="{{ route('order.show', $order->id)}}"> {{ __('Manage') }}</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection