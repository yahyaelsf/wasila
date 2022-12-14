@extends('cms.parent')
@section('title', 'مقدمين الخدمات')
@section('content')

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title float-left">جدول مقدمين الخدمات</h3>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>إسم مقدم الخدمة</th>
                                <th>إيميل مقدم الخدمة</th>
                                <th>هاتف مقدم الخدمة</th>
                                <th>عنوان مقدم الخدمة</th>
                                <th>تاريخ الإنشاء</th>
                                <th>تاريخ التعديل</th>
                                <th>الإعدادات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $service)
                                <tr>
                                    <td>{{ $service->id }}</td>
                                    <td>{{ $service->name }}</td>
                                    <td>{{ $service->email }}</td>
                                    <td>{{ $service->phone }}</td>
                                    <td>{{ $service->address }}</td>
                                    <td>{{ $service->created_at }}</td>
                                    <td>{{ $service->updated_at }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('services.edit', $service->id) }}" class="btn btn-info">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a onclick="destroy({{ $service->id }},this , '/cms/services/')" class="btn btn-danger">
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
    <script>
    </script>
@endsection

