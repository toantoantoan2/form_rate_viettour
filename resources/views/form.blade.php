<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/css/form.css') }}">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="{{ asset('frontend/css/form.css')    }}"></script>
</head>
<body>
<div class="container">
<h1 class ="title-green">
    Phiếu khảo sát khách hàng
</h1>
<p>
   Chân thành cảm ơn Qúy khách hàng đã tín nhiệm và sử dụng dịch vụ của đất việt tour. Với mong muốn không ngừng nâng cao chất lượng sản phẩm để phục vụ khách hàng càng ngay càng tốt hơn, tôi rất mong Qúy khách hàng dành ít thời gian đóng góp ý kiến theo bảng dưới đây, hoặc Qúy khách hàng có thể góp ý trực tiếp bằng thư điện tử cho phòng chăm sóc khách hàng qua email:
</p>
<p class ="title-green">
    cskh@datviettour.com.vn hoặc tổng đài (028) 73 081 888  (Line: 2204).
</p>
<form>
<div class="row">
<div class="col-12">
<h6 class ="title-green d-inline-block">
    1.Thông tin cá nhân
</h6>
<p class="title-purple d-inline-block">  (* Thông tin bắt buộc) </p>
</div>
<div class="col-6">
        <div class="form-group">
            <label for="fullname" class="font-weight-bold">Họ và tên <span class="title-purple">*</span>:</label>
            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Họ và tên người đánh giá">
          </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="phone_num" class="font-weight-bold">Điện thoại di động <span class="title-purple">*</span>:</label>
            <input type="number" name="phone_num" class="form-control" id="phone_num" placeholder="Điện thoại di động">
          </div>
          <div class="form-group col-md-6">
            <label for="email" class="font-weight-bold">Thư điện tử:</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Thư điện tử">
          </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="birthday" class="font-weight-bold">Sinh nhật:</label>
              <input type="date" name="birthday" class="form-control" id="birthday" placeholder="Sinh nhật">
            </div>
            <div class="form-group col-md-6">
              <label for="address" class="font-weight-bold">Địa chỉ liên hệ:</label>
              <input type="text" name="address" class="form-control" id="address" placeholder="Địa chỉ liên hệ">
            </div>
          </div>
</div>
<div class="col-6">
        <div class="form-group">
            <label for="fullname_company" class="font-weight-bold">Tên công ty<small> (nếu là khách đoàn)</small> - Tên trưởng nhóm <small>(nếu là khách ghép lẻ) </small><span class="title-purple">*</span>:</label>
            <input type="text" class="form-control" id="fullname_company" name="fullname_company" placeholder="Tên công ty hoặc tên trường nhóm">
          </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="tour_name" class="font-weight-bold">Chương trình tour <span class="title-purple">*</span>:</label>
            <input type="text" name="tour_name" class="form-control" id="tour_name" placeholder="Tên chương trinh tour">
          </div>
          <div class="form-group col-md-6">
            <label for="tour_lead" class="font-weight-bold">Tên hướng dẫn viên <span class="title-purple">*</span>:</label>
            <input type="text" name="tour_lead" class="form-control" id="tour_lead" placeholder="Tên HDV chính của tour">
          </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="start_day" class="font-weight-bold">Ngày đi:</label>
              <input type="date" name="start_day" class="form-control" id="start_day">
            </div>
            <div class="form-group col-md-6">
              <label for="back_day" class="font-weight-bold">Ngày về:</label>
              <input type="date" name="back_day" class="form-control" id="back_day" >
            </div>
          </div>
</div>
</div>
<h6 class="title-purple">
    Xin quý khách vui lòng cho đánh giá & lựa chọn mức độ hài lòng của quý khách về dịch vụ tour mà quý khách đã trải nghiệm!
</h6>


