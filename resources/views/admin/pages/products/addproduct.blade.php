@extends('admin.layout.layout')
@section('title')
    <h1>Thêm Sản Phẩm</h1>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-lg-12">
                        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <select class="form-select mb-3" name="category_id">
                                <label>Chọn Danh Mục</label>
                                <option selected>Chọn Danh Mục Sản Phẩm</option>
                                {!! $htmlOption !!}
                            </select>
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Tên sản phẩm</label>
                                <input type="text" id="simpleinput" class="form-control" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Giá sản phẩm</label>
                                <input type="text" id="simpleinput" class="form-control" name="price">
                            </div>
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Chi tiết sản phẩm</label>
                                <input type="text" id="simpleinput" class="form-control" name="description">
                            </div>
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Sale</label>
                                <input type="text" id="simpleinput" class="form-control" name="sale">
                            </div>

                            <div class="mb-3">
                                <label for="example-fileinput" class="form-label">Ảnh đại diện</label>
                                <input type="file" id="example-fileinput" class="form-control" name="avartar">
                            </div>
                            <div class="mb-3">
                                <label for="example-fileinput" class="form-label">Ảnh chi tiết</label>
                                <input type="file" id="formFileMultiple01" multiple="" class="form-control"
                                    name="path[]">
                            </div>
                            <div class="mb-3">
                                <label for="example-textarea" class="form-label">Nội dung</label>
                                <textarea class="form-control" id="example-textarea" rows="5" name="content"></textarea>
                            </div>
                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" id="customCheckcolor1" name="status">
                                <label class="form-check-label" for="customCheckcolor1">Trạng thái sản phẩm</label>
                            </div>
                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" id="hot" name="hot">
                                <label class="form-check-label" for="customCheckcolor1">Sản phẩm HOT</label>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary mb-2">Xác nhận</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('checkbox')
@endsection
@section('footer')
@endsection
