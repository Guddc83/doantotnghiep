@extends('admin.layout.layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-lg-12">
                        <form action="{{ route('postsever') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Danh Mục</label>
                                <input type="text" id="simpleinput" class="form-control" name="categories">
                            </div>
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Tên sản phẩm</label>
                                <input type="text" id="simpleinput" class="form-control" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Chi tiết sản phẩm</label>
                                <input type="text" id="simpleinput" class="form-control" name="description">
                            </div>
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Nội dung</label>
                                <input type="text" id="simpleinput" class="form-control" name="content">
                            </div>
                            <div class="mb-3">
                                <label for="example-fileinput" class="form-label">Ảnh đại diện</label>
                                <input type="file" id="example-fileinput" class="form-control" name="avartar">
                            </div>
                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" id="customCheckcolor1" name="status" >
                                <label class="form-check-label" for="customCheckcolor1">Trạng thái sản phẩm</label>
                            </div>
                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" id="hot" name="hot" >
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
    <script>
        // // Lấy ra checkbox
        // const checkbox = document.getElementById('customCheckcolor1');
        //
        // // Thêm sự kiện change để theo dõi khi checkbox được thay đổi
        // checkbox.addEventListener('change', function() {
        //     // Nếu checkbox được chọn, đặt giá trị là 1
        //     // Ngược lại, đặt giá trị là 0
        //     this.value = this.checked ? 1 : 0;
        //     console.log('Giá trị của checkbox:', this.value);
        // });
        // Lấy phần tử checkbox và thêm sự kiện change
        const checkbox = document.getElementById("customCheckcolor1");
        checkbox.addEventListener("change", (event) => {
            // Gán giá trị cho biến hot
            if (event.target.checked) {
                hot = 1;
            } else {
                hot = 0;
            }
        });
    </script>
@endsection