<br>
<div class="row">
    <div class="col-12">
        <h6 class ="title-green"    >
            2.Cảm nhận chung của Quý khách về chất lượng tour của Đất Việt Tour
        </h6>
        </div>
        <div class="col-7 d-flex justify-content-between">
            <div class="form-check d-inline-block">
            <input  class="form-check-input" type="radio" name="feel" id="khonghailong" value="0"/>
        <label  class="form-check-label" for="khonghailong">Không hài lòng</label>
            </div>
            <div class="form-check d-inline-block">
        <input  class="form-check-input" type="radio" name="feel" id="binhthuong" value="1"/>
        <label  class="form-check-label" for="binhthuong">Bình thường</label>
    </div>
        <div class="form-check d-inline-block">
        <input  class="form-check-input" type="radio" name="feel" id="hailong" value="2"/>
        <label  class="form-check-label" for="hailong">Hài lòng</label>
    </div>
        <div class="form-check d-inline-block">
        <input  class="form-check-input" type="radio" name="feel" id="rathailong" value="3"/>
        <label  class="form-check-label" for="rathailong">Rất hài lòng</label>
    </div>
                </div>

</div>

<!-- first checkbox form -->
<br>
<div class="row">
    <div class="col-6">

    <div class="row">
        <div class="col-5">
        <h6 class ="title-green d-inline-block">
            3.Đánh giá chương trình tour
        </h6>

        <h6>
            Hành trình tour
        </h6>
        <h6>
            Phân bổ thời gian
        </h6>
        <h6>
            Điểm tham quan
        </h6>
        <h6>
            Điểm mua sắm
        </h6>
    </div>

        <div class="col-7 d-flex justify-content-between">
<div class="container-checkbox">
    <h6 class="font-weight-bold">
        Không tốt
    </h6>

    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="khonghailong" value="0"/>
        </div>
        <div class="form-check">
    <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="binhthuong" value="1"/>
</div>
    <div class="form-check">
    <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="hailong" value="2"/>
</div>
    <div class="form-check">
    <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
</div>

</div>

<div class="container-checkbox">
     <h6 class="font-weight-bold">
        Bình thường
    </h6>

    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="khonghailong" value="0"/>
        </div>
        <div class="form-check">
    <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="binhthuong" value="1"/>
</div>
    <div class="form-check">
    <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="hailong" value="2"/>
</div>
    <div class="form-check">
    <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
</div>

</div>

<div class="container-checkbox">
    <h6 class="font-weight-bold">
        Tốt
    </h6>

    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="khonghailong" value="0"/>
        </div>
        <div class="form-check">
    <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="binhthuong" value="1"/>
</div>
    <div class="form-check">
    <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="hailong" value="2"/>
</div>
    <div class="form-check">
    <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
</div>

</div>

<div class="container-checkbox">
    <h6 class="font-weight-bold">
        Rất tốt
    </h6>

    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="khonghailong" value="0"/>
        </div>
        <div class="form-check">
    <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="binhthuong" value="1"/>
</div>
    <div class="form-check">
    <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="hailong" value="2"/>
</div>
    <div class="form-check">
    <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
</div>

