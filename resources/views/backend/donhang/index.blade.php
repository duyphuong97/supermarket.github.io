@extends('backend.layout.master')

@section('title')
Danh sách đơn hàng
@endsection

@section('feature-title')
Quản lý đơn hàng
@endsection

@section('feature-description')

@endsection

@section('custom-css')
<style>
.sanpham-thumbnail {
    width: 150px;
    height: 150px;
}
</style>
@endsection

@section('content')
<a href="{{ route('backend.donhang.donhangchuaxuly') }}" class="btn btn-dark">Đơn hàng đang chờ xữ lý</a>
<a href="{{ route('backend.donhang.danggiao') }}" class="btn btn-dark">Đơn hàng đang giao</a>
<a href="{{ route('backend.donhang.pdf') }}" class="btn btn-dark">Đơn hàng đã hũy</a>
@endsection
