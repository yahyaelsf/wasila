@extends('cms.parent')
@section('style')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('cms/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cms/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection
@section('title', 'إنشاء مقدم خدمة')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title float-left">إنشاء مقدم خدمة</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" id="reset-form">
                        @csrf
                        <div class="card-body">
                              {{-- <div class="form-group">
                                <label>   Roles</label>
                                <select class="form-control roles" style="width: 100%;" id="role_id"
                                    name="role_id">
                                    @foreach ($data as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div> --}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">إسم مقدم الخدمة</label>
                                <input type="text" class="form-control"
                                    id="name" placeholder="أدخل الإسم كاملا" name="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">إيميل مقدم الخدمة</label>
                                <input type="email" class="form-control"
                                    id="email" placeholder="أدخل الايميل" name="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">كلمة المرور</label>
                                <input type="password" class="form-control"
                                    id="password" placeholder="أدخل كلمة المرور" name="password">
                            </div>
                             <div class="form-group">
                                <label for="exampleInputEmail1">هاتف مقدم الخدمة</label>
                                <input type="number" class="form-control"
                                    id="phone" placeholder=" أدخل رقم الهاتف  " name="phone">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">عنوان مقدم الخدمة</label>
                                <input type="text" class="form-control"
                                    id="address" placeholder="أدخل العنوان بشكل تفصيلي" name="address">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="button" onclick="createItem()" class="btn btn-primary">حفظ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
function createItem(){
    let data =  {
        name: document.getElementById('name').value,
        email:document.getElementById('email').value,
        password:document.getElementById('password').value,
        phone:document.getElementById('phone').value,
        address:document.getElementById('address').value
    }
    store('/cms/services',data);
}
</script>
@section('script')
    <!-- Select2 -->
    <script src="{{ asset('cms/plugins/select2/js/select2.full.min.js') }}"></script>
     <script>

    //   Initialize Select2 Elements
      $('.roles').select2({
        theme: 'bootstrap4'
      });

    </script>
@endsection
