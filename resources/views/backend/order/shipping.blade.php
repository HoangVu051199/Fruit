@extends('layouts.app_backend')
@section('title', 'Đang giao')
@section('content')
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Trang chủ</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Đang giao</a></li>
            </ol>
        </div>
    </div>
    <div class="content-body">
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                <span class="mr-1">Đang giao</span>
                            </h4>
                            <div class="table-responsive">
                                <table class="table header-border table-hover verticle-middle">
                                    <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Tên người đặt</th>
                                        <th scope="col">Số điện thoại</th>
                                        <th scope="col">Tổng tiền</th>
                                        <th scope="col">Ngày đặt</th>
                                        <th scope="col">Ghi chú</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">Thao tác</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($shipping as $key => $item)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td style="text-transform: capitalize">{{ $item->name }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td></td>
                                            <td>{{ $item->created_at }}</td>
                                            <td>{{ $item->note }}</td>
                                            <td>
                                            <span class="label gradient-1 btn-rounded">
                                                @if($item->status == 1)
                                                    Đang giao
                                                @else
                                                    {{ NULL }}
                                                @endif
                                            </span>
                                            </td>
{{--                                            <td>--}}
{{--                                            <span>--}}
{{--                                                <a href="{{ route('shipping.edit', $item->id) }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sửa">--}}
{{--                                                    <i class="fa fa-pencil color-muted m-r-5"></i>--}}
{{--                                                </a>--}}
{{--                                                <a href="{{ route('shipping.show', $item->id) }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chi tiết">--}}
{{--                                                    <i class="fa fa-eye color-danger ml-3"></i>--}}
{{--                                                </a>--}}
{{--                                            </span>--}}
{{--                                            </td>--}}
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
