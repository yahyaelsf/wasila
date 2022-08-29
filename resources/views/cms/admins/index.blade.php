@extends('cms.parent')
@section('title', 'المسؤولين')
@section('content')

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title float-left">جدول المسؤولين</h3>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>إسم المسؤول</th>
                                <th>إيميل المسؤول</th>
                                <th>تاريخ الإنشاء</th>
                                <th>تاريخ التعديل</th>
                                <th>الإعدادات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $admin)
                                <tr>
                                    <td>{{ $admin->id }}</td>
                                    <td>{{ $admin->name }}</td>
                                    <td>{{ $admin->email }}</td>
                                    <td>{{ $admin->created_at }}</td>
                                    <td>{{ $admin->updated_at }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('admins.edit', $admin->id) }}" class="btn btn-info">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a onclick="destroy({{ $admin->id }},this , '/cms/admins/')" class="btn btn-danger">
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

