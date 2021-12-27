@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 m-auto">
              <div class="contact-form">
                <h3>المنتجات</h3>

                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">إسم المنتج</th>
                        <th scope="col">سعر المنتج</th>
                        <th scope="col">كمية المنتج</th>
                        <th scope="col">&nbsp</th>
                        <th scope="col">&nbsp</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                      <tr>
                        <th scope="row">{{$product->id}}</th>
                        <td>{{$product->name}}</td>
                        <td>${{$product->price}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>
                            <form action="{{url('edit/'.$product->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-primary">تعديل</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{url('destroy/'.$product->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">حذف</button>
                            </form>
                        </td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>
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
