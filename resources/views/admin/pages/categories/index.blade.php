@extends('admin.layout.layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <a href="{{ route('category.create') }}" class="btn btn-danger mb-2"><i
                                    class="mdi mdi-plus-circle me-2"></i>
                                ADD</a>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Tên Danh Mục</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr>
                                                <th scope="row">{{ $category->id }}</th>
                                                <td>{{ $category->name }}</td>
                                                <td>
                                                    <a href="{{ route('category.edit', ['id' => $category->id]) }}"
                                                        class="btn btn-defaul">Edit</a>
                                                    <a href="{{ route('category.delete', ['id' => $category->id]) }}"
                                                        class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-12">
                                {{ $categories->links('pagination::bootstrap-5') }}
                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
@endsection
@section('footer')
@endsection
