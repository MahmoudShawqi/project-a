@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 m-auto">
                        <div class="contact-form">
                            <h1>المنتجات الجديدة</h1>
                            <p class="hint-text">صفحة تعبئة المنتجات الجديدة</p>
                            <form action="{{url('/update/'.$product->id)}}" method="post">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name">إسم المنتج</label>
                                            <input type="text" class="form-control" name="name" id="name" value="{{$product->name}}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="price">سعر المنتج</label>
                                        <input type="text" class="form-control" name="price" id="price" value="{{$product->price}}" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="quantity">كمية المنتج</label>
                                    <input type="text" class="form-control" name="quantity" id="quantity" value="{{$product->quantity}}" required>
                                </div>
                                </div>
                                    <div class="col-sm-8">
                                    <div class="form-group">
                                        <label for="details">وصف المنتج</label>
                                        <textarea type="text" class="form-control" name="details" id="details" value="{{$product->details}}"required></textarea>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary" value="إضافة منتج ">
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