</div>



        </div>
      <div class="col-12">

        <div class="form-group">
            <h6 class="d-inline-block"> Ý kiến khác: </h6>
            <input type="text" class="input-no-border" id="others" name="y_kien_khac" placeholder="......................................................................................................................................................................">
          </div>

      </div>

    </div>

    </div>

    <div class="col-6">

        <div class="row">
            <div class="col-5">
            <h6 class ="title-green d-inline-block">
                5.Đánh giá về nhà hàng
            </h6>

            <h6>
                Chất lượng bữa ăn
            </h6>
            <h6>
                Vệ sinh chung
            </h6>
            <h6>
                Thái độ phục vụ
            </h6>
            <h6>
                Điểm mua sắm
            </h6>
        </div>

            <div class="col-7 d-flex justify-content-between">
    <div class="container-checkbox">
        <h6 class="font-weight-bold">
            Không tốt
        </h6>

        <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="khonghailong" value="0"/>
            </div>
            <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="binhthuong" value="1"/>
    </div>
        <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="hailong" value="2"/>
    </div>
        <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
    </div>

    </div>

    <div class="container-checkbox">
        <h6 class="font-weight-bold">
            Bình thường
        </h6>

        <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="khonghailong" value="0"/>
            </div>
            <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="binhthuong" value="1"/>
    </div>
        <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="hailong" value="2"/>
    </div>
        <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
    </div>

    </div>

    <div class="container-checkbox">
        <h6 class="font-weight-bold">
            Tốt
        </h6>

        <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="khonghailong" value="0"/>
            </div>
            <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="binhthuong" value="1"/>
    </div>
        <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="hailong" value="2"/>
    </div>
        <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
    </div>

    </div>

    <div class="container-checkbox">
        <h6 class="font-weight-bold">
            Rất tốt
        </h6>

        <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="khonghailong" value="0"/>
            </div>
            <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="binhthuong" value="1"/>
    </div>
        <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="hailong" value="2"/>
    </div>
        <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
    </div>

    </div>


            </div>
            <div class="col-12">

                <div class="form-group">
                    <h6 class="d-inline-block"> Ý kiến khác: </h6>
                    <input type="text" class="input-no-border" id="others" name="y_kien_khac" placeholder="......................................................................................................................................................................">
                  </div>

              </div>

        </div>


    </div>

    </div>
