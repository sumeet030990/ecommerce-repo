@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> {{ __('Product Management') }}</td>
                                <td> <a href="{{ route('product.index')}}"> {{ __('Manage') }}</a></td>
                            </tr>
                            <tr>
                                <td> {{ __('Order Management') }}</td>
                                <td> <a href="{{ route('order.index')}}"> {{ __('Manage') }}</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection