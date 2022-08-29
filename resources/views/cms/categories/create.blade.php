@extends('cms.parent')
@section('title', 'إنشاء تصنيف')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title float-left" >إنشاء تصنيف</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" id="reset-form">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">إسم التصنيف</label>
                                <input type="text" class="form-control"
                                       id="name" placeholder="أدخل إسم التصنيف" name="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">وصف التصنيف</label>
                                <input type="text" class="form-control"
                                       id="description" placeholder="أدخل وصف التصنيف" name="description">
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1" checked name="active_status">
                                    <label class="custom-control-label " for="customSwitch1">التفعيل</label>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="button" onclick="createItem()" class="btn btn-primary ">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

    <script>
        function createItem() {
            let data = {
                name: document.getElementById('name').value,
                description: document.getElementById('description').value,
                active: document.getElementById('customSwitch1').checked

            }
            store('/categories', data);
        }
    </script>


