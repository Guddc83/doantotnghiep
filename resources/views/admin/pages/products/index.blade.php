@extends('admin.layout.layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <a href="{{ route('product.create') }}" class="btn btn-danger mb-2"><i
                                    class="mdi mdi-plus-circle me-2"></i>
                                Thêm sản phẩm</a>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <div id="products-datatable_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="products-datatable_length"><label
                                            class="form-label">Display <select class="form-select form-select-sm ms-1 me-1">
                                                <option value="5">5</option>
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="-1">All</option>
                                            </select> products</label></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="products-datatable_filter" class="dataTables_filter"><label>Search:<input
                                                type="search" class="form-control form-control-sm" placeholder=""
                                                aria-controls="products-datatable"></label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table
                                        class="table table-centered w-100 dt-responsive nowrap dataTable no-footer dtr-inline"
                                        id="products-datatable" role="grid" aria-describedby="products-datatable_info"
                                        style="width: 1544px;">
                                        <thead class="table-light">
                                            <tr role="row">
                                                <th class="all sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all"
                                                    style="width: 27.6px;" rowspan="1" colspan="1" data-col="0"
                                                    aria-label="


                                        &amp;nbsp;

                                ">
                                                    <div class="form-check"><input type="checkbox"
                                                            class="form-check-input dt-checkboxes"><label
                                                            class="form-check-label">&nbsp;</label></div>
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="products-datatable"
                                                    rowspan="1" colspan="1" style="width: 97.8px;"
                                                    aria-label="Price: activate to sort column ascending" name="sale">
                                                    ID</th>
                                                <th class="all sorting sorting_asc" tabindex="0"
                                                    aria-controls="products-datatable" rowspan="1" colspan="1"
                                                    style="width: 427.8px;" aria-sort="ascending"
                                                    aria-label="Product: activate to sort column descending"
                                                    name="products">Sản phẩm</th>
                                                <th class="sorting" tabindex="0" aria-controls="products-datatable"
                                                    rowspan="1" colspan="1" style="width: 180.8px;"
                                                    aria-label="Category: activate to sort column ascending"
                                                    name="categories">Danh mục</th>
                                                <th class="sorting" tabindex="0" aria-controls="products-datatable"
                                                    rowspan="1" colspan="1" style="width: 163.8px;"
                                                    aria-label="Added Date: activate to sort column ascending"> Ngày thêm
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="products-datatable"
                                                    rowspan="1" colspan="1" style="width: 97.8px;"
                                                    aria-label="Price: activate to sort column ascending" name="price">Giá
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="products-datatable"
                                                    rowspan="1" colspan="1" style="width: 97.8px;"
                                                    aria-label="Price: activate to sort column ascending" name="sale">
                                                    Sale</th>

                                                <th class="sorting" tabindex="0" aria-controls="products-datatable"
                                                    rowspan="1" colspan="1" style="width: 101.8px;"
                                                    aria-label="Status: activate to sort column ascending" name="status">
                                                    Trạng thái</th>
                                                <th class="sorting" tabindex="0" aria-controls="products-datatable"
                                                    rowspan="1" colspan="1" style="width: 101.8px;"
                                                    aria-label="Status: activate to sort column ascending" name="hot">
                                                    Sản Phẩm HOT</th>
                                                <th style="width: 85.6px;" class="sorting_disabled" rowspan="1"
                                                    colspan="1" aria-label="Action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $productItem)
                                                <tr class="odd">
                                                    <td class="dt-checkboxes-cell dtr-control">
                                                        <div class="form-check"><input type="checkbox"
                                                                class="form-check-input dt-checkboxes"><label
                                                                class="form-check-label">&nbsp;</label></div>
                                                    </td>
                                                    <td>
                                                        {{ $productItem->id }}
                                                    </td>
                                                    <td class="sorting_1">
                                                        <img src="{{ $productItem->avartar }}" alt="contact-img"
                                                            title="contact-img" class="rounded me-3" height="48">
                                                        <p class="m-0 d-inline-block align-middle font-16">
                                                            <a href="apps-ecommerce-products-details.html"
                                                                class="text-body">{{ $productItem->name }}</a>
                                                            <br>
                                                            <span class="text-warning mdi mdi-star"></span>
                                                            <span class="text-warning mdi mdi-star"></span>
                                                            <span class="text-warning mdi mdi-star"></span>
                                                            <span class="text-warning mdi mdi-star"></span>
                                                            <span class="text-warning mdi mdi-star"></span>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        {{ $productItem->category->name }}
                                                    </td>
                                                    <td>
                                                        {{ $productItem->created_at }}
                                                    </td>
                                                    <td>
                                                        {{ number_format($productItem->price) }}
                                                    </td>

                                                    <td>
                                                        {{ $productItem->sale }}
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success">{{ $productItem->status }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success">{{ $productItem->hot }}</span>
                                                    </td>

                                                    <td class="table-action">
                                                        <a href="javascript:void(0);"
                                                            onclick="redirectToRoute('{{ route('product.edit', ['id' => $productItem->id]) }}');"
                                                            class="action-icon"> <i
                                                                class="mdi mdi-square-edit-outline"></i></a>
                                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                                class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers"
                                        id="products-datatable_paginate">
                                        <ul class="pagination pagination-rounded">
                                            {{ $products->links('pagination::bootstrap-4') }}
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function redirectToRoute(route) {
            window.location.href = route;
        }
    </script>
@endsection
@section('footer')
@endsection
