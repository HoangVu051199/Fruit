@extends('layouts.app_backend')
@section('title', 'Sản phẩm')
@section('content')
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Trang chủ</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Sản phẩm</a></li>
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
                                <span class="mr-1">Sản phẩm</span>/
                                <a href="{{ route('product.create') }}" class="btn mb-1 btn-primary">Thêm<span class="btn-icon ml-2"><i class="fa fa-plus"></i></span>
                                </a>
                            </h4>
                            <div class="table-responsive">
                                <table class="table header-border table-hover verticle-middle">
                                    <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Ảnh</th>
                                        <th scope="col">Tên sản phẩm</th>
                                        <th scope="col">Loại danh mục</th>
                                        <th scope="col">Giá</th>
                                        <th scope="col">Đơn vị tính</th>
                                        <th scope="col">Nổi bật</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">Thao tác</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($product as $key => $item)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>
                                                <img class="img-thumbnail" width="70px" src="{{ $item->image }}">
                                            </td>
                                            <td style="text-transform: capitalize">{{ $item->name }}</td>
                                            <td style="text-transform: capitalize">
                                                <?php $category = DB::table('category')->where('id',$item->category_id)->first(); ?>
                                                    @if (!empty($category->name))
                                                        {!! $category->name !!}
                                                    @else
                                                        {!! NULL !!}
                                                    @endif
                                            </td>
                                            <td class="text-danger">{{ number_format($item->price, 0,'.','.') }}</td>
                                            <td style="text-transform: capitalize">
                                                <?php $unit = DB::table('unit')->where('id',$item->unit_id)->first(); ?>
                                                @if (!empty($unit->name))
                                                    {!! $unit->name !!}
                                                @else
                                                    {!! NULL !!}
                                                @endif
                                            </td>
                                            <td>
                                                <span class="label gradient-1 btn-rounded">
                                                    @if($item->hot == 0)
                                                        Ẩn
                                                    @else
                                                        Hiển thị
                                                    @endif
                                                </span>
                                            </td>
                                            <td>
                                                <span class="label gradient-1 btn-rounded">
                                                    @if($item->status == 0)
                                                        Ẩn
                                                    @else
                                                        Hiển thị
                                                    @endif
                                                </span>
                                            </td>
                                            <td>
                                            <span>
                                                <a href="{{ route('product.edit', $item->id) }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sửa">
                                                    <i class="fa fa-pencil color-muted m-r-5"></i>
                                                </a>
                                                <a href="{{ route('product.delete', $item->id) }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Xoá">
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
