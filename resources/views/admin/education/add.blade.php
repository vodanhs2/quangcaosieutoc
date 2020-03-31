 @extends('admin/layouts/master-layout') @section('main')
 <!-- Container Fluid-->
 <div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Trang chủ</a></li>
            <li class="breadcrumb-item">Khóa học</li>
            <li class="breadcrumb-item active" aria-current="page">Thêm khóa học</li>
        </ol>
    </div>

    <!-- Row -->
    <div class="row">
        <!-- DataTable with Hover -->
        <div class="col-md-12">
            <div class="card mb-4 p-4">
                @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
                @endif
                <form action="" method="POST" role="form">
                    @csrf
                    <legend style="font-weight: bold;">Thêm Mới khóa học </legend>
                    <style>
                        .errors {
                            color: red;
                        }
                        .pick-a-color-markup .color-menu.color-menu--inline {
                           left: 50%;

                       }
                   </style>
                   <div class="form-group">
                    <label for="">Danh Mục(*)</label>
                    <select name="cat_id" id="input" class="form-control" required="required">
                      <option value=""><----------Mời chọn Danh Mục-------------></option>}
                      @foreach($cats as $c)
                      <option value="{{$c->id}}">{{$c->name}}</option>
                      @endforeach
                  </select>
                  @if($errors->has('cat_id'))
                  <div class="invalid-feedback">
                    {{$errors->first('cat_id')}}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="" id="name">Tên khóa học(*)</label>
                <input type="text" class="form-control  @if($errors->has('name'))is-invalid @endif" name="name" placeholder="nhập tên"> @if($errors->has('name'))
                <div class="invalid-feedback">
                    {{$errors->first('name')}}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="">background:</label>
                <div class="input-group">
                   <input value="fff" name="color" class="pick-a-color form-control" type="text">
               </div>                       
           </div>


           <div class="form-group">
            <label for="">mô tả(*)</label>
            <textarea name="description" placeholder="nhập mô tả" class="form-control   @if($errors->has('description'))is-invalid @endif "></textarea>
            @if($errors->has('description'))
            <div class="invalid-feedback">
                {{$errors->first('description')}}
            </div>
            @endif
        </div>
        <div class="form-group">
            <label for="">Giá khóa học(*)</label>
            <input type="number" class="form-control  @if($errors->has('price'))is-invalid @endif" name="price" placeholder="nhập giá khóa học"> @if($errors->has('price'))
            <div class="invalid-feedback">
                {{$errors->first('price')}}
            </div>
            @endif
        </div>
        <div class="form-group">
            <label for=""> Giá Sale(%) (nếu có)</label>
            <input type="number" class="form-control  @if($errors->has('price'))is-invalid @endif" name="sale_price" placeholder="nhập % Sale"> @if($errors->has('sale_price'))
            <div class="invalid-feedback">
                {{$errors->first('sale_price')}}
            </div>
            @endif
        </div>
        <div class="form-group">
            <label for="">Ảnh đại diện</label>
            <div class="input-group">
                <input type="text" class="form-control @if($errors->has('image'))is-invalid @endif" name="image" id="image" placeholder="Trống" readonly> @if($errors->has('image'))
                <div class="invalid-feedback">
                    {{$errors->first('image')}}
                </div>
                @endif
                <span class="input-group-btn">
                    <a href="#modal-file" data-toggle ="modal" class="btn btn-primary">Chọn file</a>
                </span>
            </div>

            <img src="" id="show-image" style="margin: 10px 0" class="img-fluid">
        </div>

        <h4 style="text-align: center; color: black;font-weight: bold;">Các Mục nội dung(hiện thị bên trang chi tiết khóa học)</h4>
        <div class="form-group">
            <label for="">Nội dung 1(*)</label>
            <textarea name="content_1" placeholder="nhập mô tả" class="ckeditor form-control  @if($errors->has('content_1'))is-invalid @endif"></textarea>
            @if($errors->has('content_1'))
            <div class="invalid-feedback">
                {{$errors->first('content_1')}}
            </div>
            @endif
        </div>
        <div class="form-group">
            <label for="">Nội dung 2(nếu có)</label>
            <textarea name="content_2" placeholder="nhập mô tả" class="ckeditor form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="">Nội dung 3(nếu có)</label>
            <textarea name="content_3" placeholder="nhập mô tả" class="ckeditor form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="">Nội dung 4(nếu có)</label>
            <textarea name="content_4" placeholder="nhập mô tả" class="ckeditor form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="">Nội dung 5(nếu có)</label>
            <textarea name="content_5" placeholder="nhập mô tả" class="ckeditor form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="">Nội dung 6(nếu có)</label>
            <textarea name="content_6" placeholder="nhập mô tả" class="ckeditor form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="">Nội dung 7(nếu có)</label>
            <textarea name="content_7" placeholder="nhập mô tả" class="ckeditor form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="">Nội dung 8(nếu có)</label>
            <textarea name="content_8" placeholder="nhập mô tả" class="ckeditor form-control"></textarea>
        </div>

        <a href="{{route('service')}}" class="btn btn-danger">Hủy</a>
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
</div>
</div>
</div>
<!--Row-->

</div>
<!---Container Fluid-->
@stop() @section('js')

<!-- Modal -->
<div class="modal fade" id="modal-file" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable|modal-dialog-centered modal-sm|modal-lg|modal-xl" style="max-width: 10000px !important;width:85%" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Quản lý file</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe src="{{asset('filemanager/dialog.php?field_id=image')}}" style="width: 100%;height: 500px;overflow: auto"></iframe>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript">
    $('#modal-file').on('hide.bs.modal', function(event) {
        var img = $('input#image').val();
        $('img#show-image').attr('src', img);
    });

    $(document).ready(function () {

        $(".pick-a-color").pickAColor({             
            showSpectrum: true, 
            showSavedColors:true,   
            saveColorsPerElement:true,  
            fadeMenuToggle:true,    
            showAdvanced:true,  
            showBasicColors: true,  
            showHexInput:true,  
            allowBlank:true,inlineDropdown:true 
        }); 
    });
</script>
@stop()