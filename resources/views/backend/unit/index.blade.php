@extends('layouts.app_backend')
@section('title', 'Đơn vị tính')
@section('content')
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Trang chủ</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Đơn vị tính</a></li>
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
                                <span class="mr-1">Đơn vị tính</span>/
                                <a href="{{ route('unit.create') }}" class="btn mb-1 btn-primary">Thêm<span class="btn-icon ml-2"><i class="fa fa-plus"></i></span>
                                </a>
                            </h4>
                            <div class="table-responsive">
                                <table class="table header-border table-hover verticle-middle">
                                    <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Tên đơn vị tính</th>
                                        <th scope="col">Mô tả</th>
                                        <th scope="col">Thao tác</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($unit as $key => $item)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td style="text-transform: capitalize">{{ $item->name }}</td>
                                            <td>{{ $item->description }}</td>
                                            <td>
                                            <span>
                                                <a href="{{ route('unit.edit', $item->id) }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sửa">
                                                    <i class="fa fa-pencil color-muted m-r-5"></i>
                                                </a>
                                                <a href="{{ route('unit.delete', $item->id) }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Xoá">
                                                    <i class="fa fa-close color-danger ml-3"></i>
                                                </a>
                                            </span>
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
        </div>
    </div>
@endsection
