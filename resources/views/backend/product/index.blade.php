@extends('layouts.app')

@section('content')
<div class="container">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <span>{{ __('Product Management') }}</span>
                    <a href="{{ route('product.create')}}" class="btn btn-primary float-right" >{{ __('Add') }}</a>
                </div>
                <div class="card-body">
                    @if(count($products) > 0)
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $data)
                                    <tr>
                                        <td> {{$data->name }}</td>
                                        <td> {{$data->price }} </td>
                                        <td> {{$data->category->name }} </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <a href="{{route('product.edit', $data->id)}}" class="btn btn-primary">Edit</a>
                                                </div>
                                                <div class="col-md-2">
                                                    <form action="{{route('product.destroy', $data->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                    <p>No Product Added</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection