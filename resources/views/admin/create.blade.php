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
                            <form action="{{url('/store')}}" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label for="name">إسم المنتج</label>
                                            <input type="text" class="form-control" name="name" id="name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <label for="price">سعر المنتج</label>
                                        <input type="text" class="form-control" name="price" id="price" required>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="quantity">كمية المنتج</label>
                                    <input type="text" class="form-control" name="quantity" id="quantity" required>
                                </div>
                                </div>
                                    <div class="col-sm-8">
                                    <div class="form-group">
                                        <label for="details">وصف المنتج</label>
                                        <textarea type="text" class="form-control" name="details" id="details" required></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label for="image">إضافة صورة المنتج</label>
                                            <input type="file" class="form-control" name="image" id="image" required>
                                        </div>
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
