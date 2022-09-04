@extends('cms.parent')
@section('title', 'تعديل مقدم الخدمة')
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
                                <label for="exampleInputEmail1">إسم مقدم الخدمة</label>
                                <input type="text" class="form-control" value="{{ $service->name }}" id="name"
                                    placeholder="أدخل إسم المسؤول" name="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">إيميل مقدم الخدمة</label>
                                <input type="text" class="form-control" value="{{ $service->email }}" id="email"
                                    placeholder="أدخل ايميل المسؤول" name="email">
                            </div>
                             <div class="form-group">
                                <label for="exampleInputEmail1">هاتف مقدم الخدمة</label>
                                <input type="number" class="form-control" value="{{ $service->phone }}"
                                    id="phone" placeholder="أدخل رقم الهاتف " name="phone">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">عنوان مقدم الخدمة</label>
                                <input type="text" class="form-control" value="{{ $service->address }}"
                                    id="address" placeholder="أدخل العنوان بشكل تفصيلي" name="address">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="button" onclick="updateItem({{ $service->id }})"
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
            email: document.getElementById('email').value,
            phone:document.getElementById('phone').value,
        address:document.getElementById('address').value
        }
        update('/cms/services/' + id, data, '/cms/services')
    }
</script>
