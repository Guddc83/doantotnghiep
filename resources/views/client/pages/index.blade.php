@extends('client.layout.layout')
@section('content')
    @include('client.partial.mainSlider')
    @include('client.partial.mainContainerPopular')
    @include('client.partial.mainContainerBanner')
    @include('client.partial.mainContainerNewArrivals')
    @include('client.partial.mainContainerBrand')
    @include('client.partial.mainContainerTrending')
    @include('client.partial.mainContainerRecommend')
    @include('client.partial.newletter')
@endsection
