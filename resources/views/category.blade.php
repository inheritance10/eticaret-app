@extends('layouts.master')
@section('title',$category->name)

@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{route('mainpage')}}">Anasayfa</a></li>
            <li>{{$category->name}}</li>
        </ol>
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$category->name}}</div>
                    <div class="panel-body">
                        <h3>Alt Kategoriler</h3>
                        <div class="list-group categories">
                            @if(count($sub_category) > 0)
                                @foreach($sub_category as $data)
                                    <a href="{{route('category', $data->slug)}}" class="list-group-item"><i class="fa fa-arrow-circle-right"></i> {{$data->name}}</a>
                                @endforeach
                            @else
                                <div class="alert alert-danger">
                                    <p>
                                        Bu kategoride alt kategori bulunmamaktadır
                                    </p>
                                </div>
                            @endif
                        </div>
                        <h3>Fiyat Aralığı</h3>
                        <form>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> 100-200
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> 200-300
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="products bg-content">
                    <div class="row">
                        @if(count($products)>0)
                            Sırala
                            <a href="#" class="btn btn-default">Çok Satanlar</a>
                            <a href="#" class="btn btn-default">Yeni Ürünler</a>
                            <hr>
                            @foreach($products as $product)
                                <div class="col-md-3 product">
                                    <a href="{{route('product',$product->slug)}}"><img src="/img/indir.jpg"></a>
                                    <p><a href="{{route('product',$product->slug)}}">{{$product->name}}</a></p>
                                    <p class="price">{{$product->price}} ₺</p>
                                    <p><a href="#" class="btn btn-theme">Sepete Ekle</a></p>
                                </div>
                            @endforeach
                        @else
                            <div class="alert alert-danger">
                                <p>
                                    Bu kategoride ürün bulunmamaktadır
                                </p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