<!-- second checkbox form !-->
    <br>
    <div class="row">
        <div class="col-6">

        <div class="row">
            <div class="col-5">
            <h6 class ="title-green d-inline-block">
                4.Đánh giá về hướng dẫn viên
            </h6>

            <h6 class="font-weight-bold">
                Thái độ phục vụ
            </h6>
            <h6>
                Trang phục
            </h6>
            <h6>
                Vui vẻ hòa đồng thân thiện
            </h6>
            <h6>
                Nhiệt tình
            </h6>
            <h6>
                Biết lắng Nghe
            </h6>
            <h6 class="font-weight-bold">
                Kỹ năng chuyên môn
            </h6>
            <h6>
                Kiến thức
            </h6>
            <h6>
               Xử lý tình huống
            </h6> <h6>
                Giọng nói
            </h6>
        </div>

            <div class="col-7 d-flex justify-content-between">
    <div class="container-checkbox">
        <h6 class="font-weight-bold">
            Không tốt
        </h6>

        <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="khonghailong" value="0"/>
            </div>
            <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="binhthuong" value="1"/>
    </div>
        <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="hailong" value="2"/>
    </div>
        <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
    </div>

    </div>

    <div class="container-checkbox">
        <h6 class="font-weight-bold">
            Bình thường
        </h6>

        <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="khonghailong" value="0"/>
            </div>
            <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="binhthuong" value="1"/>
    </div>
        <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="hailong" value="2"/>
    </div>
        <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
    </div>

    </div>

    <div class="container-checkbox">
        <h6 class="font-weight-bold">
            Tốt
        </h6>

        <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="khonghailong" value="0"/>
            </div>
            <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="binhthuong" value="1"/>
    </div>
        <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="hailong" value="2"/>
    </div>
        <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
    </div>

    </div>

    <div class="container-checkbox">
        <h6 class="font-weight-bold">
            Rất tốt
        </h6>

        <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="khonghailong" value="0"/>
            </div>
            <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="binhthuong" value="1"/>
    </div>
        <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="hailong" value="2"/>
    </div>
        <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
    </div>

    </div>



            </div>
          <div class="col-12">

            <div class="form-group">
                <h6 class="d-inline-block"> Ý kiến khác: </h6>
                <input type="text" class="input-no-border" id="others" name="y_kien_khac" placeholder="......................................................................................................................................................................">
              </div>

          </div>

        </div>

        </div>

        <div class="col-6">

            <div class="row">
                <div class="col-5">
                <h6 class ="title-green d-inline-block">
                    6.Đánh giá nơi lưu trú
                </h6>

                <h6>
                    Chất lượng phòng
                </h6>
                <h6>
                    Vị trí khách sạn
                </h6>
                <h6>
                    Thái độ phục vụ
                </h6>
            </div>

                <div class="col-7 d-flex justify-content-between">
        <div class="container-checkbox">
            <h6 class="font-weight-bold">
                Không tốt
            </h6>

            <div class="form-check">
                <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="khonghailong" value="0"/>
                </div>
                <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="binhthuong" value="1"/>
        </div>
            <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="hailong" value="2"/>
        </div>

        </div>

        <div class="container-checkbox">
            <h6 class="font-weight-bold">
                Bình thường
            </h6>
                <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="binhthuong" value="1"/>
        </div>
            <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="hailong" value="2"/>
        </div>
            <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
        </div>

        </div>

        <div class="container-checkbox">
            <h6 class="font-weight-bold">
                Tốt
            </h6>
                <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="binhthuong" value="1"/>
        </div>
            <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="hailong" value="2"/>
        </div>
            <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
        </div>

        </div>

        <div class="container-checkbox">
            <h6 class="font-weight-bold">
                Rất tốt
            </h6>

                <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="binhthuong" value="1"/>
        </div>
            <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="hailong" value="2"/>
        </div>
            <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
        </div>

        </div>


                </div>
                <div class="col-12">

                    <div class="form-group">
                        <h6 class="d-inline-block"> Ý kiến khác: </h6>
                        <input type="text" class="input-no-border" id="others" name="y_kien_khac" placeholder=".............................................................................................................................">
                      </div>

                  </div>

            </div>

            <div class="row">
                <div class="col-5">
                <h6 class ="title-green d-inline-block">
                    7.Phương tiện vận chuyển
                </h6>

                <h6>
                    Chất lượng phương tiện
                </h6>
                <h6>
                    Thái độ phục vụ của tài xế
                </h6>
                <h6>
                    Mức độ an toàn của chuyến đi
                </h6>
                <h6>
                    Mức độ vệ sinh phương tiện
                </h6>
            </div>

                <div class="col-7 d-flex justify-content-between">
        <div class="container-checkbox">
            <h6 class="font-weight-bold">
                Không tốt
            </h6>

            <div class="form-check">
                <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="khonghailong" value="0"/>
                </div>
                <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="binhthuong" value="1"/>
        </div>
            <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="hailong" value="2"/>
        </div>
            <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
        </div>

        </div>

        <div class="container-checkbox">
            <h6 class="font-weight-bold">
                Bình thường
            </h6>

            <div class="form-check">
                <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="khonghailong" value="0"/>
                </div>
                <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="binhthuong" value="1"/>
        </div>
            <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="hailong" value="2"/>
        </div>
            <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
        </div>

        </div>

        <div class="container-checkbox">
            <h6 class="font-weight-bold">
                Tốt
            </h6>

            <div class="form-check">
                <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="khonghailong" value="0"/>
                </div>
                <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="binhthuong" value="1"/>
        </div>
            <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="hailong" value="2"/>
        </div>
            <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
        </div>

        </div>

        <div class="container-checkbox">
            <h6 class="font-weight-bold">
                Rất tốt
            </h6>

            <div class="form-check">
                <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="khonghailong" value="0"/>
                </div>
                <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="binhthuong" value="1"/>
        </div>
            <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="hailong" value="2"/>
        </div>
            <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="feel" id="rathailong" value="3"/>
        </div>

        </div>


                </div>
                <div class="col-12">

                    <div class="form-group">
                        <h6 class="d-inline-block"> Ý kiến khác: </h6>
                        <input type="text" class="input-no-border" id="others" name="y_kien_khac" placeholder="..................................................................................................................................">
                      </div>

                  </div>

            </div>


        </div>

        </div>

        <h6 class="title-purple font-weight-bold">
            4b. Đánh giá về HDV địa phương đối với tour nước ngoài <i class="fa fa-caret-down" aria-hidden="true"></i>
        </h6>

        <br>
