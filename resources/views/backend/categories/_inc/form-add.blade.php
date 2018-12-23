<form action="{{route('admin.categories.store')}}" class="form-horizontal" method="POST">
        <div class="col-md-9">
            <div class="white-box">
                <div class="form-group">
                    <label class="col-md-12">Name <span class="help text-danger">*</span></label>
                    <div class="col-md-12">
                        <input type="text" name="name" class="form-control" value=""> </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Parent <span class="help text-danger">*</span></label>
                    <div class="col-md-12">
                        <select class="selectpicker form-control form-control-line" name="parent_id" data-style="form-control">
                            <option value="0">None</option>
                            @foreach ($cates as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Mô tả danh mục<span class="help text-danger">*</span></label>
                    <div class="col-md-12">
                        <textarea id="mymce" name="description"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">Public</div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <button class="btn btn-info waves-effect waves-light" id="submit" type="submit"><span class="btn-label"><i
                class="ti-save"></i></span>Save</button>
                    </div>
                </div>
            </div>
        </div>
        @csrf
    </form>