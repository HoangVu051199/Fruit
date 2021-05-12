<div>
    <h4 class="card-title">
        <span class="mr-1" style="line-height: 45px">Đơn hàng huỷ</span>
        <div class="col-lg-3 float-right">
            <input type="search" class="form-control rounded" placeholder="Tìm kiếm theo tên..." wire:model="searchTerm"
                   aria-label="Search Dashboard">
        </div>
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
            <?php $key = 1 ?>
            @foreach($countermand as $item)
                @if($item->status == 3)
                <tr>
                    <td>{{ $key++ }}</td>
                    <td style="text-transform: capitalize">{{ $item->name }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->total }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->note }}</td>
                    <td>
                        <span class="label gradient-1 btn-rounded">
                            @if($item->status == 3)
                                Đã huỷ
                            @else
                                {{ NULL }}
                            @endif
                        </span>
                    </td>
                    {{--                                            <td>--}}
                    {{--                                            <span>--}}
                    {{--                                                <a href="{{ route('order.countermand.edit', $item->id) }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sửa">--}}
                    {{--                                                    <i class="fa fa-pencil color-muted m-r-5"></i>--}}
                    {{--                                                </a>--}}
                    {{--                                                <a href="{{ route('order.countermand.show', $item->id) }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chi tiết">--}}
                    {{--                                                    <i class="fa fa-eye color-danger ml-3"></i>--}}
                    {{--                                                </a>--}}
                    {{--                                            </span>--}}
                    {{--                                            </td>--}}
                </tr>
                @else
                    {{ NULL }}
                @endif
            @endforeach
            </tbody>
        </table>
    </div>
</div>
