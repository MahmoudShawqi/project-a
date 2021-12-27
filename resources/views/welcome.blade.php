@extends('layouts.admin')
@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-header bg-primary text-white text-uppercase">
                    <i class="fa fa-star"></i> أخر المنتجات
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($products as $product)
                        <div class="col-sm-4">
                            <div class="card">
                                <img class="card-img-top" src="{{asset('images/'.$product->image)}}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#" title="View Product">{{$product->name}}</a></h4>
                                    <p class="card-text">{{$product->details}}</p>
                                    <div class="row">
                                        <div class="col">
                                            <p class="btn btn-danger btn-block">{{$product->price}}$</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
