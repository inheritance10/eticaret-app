@extends('layouts.master')
@section('title', $productDetail->name)

@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{route('mainpage')}}">Anasayfa</a></li>
            @foreach($categories as $category)
                <li><a href="{{route('category',$category->slug)}}">{{$category->name}}</a></li>
            @endforeach
            <li class="active">{{$productDetail->name}}</li>
        </ol>
        <div class="bg-content">
            <div class="row">
                <div class="col-md-5">
                    <img src="/img/indir.jpg">
                    <hr>
                    <div class="row">
                        <div class="col-xs-3">
                            <a href="#" class="thumbnail"><img src="/img/indir.jpg"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <h1>{{$productDetail->name}}</h1>
                    <p class="price">{{$productDetail->price}} ₺</p>
                    <p><a href="#" class="btn btn-theme">Sepete Ekle</a></p>
                </div>
            </div>

            <div>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#t1" data-toggle="tab">Ürün Açıklaması</a></li>
                    <li role="presentation"><a href="#t2" data-toggle="tab">Yorumlar</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="t1">{{$productDetail->description}}</div>
                    <div role="tabpanel" class="tab-pane" id="t2">t2</div>
                </div>
            </div>

        </div>
    </div>
@endsection