<div class="row">
    <div class="col-12">
        <h6 class ="title-green"    >
            8.Qúy khách biết đến đất việt tour qua phương tiện nào?
        </h6>
        </div>
        <div class="col-12 d-flex justify-content-between">
            <div class="form-check d-inline-block">
            <input  class="form-check-input" type="radio" name="feel" id="khonghailong" value="0"/>
        <label  class="form-check-label" for="khonghailong">Bạn bè/người thân</label>
            </div>
            <div class="form-check d-inline-block">
        <input  class="form-check-input" type="radio" name="feel" id="binhthuong" value="1"/>
        <label  class="form-check-label" for="binhthuong">Công ty/đồng nghiệp</label>
    </div>
        <div class="form-check d-inline-block">
        <input  class="form-check-input" type="radio" name="feel" id="hailong" value="2"/>
        <label  class="form-check-label" for="hailong">Tìm kiếm trên google</label>
    </div>
        <div class="form-check d-inline-block">
        <input  class="form-check-input" type="radio" name="feel" id="rathailong" value="3"/>
        <label  class="form-check-label" for="rathailong">Quảng cáo từ Facebook</label>
    </div>

    <div class="form-check d-inline-block">
        <input  class="form-check-input" type="radio" name="feel" id="rathailong" value="3"/>
        <label  class="form-check-label" for="rathailong">Khác:</label>
        <input type="text" class="input-no-border input-no-border-small " id="others" name="y_kien_khac" placeholder="...................................................">
    </div>
                </div>

</div>

<br>
<div class="row">
<div class="col-12">
<h6 class ="title-green"    >
    9.Trước đây đã từng đi tour của Đất Việt Tour chưa?
</h6>
</div>
<div class="col-12">
    <div class="form-check">
    <input  class="form-check-input" type="radio" name="feel" id="khonghailong" value="0"/>
<label  class="form-check-label" for="khonghailong">Đã đi tour trong nước. Số lần:</label>
<input type="text" class="input-no-border input-no-border-small " id="others" name="y_kien_khac" placeholder="...................................................">
    </div>
    <div class="form-check">
<input  class="form-check-input" type="radio" name="feel" id="binhthuong" value="1"/>
<label  class="form-check-label" for="binhthuong">Đã đi tour nước ngoài. Số lần:</label>
<input type="text" class="input-no-border input-no-border-small " id="others" name="y_kien_khac" placeholder="...................................................">
</div>
<div class="form-check">
<input  class="form-check-input" type="radio" name="feel" id="hailong" value="2"/>
<label  class="form-check-label" for="hailong">Trước đây chưa từng đi</label>
</div>
        </div>

</div>

<br>
<div class="row">
<div class="col-12">
<h6 class ="title-green"    >
    10.Nếu lựa chọn. Qúy khách sẽ chọn loại hình du lịch nào sau đây? (Được chọn nhiều câu trả lời)
</h6>
</div>

<div class="col-12">
    <div class="form-check">
    <input  class="form-check-input" type="radio" name="feel" id="hailong" value="2"/>
    <label  class="form-check-label" for="hailong">Du lịch nghỉ dưỡng (ăn uống, nghỉ ngơi, thư giãn...)</label>
    </div>
    <div class="form-check">
        <input  class="form-check-input" type="radio" name="feel" id="hailong" value="2"/>
        <label  class="form-check-label" for="hailong">Du lịch khám phá (tham quan, chụp hình, Mua sắm...)</label>
        </div>
        <div class="form-check">
            <input  class="form-check-input" type="radio" name="feel" id="hailong" value="2"/>
            <label  class="form-check-label" for="hailong">Du lịch trải nghiệm (leo núi, vượt rừng, cắm trại, đạp xe, chèo thuyền...)</label>
            </div>
            <div class="form-check">
                <input  class="form-check-input" type="radio" name="feel" id="hailong" value="2"/>
                <label  class="form-check-label" for="hailong">Du lịch sức khỏe (thiền định, yoga, cân bằng thân-tâm-trí...)</label>
                </div>
                <div class="form-check">
                    <input  class="form-check-input" type="radio" name="feel" id="hailong" value="2"/>
                    <label  class="form-check-label" for="hailong">Du lịch nghỉ dưỡng (trò chơi, hoạt động nhóm, tiệc gala...)</label>
                    </div>

                    <div class="form-check">
                        <input  class="form-check-input" type="radio" name="feel" id="rathailong" value="3"/>
                        <label  class="form-check-label" for="rathailong">Khác:</label>
                        <input type="text" class="input-no-border input-no-border-small " id="others" name="y_kien_khac" placeholder=".....................................................................................................">
                    </div>
            </div>

