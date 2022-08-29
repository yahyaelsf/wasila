@extends('cms.parent')
@section('title', 'تعديل التصنيف')
@section('content')

            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title float-left">تعديل التصنيف</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">إسم التصنيف</label>
                                <input type="text" class="form-control" value="{{ $category->name }}" id="name"
                                    placeholder="أدخل إسم التصنيف" name="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">وصف التصنيف</label>
                                <input type="text" class="form-control" value="{{ $category->description }}"
                                    id="description" placeholder="أدخل وصف التصنيف" name="description">
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1"
                                       @if ($category->active_status == 'فعال') checked @endif name="active">
                                    <label class="custom-control-label" for="customSwitch1">التفعيل</label>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="button" onclick="updateItem({{ $category->id }})"
                                class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
@endsection
<script>
    function updateItem(id) {
        let data = {
            name: document.getElementById('name').value,
            description: document.getElementById('description').value,
            active: document.getElementById('customSwitch1').checked

        }
        update('/categories/' + id, data, '/categories')
    }
</script>
