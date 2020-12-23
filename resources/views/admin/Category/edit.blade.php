@extends('admin.layoutadmin')
@section('content')
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Sửa Thương Hiệu</a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                    <form role="form" action="{{route('postedit-category',$category->id)}}" method="POST"enctype="multipart/form-data">
                                     {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-font" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Tên Danh Mục"required=""name="txtname"value="{{$category->namecat}}">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                                                        <input class="form-control"data-toggle="dropdown" value="Ấn Để Mô Tả Danh Mục"type="submit">
                                                        <ul  class="dropdown-header-top author-log dropdown-menu animated zoomIn"> 
                                                         <textarea type="text" class="form-control" name="txtcontent"id="contents">{{$category->contentcat}}</textarea>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-image" aria-hidden="true"></i></span>
                                                        <input class="form-control"data-toggle="dropdown" value="Hình Ảnh"type="submit">
                                                        <ul  class="dropdown-header-top author-log dropdown-menu animated zoomIn"> 
                                                         <input type="file" class="form-control"name="txtimage"id="ful"/>
                                                         <img id="imgPre" src="" alt="Không Có Ảnh" class="img-thumbnail" />
                                                        </ul>
                                                    </div>
                                                    <select class="form-control pro-edt-select form-control-primary"name="txtstatus">
                                                            <option value="1" <?php if($category->status == 1) echo 'selected';   ?> >Trạng Thái: Kích Hoạt</option>
															<option value="0" <?php if($category->status == 0) echo 'selected';   ?>>Trạng Thái: Tạm Khóa</option>
													</select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center custom-pro-edt-ds">
                                                    <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Sửa</button>
                                                    <button type="button" class="btn btn-ctl-bt waves-effect waves-light m-r-10"><a href="{{route('index-category')}}">Trở về</a></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
 
    function readURL(input, idImg) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $(idImg).attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    $("#ful").change(function () {
        readURL(this, '#imgPre');
    });
</script>
@stop