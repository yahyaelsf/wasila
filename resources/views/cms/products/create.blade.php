@extends('cms.parent')
@section('style')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('cms/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cms/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

@endsection
@section('title', 'إنشاء منتج')
@section('content')

    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title float-left">إنشاء منتج</h3>
            </div>

            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" id="reset-form">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>اختيار التصنيف</label>
                        <select class="form-control select2 " style="width: 100%;" id="category_id" name="category_id">
                            @foreach ($data as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> إسم المنتج</label>
                        <input type="text" class="form-control" id="name" placeholder="أدخل إسم المنتج"
                            name="name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> وصف المنتج</label>
                        <input type="text" class="form-control" id="description" placeholder="أدخل وصف المنتج"
                            name="description">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">سعر المنتج</label>
                        <input type="number" class="form-control" id="price" placeholder="أدخل سعر المنتج"
                            name="price">
                    </div>
                    <div class="form-group">
                        <label for="customFile">تحميل صورة المنتج</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1" checked name="active">
                            <label class="custom-control-label" for="customSwitch1">التغعيل</label>
                        </div>
                    </div>
                </div>

                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="button" onclick="createItem()" class="btn btn-primary">حفظ</button>
                </div>
            </form>
        </div>
    </div>
@endsection

<script>
    function createItem() {
        let formData = new FormData();
        formData.append('category_id', document.getElementById('category_id').value);
        formData.append('name', document.getElementById('name').value);
        formData.append('description', document.getElementById('description').value);
        formData.append('price', document.getElementById('price').value);
        if(document.getElementById('image').files[0]!= undefined){
          formData.append('image', document.getElementById('image').files[0]);
        }
        formData.append('active', document.getElementById('customSwitch1').checked);
        store('/products', formData);
    }
</script>
@section('script')
    <!-- Select2 -->
    <script src="{{ asset('cms/plugins/select2/js/select2.full.min.js') }}"></script>
    <script>
        $('.select2').select2({
            theme: 'bootstrap4'
        })
    </script>
@endsection
