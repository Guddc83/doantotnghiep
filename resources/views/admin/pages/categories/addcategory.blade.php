@extends('admin.layout.layout')
@section('title')
    <h1>Thêm Danh Mục</h1>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-lg-12">
                        <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Tên Danh Mục</label>
                                <input type="text" id="simpleinput" class="form-control" placeholder="Nhập tên danh mục"
                                    name="name">
                            </div>
                            <div class="mb-3">
                                <select class="form-select mb-3" name="parent_id">
                                    <label>Chọn Danh Mục Sản Phẩm</label>
                                    <option selected>Chọn Danh Mục Sản Phẩm</option>
                                    {!! $htmlOption !!}
                                </select>
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
@section('footer')
@endsection
