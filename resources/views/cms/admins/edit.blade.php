@extends('cms.parent')
@section('title', 'Edit Admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title float-left">تعديل بيانات المسؤول</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">إسم المسؤول</label>
                                <input type="text" class="form-control" value="{{ $admin->name }}" id="name"
                                    placeholder="أدخل إسم المسؤول" name="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">إيميل المسؤول</label>
                                <input type="text" class="form-control" value="{{ $admin->email }}" id="email"
                                    placeholder="أدخل ايميل المسؤول" name="email">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="button" onclick="updateItem({{ $admin->id }})"
                                class="btn btn-primary">حفظ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    function updateItem(id) {
        let data = {
            name: document.getElementById('name').value,
            email: document.getElementById('email').value
        }
        update('/cms/admins/' + id, data, '/cms/admins')
    }
</script>
