@extends('cms.parent')
@section('title', 'المنتجات')
@section('content')
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title float-left">جدول المنتجات</h3>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>اسم المنتج</th>
                                <th>صورة المنتج</th>
                                <th>التفعيل</th>
                                <th>تصنيف المنتج</th>
                                <th>وصف المنتج</th>
                                <th>سعر المنتج</th>
                                <th>تاريخ الإنشاء</th>
                                <th>تاريخ التعديل</th>
                                <th>الإعدادات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td><img src="{{ Storage::url('products/' . $product->image) }}" alt="صورة االمنتج"
                                             class=" img-circle" height="70">
                                    </td>
                                    <td>
                                        <span
                                            class="badge @if ($product->active_name == 'فعال')  bg-success @else bg-danger @endif">{{ $product->active_name }}</span>
                                    </td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->price }}شيكل</td>
                                    <td>{{ $product->created_at }}</td>
                                    <td>{{ $product->updated_at }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-info">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a onclick="destroy({{ $product->id }},this , '/products/')"
                                                class="btn btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                    </ul>
                </div>
            </div>

        </div>
    <script></script>
@endsection