</div>

<br>
<div class="row">
<div class="col-12">
<h6 class ="title-green"    >
    11.Yếu tố nào ẢNH HƯỞNG NHẤT đến quyết định chọn tour của quý khách? (Chọn 01 câu trả lời)
</h6>
</div>
<div class="col-12">
    <div class="form-check">
    <input  class="form-check-input" type="radio" name="feel" id="hailong" value="2"/>
    <label  class="form-check-label" for="hailong">Uy tín thương hiệu</label>
    </div>
    <div class="form-check">
        <input  class="form-check-input" type="radio" name="feel" id="hailong" value="2"/>
        <label  class="form-check-label" for="hailong">Có khuyến mãi/ quà tặng</label>
        </div>
        <div class="form-check">
            <input  class="form-check-input" type="radio" name="feel" id="hailong" value="2"/>
            <label  class="form-check-label" for="hailong">Gía rẻ hơn nơi khác</label>
            </div>
            <div class="form-check">
                <input  class="form-check-input" type="radio" name="feel" id="hailong" value="2"/>
                <label  class="form-check-label" for="hailong">Thấy quảng cáo nhiều</label>
                </div>
                <div class="form-check">
                    <input  class="form-check-input" type="radio" name="feel" id="hailong" value="2"/>
                    <label  class="form-check-label" for="hailong">Nhân viên tư vấn nhiệt tình</label>
                    </div>
                    <div class="form-check">
                        <input  class="form-check-input" type="radio" name="feel" id="hailong" value="2"/>
                        <label  class="form-check-label" for="hailong">Người thân bạn bè giới thiệu</label>
                        </div>
                    <div class="form-check">
                        <input  class="form-check-input" type="radio" name="feel" id="rathailong" value="3"/>
                        <label  class="form-check-label" for="rathailong">Khác:</label>
                        <input type="text" class="input-no-border input-no-border-small " id="others" name="y_kien_khac" placeholder=".....................................................................................................">
                    </div>
            </div>


</div>

<br>
<div class="row">
<div class="col-12">
<h6 class ="title-green"    >
    12.Ngoài những đánh giá trên, Đất Việt Tour rất sẵn lòng nhận thêm các góp ý từ quý khách
</h6>
</div>
<div class="col-12">
    <div class="form-group">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Nhập ý kiến đóng góp khác (nếu có)"></textarea>
      </div>
      <p class="font-weight-bold">
        Đất Việt Tour chân thành cảm ơn những đóng góp đánh giá ý kiến của Quý khách hàng, Đất Việt Tour xin ghi nhận và sẽ cải tiến nâng cấp dịch vụ để phục vụ Quý khách hàng ngày một tốt hơn!
      </p>
</div>
</div>
<div class="row">
    <div class="col-12 capcha-container">
        <div class="g-recaptcha" data-sitekey="6Ldbdg0TAAAAAI7KAf72Q6uagbWzWecTeBWmrCpJ"></div>
        <input type="submit" class="btn btn-success" value="GỬI Ý KIẾN"/>
    </div>
    </div>
</form>
</div>
</body>

