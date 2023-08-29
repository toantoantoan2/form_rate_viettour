@extends('layouts/header_footer')
@section('main')
<body>
<div class="container container-form-details">
<h1 class ="title-green">
    Phiếu khảo sát khách hàng
</h1>
<form id="form-rate" method="post" action="">
    @csrf
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
            <input type="text" class="form-control check-empty" id="fullname" name="fullname" placeholder="Họ và tên người đánh giá" disabled value="{{ $clientAdvice->client_name }}">
          </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="phone_num" class="font-weight-bold">Điện thoại di động <span class="title-purple">*</span>:</label>
            <input disabled type="number" name="phone_num" class="form-control check-empty" id="phone_num" placeholder="Điện thoại di động" value="{{ $clientAdvice->phone_number }}">
          </div>
          <div class="form-group col-md-6">
            <label for="email" class="font-weight-bold">Thư điện tử:</label>
            <input disabled type="email" name="email" class="form-control" id="email" placeholder="Thư điện tử" value="{{ $clientAdvice->email }}">
          </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="birthday" class="font-weight-bold">Sinh nhật:</label>
              <input disabled type="date" name="birthday" class="form-control" id="birthday" placeholder="Sinh nhật" value="{{ $clientAdvice->date_of_birth }}">
            </div>
            <div class="form-group col-md-6">
              <label for="address" class="font-weight-bold">Địa chỉ liên hệ:</label>
              <input disabled type="text" name="address" class="form-control" id="address" placeholder="Địa chỉ liên hệ" value="{{ $clientAdvice->address }}">
            </div>
          </div>
</div>
<div class="col-6">
        <div class="form-group">
            <label for="fullname_company" class="font-weight-bold">Tên công ty<small> (nếu là khách đoàn)</small> - Tên trưởng nhóm <small>(nếu là khách ghép lẻ) </small><span class="title-purple">*</span>:</label>
            <input disabled type="text" class="form-control check-empty" id="fullname_company" name="fullname_company" placeholder="Tên công ty hoặc tên trường nhóm" value="{{ $clientAdvice->company_name }}">
          </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="tour_name" class="font-weight-bold">Chương trình tour <span class="title-purple">*</span>:</label>
            <input disabled type="text" name="tour_name" class="form-control check-empty" id="tour_name" placeholder="Tên chương trinh tour" value="{{ $clientAdvice->tour_name }}">
          </div>
          <div class="form-group col-md-6">
            <label for="tour_lead" class="font-weight-bold">Tên hướng dẫn viên <span class="title-purple">*</span>:</label>
            <input disabled type="text" name="tour_lead" class="form-control check-empty" id="tour_lead" placeholder="Tên HDV chính của tour" value="{{ $clientAdvice->lead_tour_name }}">
          </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="start_day" class="font-weight-bold">Ngày đi:</label>
              <input disabled type="date" name="start_day" class="form-control" id="start_day" value="{{ $clientAdvice->start_day }}">
            </div>
            <div class="form-group col-md-6">
              <label for="back_day" class="font-weight-bold">Ngày về:</label>
              <input disabled type="date" name="back_day" class="form-control" id="back_day" value="{{ $clientAdvice->back_day }}">
            </div>
          </div>
</div>

<!-- pass to jquery -->
<input type="hidden" name="clientAdvice" value="{{ json_encode($clientAdvice)}}">
<input type="hidden" name="clientLeadTourRate" value="{{ json_encode($clientAdvice->clientLeadTourRate)}}">
<input type="hidden" name="clientForeignLeadTourRate" value="{{ json_encode($clientAdvice->clientForeignLeadTourRate)}}">
<input type="hidden" name="clientRestaurantRate" value="{{ json_encode($clientAdvice->clientRestaurantRate)}}">
<input type="hidden" name="clientVehicleRate" value="{{ json_encode($clientAdvice->clientVehicleRate)}}">
<input type="hidden" name="clientTourRate" value="{{ json_encode($clientAdvice->clientTourRate)}}">
<input type="hidden" name="clientOtherAdvice" value="{{ json_encode($clientAdvice->clientOtherAdvice)}}">
<input type="hidden" name="clientAccommodationRate" value="{{ json_encode($clientAdvice->clientAccommodationRate)}}">
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
            <input  class="form-check-input" type="radio" name="general_thinking" id="khonghailong" value="0"/>
        <label  class="form-check-label" for="khonghailong">Không hài lòng</label>
            </div>
            <div class="form-check d-inline-block">
        <input  class="form-check-input" type="radio" name="general_thinking" id="binhthuong" value="1"/>
        <label  class="form-check-label" for="binhthuong">Bình thường</label>
    </div>
        <div class="form-check d-inline-block">
        <input  class="form-check-input" type="radio" name="general_thinking" id="hailong" value="2"/>
        <label  class="form-check-label" for="hailong">Hài lòng</label>
    </div>
        <div class="form-check d-inline-block">
        <input  class="form-check-input" type="radio" name="general_thinking" id="rathailong" value="3"/>
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
        <input  class="form-check-input checkbox-no-label" type="radio" name="tour_trip" id="khonghailong" value="0"/>
        </div>
        <div class="form-check">
    <input  class="form-check-input checkbox-no-label" type="radio" name="tour_time" id="binhthuong" value="0"/>
</div>
    <div class="form-check">
    <input  class="form-check-input checkbox-no-label" type="radio" name="tour_sight_seeing" id="hailong" value="0"/>
</div>
    <div class="form-check">
    <input  class="form-check-input checkbox-no-label" type="radio" name="tour_shopping" id="rathailong" value="0"/>
</div>

</div>

<div class="container-checkbox">
     <h6 class="font-weight-bold">
        Bình thường
    </h6>

    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="tour_trip" id="khonghailong" value="1"/>
        </div>
        <div class="form-check">
    <input  class="form-check-input checkbox-no-label" type="radio" name="tour_time" id="binhthuong" value="1"/>
</div>
    <div class="form-check">
    <input  class="form-check-input checkbox-no-label" type="radio" name="tour_sight seeing" id="hailong" value="1"/>
</div>
    <div class="form-check">
    <input  class="form-check-input checkbox-no-label" type="radio" name="tour_shopping" id="rathailong" value="1"/>
</div>

</div>

<div class="container-checkbox">
    <h6 class="font-weight-bold">
        Tốt
    </h6>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="tour_trip" id="khonghailong" value="2"/>
        </div>
        <div class="form-check">
    <input  class="form-check-input checkbox-no-label" type="radio" name="tour_time" id="binhthuong" value="2"/>
</div>
    <div class="form-check">
    <input  class="form-check-input checkbox-no-label" type="radio" name="tour_sight seeing" id="hailong" value="2"/>
</div>
    <div class="form-check">
    <input  class="form-check-input checkbox-no-label" type="radio" name="tour_shopping" id="rathailong" value="2"/>
</div>

</div>

<div class="container-checkbox">
    <h6 class="font-weight-bold">
        Rất tốt
    </h6>

    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="tour_trip" id="khonghailong" value="3"/>
        </div>
        <div class="form-check">
    <input  class="form-check-input checkbox-no-label" type="radio" name="tour_time" id="binhthuong" value="3"/>
</div>
    <div class="form-check">
    <input  class="form-check-input checkbox-no-label" type="radio" name="tour_sight seeing" id="hailong" value="3"/>
</div>
    <div class="form-check">
    <input  class="form-check-input checkbox-no-label" type="radio" name="tour_shopping" id="rathailong" value="3"/>
</div>

</div>



        </div>
      <div class="col-12">

        <div class="form-group">
            <h6 class="d-inline-block"> Ý kiến khác: </h6>
            <input disabled type="text" class="input-no-border" value="{{ $clientAdvice->clientTourRate->tour_other }}" id="others" name="tour_other" placeholder="......................................................................................................................................................................">
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
            <input  class="form-check-input checkbox-no-label" type="radio" name="restaurant_dinner" id="khonghailong" value="0"/>
            </div>
            <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="restaurant_clean" id="binhthuong" value="0"/>
    </div>
        <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="restaurant_attitude" id="hailong" value="0"/>
    </div>
        <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="restaurant_shopping" id="rathailong" value="0"/>
    </div>

    </div>

    <div class="container-checkbox">
        <h6 class="font-weight-bold">
            Bình thường
        </h6>

        <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="restaurant_dinner" id="khonghailong" value="1"/>
            </div>
            <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="restaurant_clean" id="binhthuong" value="1"/>
    </div>
        <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="restaurant_attitude" id="hailong" value="1"/>
    </div>
        <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="restaurant_shopping" id="rathailong" value="1"/>
    </div>

    </div>

    <div class="container-checkbox">
        <h6 class="font-weight-bold">
            Tốt
        </h6>

        <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="restaurant_dinner" id="khonghailong" value="2"/>
            </div>
            <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="restaurant_clean" id="binhthuong" value="2"/>
    </div>
        <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="restaurant_attitude" id="hailong" value="2"/>
    </div>
        <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="restaurant_shopping" id="rathailong" value="2"/>
    </div>

    </div>

    <div class="container-checkbox">
        <h6 class="font-weight-bold">
            Rất tốt
        </h6>

        <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="restaurant_dinner" id="khonghailong" value="3"/>
            </div>
            <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="restaurant_clean" id="binhthuong" value="3"/>
    </div>
        <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="restaurant_attitude" id="hailong" value="3"/>
    </div>
        <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="restaurant_shopping" id="rathailong" value="3"/>
    </div>

    </div>


            </div>
            <div class="col-12">

                <div class="form-group">
                    <h6 class="d-inline-block"> Ý kiến khác: </h6>
                    <input disabled type="text" class="input-no-border" value="{{ $clientAdvice->clientRestaurantRate->restaurant_other }}" id="others" name="restaurant_other" placeholder="......................................................................................................................................................................">
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
            <input  class="form-check-input checkbox-no-label" type="radio" name="tour_lead_attitude" id="khonghailong" value="0"/>
            </div>
            <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="tour_lead_uniform" id="tour_lead_uniform" value="0"/>
    </div>
        <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="tour_lead_friendly" id="tour_lead_uniform" value="0"/>
    </div>
        <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="tour_lead_enthusiasm" id="tour_lead_enthusiasm" value="0"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="tour_lead_listen" id="tour_lead_listen" value="0"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="tour_lead_specialize" id="tour_lead_specialize" value="0"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="tour_lead_knowledge" id="tour_lead_knowledge" value="0"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="tour_lead_situation" id="tour_lead_situation" value="0"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="tour_lead_voice" id="tour_lead_voice" value="0"/>
    </div>

    </div>

    <div class="container-checkbox">
        <h6 class="font-weight-bold">
            Bình thường
        </h6>

        <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="tour_lead_attitude" id="khonghailong" value="1"/>
            </div>
            <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="tour_lead_uniform" id="tour_lead_uniform" value="1"/>
    </div>
        <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="tour_lead_friendly" id="tour_lead_uniform" value="1"/>
    </div>
        <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="tour_lead_enthusiasm" id="tour_lead_enthusiasm" value="1"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="tour_lead_listen" id="tour_lead_listen" value="1"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="tour_lead_specialize" id="tour_lead_specialize" value="1"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="tour_lead_knowledge" id="tour_lead_knowledge" value="1"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="tour_lead_situation" id="tour_lead_situation" value="1"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="tour_lead_voice" id="tour_lead_voice" value="1"/>
    </div>

    </div>

    <div class="container-checkbox">
        <h6 class="font-weight-bold">
            Tốt
        </h6>

        <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="tour_lead_attitude" id="khonghailong" value="2"/>
            </div>
            <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="tour_lead_uniform" id="tour_lead_uniform" value="2"/>
    </div>
        <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="tour_lead_friendly" id="tour_lead_uniform" value="2"/>
    </div>
        <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="tour_lead_enthusiasm" id="tour_lead_enthusiasm" value="2"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="tour_lead_listen" id="tour_lead_listen" value="2"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="tour_lead_specialize" id="tour_lead_specialize" value="2"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="tour_lead_knowledge" id="tour_lead_knowledge" value="2"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="tour_lead_situation" id="tour_lead_situation" value="2"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="tour_lead_voice" id="tour_lead_voice" value="2"/>
    </div>

    </div>

    <div class="container-checkbox">
        <h6 class="font-weight-bold">
            Rất tốt
        </h6>

        <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="tour_lead_attitude" id="khonghailong" value="3"/>
            </div>
            <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="tour_lead_uniform" id="tour_lead_uniform" value="3"/>
    </div>
        <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="tour_lead_friendly" id="tour_lead_uniform" value="3"/>
    </div>
        <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="tour_lead_enthusiasm" id="tour_lead_enthusiasm" value="3"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="tour_lead_listen" id="tour_lead_listen" value="3"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="tour_lead_specialize" id="tour_lead_specialize" value="3"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="tour_lead_knowledge" id="tour_lead_knowledge" value="3"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="tour_lead_situation" id="tour_lead_situation" value="3"/>
    </div>
    <div class="form-check">
        <input  class="form-check-input checkbox-no-label" type="radio" name="tour_lead_voice" id="tour_lead_voice" value="3"/>
    </div>

    </div>



            </div>
          <div class="col-12">

            <div class="form-group">
                <h6 class="d-inline-block"> Ý kiến khác: </h6>
                <input disabled type="text" class="input-no-border" id="others" name="tour_lead_other" value="{{ $clientAdvice->clientLeadTourRate->tour_lead_other }}" placeholder="......................................................................................................................................................................">
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
                <input  class="form-check-input checkbox-no-label" type="radio" name="accommodation_room" id="khonghailong" value="0"/>
                </div>
                <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="accommodation_position" id="binhthuong" value="0"/>
        </div>
            <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="accommodation_attidude" id="hailong" value="0"/>
        </div>

        </div>

        <div class="container-checkbox">
            <h6 class="font-weight-bold">
                Bình thường
            </h6>
            <div class="form-check">
                <input  class="form-check-input checkbox-no-label" type="radio" name="accommodation_room" id="khonghailong" value="1"/>
                </div>
                <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="accommodation_position" id="binhthuong" value="1"/>
        </div>
            <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="accommodation_attidude" id="hailong" value="1"/>
        </div>

        </div>

        <div class="container-checkbox">
            <h6 class="font-weight-bold">
                Tốt
            </h6>
            <div class="form-check">
                <input  class="form-check-input checkbox-no-label" type="radio" name="accommodation_room" id="khonghailong" value="2"/>
                </div>
                <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="accommodation_position" id="binhthuong" value="2"/>
        </div>
            <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="accommodation_attidude" id="hailong" value="2"/>
        </div>

        </div>

        <div class="container-checkbox">
            <h6 class="font-weight-bold">
                Rất tốt
            </h6>

            <div class="form-check">
                <input  class="form-check-input checkbox-no-label" type="radio" name="accommodation_room" id="khonghailong" value="3"/>
                </div>
                <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="accommodation_position" id="binhthuong" value="3"/>
        </div>
            <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="accommodation_attidude" id="hailong" value="3"/>
        </div>

        </div>


                </div>
                <div class="col-12">

                    <div class="form-group">
                        <h6 class="d-inline-block"> Ý kiến khác: </h6>
                        <input disabled type="text" class="input-no-border" id="others" value="{{ $clientAdvice->clientAccommodationRate->accommodation_other }}" name="accommodation_other" placeholder=".............................................................................................................................">
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
                <input  class="form-check-input checkbox-no-label" type="radio" name="vehicle_quality" id="khonghailong" value="0"/>
                </div>
                <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="vehicle_attidude" id="binhthuong" value="0"/>
        </div>
            <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="vehicle_safety" id="hailong" value="0"/>
        </div>
            <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="vehicle_clean" id="rathailong" value="0"/>
        </div>

        </div>

        <div class="container-checkbox">
            <h6 class="font-weight-bold">
                Bình thường
            </h6>

            <div class="form-check">
                <input  class="form-check-input checkbox-no-label" type="radio" name="vehicle_quality" id="khonghailong" value="1"/>
                </div>
                <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="vehicle_attidude" id="binhthuong" value="1"/>
        </div>
            <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="vehicle_safety" id="hailong" value="1"/>
        </div>
            <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="vehicle_clean" id="rathailong" value="1"/>
        </div>

        </div>

        <div class="container-checkbox">
            <h6 class="font-weight-bold">
                Tốt
            </h6>

            <div class="form-check">
                <input  class="form-check-input checkbox-no-label" type="radio" name="vehicle_quality" id="khonghailong" value="2"/>
                </div>
                <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="vehicle_attidude" id="binhthuong" value="2"/>
        </div>
            <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="vehicle_safety" id="hailong" value="2"/>
        </div>
            <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="vehicle_clean" id="rathailong" value="2"/>
        </div>

        </div>

        <div class="container-checkbox">
            <h6 class="font-weight-bold">
                Rất tốt
            </h6>

            <div class="form-check">
                <input  class="form-check-input checkbox-no-label" type="radio" name="vehicle_quality" id="khonghailong" value="3"/>
                </div>
                <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="vehicle_attidude" id="binhthuong" value="3"/>
        </div>
            <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="vehicle_safety" id="hailong" value="3"/>
        </div>
            <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="vehicle_clean" id="rathailong" value="3"/>
        </div>

        </div>


                </div>
                <div class="col-12">

                    <div class="form-group">
                        <h6 class="d-inline-block"> Ý kiến khác: </h6>
                        <input disabled type="text" class="input-no-border" id="others" value="{{ $clientAdvice->clientVehicleRate->vehicle_other }}" name="vehicle_other" placeholder="..................................................................................................................................">
                      </div>

                  </div>

            </div>


        </div>

        </div>

        <h6 class="title-purple font-weight-bold" id="show-foreign-tour-lead-form">
            4b. Đánh giá về HDV địa phương đối với tour nước ngoài <i class="fa fa-caret-down" aria-hidden="true"></i>
        </h6>

        <br>

        <div class="row" style="display:none;" id="foreign-tour-lead-form">
            <div class="col-6">

            <div class="row">
                <div class="col-5">
                <h6 class ="title-green d-inline-block">
                    <br>
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
                <input  class="form-check-input checkbox-no-label" type="radio" name="foreign_tour_lead_attitude" id="khonghailong" value="0"/>
                </div>
                <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="foreign_tour_lead_uniform" id="tour_lead_uniform" value="0"/>
        </div>
            <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="foreign_tour_lead_friendly" id="tour_lead_uniform" value="0"/>
        </div>
            <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="foreign_tour_lead_enthusiasm" id="tour_lead_enthusiasm" value="0"/>
        </div>
        <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="foreign_tour_lead_listen" id="tour_lead_listen" value="0"/>
        </div>
        <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="foreign_tour_lead_specialize" id="tour_lead_specialize" value="0"/>
        </div>
        <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="foreign_tour_lead_knowledge" id="tour_lead_knowledge" value="0"/>
        </div>
        <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="foreign_tour_lead_situation" id="tour_lead_situation" value="0"/>
        </div>
        <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="foreign_tour_lead_voice" id="tour_lead_voice" value="0"/>
        </div>

        </div>

        <div class="container-checkbox">
            <h6 class="font-weight-bold">
                Bình thường
            </h6>

            <div class="form-check">
                <input  class="form-check-input checkbox-no-label" type="radio" name="foreign_foreign_tour_lead_attitude" id="khonghailong" value="1"/>
                </div>
                <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="foreign_foreign_tour_lead_uniform" id="tour_lead_uniform" value="1"/>
        </div>
            <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="foreign_tour_lead_friendly" id="tour_lead_uniform" value="1"/>
        </div>
            <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="foreign_tour_lead_enthusiasm" id="tour_lead_enthusiasm" value="1"/>
        </div>
        <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="foreign_tour_lead_listen" id="tour_lead_listen" value="1"/>
        </div>
        <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="foreign_tour_lead_specialize" id="tour_lead_specialize" value="1"/>
        </div>
        <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="foreign_tour_lead_knowledge" id="tour_lead_knowledge" value="1"/>
        </div>
        <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="foreign_tour_lead_situation" id="tour_lead_situation" value="1"/>
        </div>
        <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="foreign_tour_lead_voice" id="tour_lead_voice" value="1"/>
        </div>

        </div>

        <div class="container-checkbox">
            <h6 class="font-weight-bold">
                Tốt
            </h6>

            <div class="form-check">
                <input  class="form-check-input checkbox-no-label" type="radio" name="foreign_tour_lead_attitude" id="khonghailong" value="2"/>
                </div>
                <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="foreign_tour_lead_uniform" id="tour_lead_uniform" value="2"/>
        </div>
            <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="foreign_tour_lead_friendly" id="tour_lead_uniform" value="2"/>
        </div>
            <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="foreign_tour_lead_enthusiasm" id="tour_lead_enthusiasm" value="2"/>
        </div>
        <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="foreign_tour_lead_listen" id="tour_lead_listen" value="2"/>
        </div>
        <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="foreign_tour_lead_specialize" id="tour_lead_specialize" value="2"/>
        </div>
        <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="foreign_tour_lead_knowledge" id="tour_lead_knowledge" value="2"/>
        </div>
        <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="foreign_tour_lead_situation" id="tour_lead_situation" value="2"/>
        </div>
        <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="foreign_tour_lead_voice" id="tour_lead_voice" value="2"/>
        </div>

        </div>

        <div class="container-checkbox">
            <h6 class="font-weight-bold">
                Rất tốt
            </h6>

            <div class="form-check">
                <input  class="form-check-input checkbox-no-label" type="radio" name="foreign_tour_lead_attitude" id="khonghailong" value="3"/>
                </div>
                <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="foreign_tour_lead_uniform" id="tour_lead_uniform" value="3"/>
        </div>
            <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="foreign_tour_lead_friendly" id="tour_lead_uniform" value="3"/>
        </div>
            <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="foreign_tour_lead_enthusiasm" id="tour_lead_enthusiasm" value="3"/>
        </div>
        <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="foreign_tour_lead_listen" id="tour_lead_listen" value="3"/>
        </div>
        <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="foreign_tour_lead_specialize" id="tour_lead_specialize" value="3"/>
        </div>
        <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="foreign_tour_lead_knowledge" id="tour_lead_knowledge" value="3"/>
        </div>
        <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="foreign_tour_lead_situation" id="tour_lead_situation" value="3"/>
        </div>
        <div class="form-check">
            <input  class="form-check-input checkbox-no-label" type="radio" name="foreign_tour_lead_voice" id="tour_lead_voice" value="3"/>
        </div>

        </div>



                </div>
              <div class="col-12">

                <div class="form-group">
                    <h6 class="d-inline-block"> Ý kiến khác: </h6>
                    <input disabled type="text" class="input-no-border" id="others" value="{{ $clientAdvice->clientForeignLeadTourRate->tour_lead_other }}" name="tour_lead_other" placeholder="......................................................................................................................................................................">
                  </div>

              </div>

            </div>

            </div>

            </div>

        <br>
<div class="row">
    <div class="col-12">
        <h6 class ="title-green"    >
            8.Qúy khách biết đến đất việt tour qua phương tiện nào?
        </h6>
        </div>
        <div class="col-12 d-flex justify-content-between">
            <div class="form-check d-inline-block">
            <input  class="form-check-input" type="radio" name="how_to_know" id="khonghailong" value="0"/>
        <label  class="form-check-label" for="khonghailong">Bạn bè/người thân</label>
            </div>
            <div class="form-check d-inline-block">
        <input  class="form-check-input" type="radio" name="how_to_know" id="binhthuong" value="1"/>
        <label  class="form-check-label" for="binhthuong">Công ty/đồng nghiệp</label>
    </div>
        <div class="form-check d-inline-block">
        <input  class="form-check-input" type="radio" name="how_to_know" id="hailong" value="2"/>
        <label  class="form-check-label" for="hailong">Tìm kiếm trên google</label>
    </div>
        <div class="form-check d-inline-block">
        <input  class="form-check-input" type="radio" name="how_to_know" id="rathailong" value="3"/>
        <label  class="form-check-label" for="rathailong">Quảng cáo từ Facebook</label>
    </div>

    <div class="form-check d-inline-block">
        <input  class="form-check-input" type="radio" name="how_to_know" id="check_how_to_know_other" value="4"/>
        <label  class="form-check-label" for="rathailong">Khác:</label>
        <input type="text" class="input-no-border input-no-border-small " id="how_to_know_other" name="how_to_know_other" disabled placeholder="...................................................">
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
    <input  class="form-check-input" type="radio" name="viettour_before" id="domestic_viettour_before_check" value="1"/>
<label  class="form-check-label" for="khonghailong">Đã đi tour trong nước. Số lần:</label>
<input type="number" class="input-no-border input-no-border-small " id="domestic_viettour_before" name="domestic_viettour_before" disabled placeholder="...................................................">
    </div>
    <div class="form-check">
<input  class="form-check-input" type="radio" name="viettour_before" id="foreign_viettour_before_check" value="1"/>
<label  class="form-check-label" for="binhthuong">Đã đi tour nước ngoài. Số lần:</label>
<input type="number" class="input-no-border input-no-border-small " id="foreign_viettour_before" name="foreign_viettour_before" disabled placeholder="...................................................">
</div>
<div class="form-check">
<input  class="form-check-input" type="radio" name="never_viettour_before" id="hailong" value="2"/>
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
    <input  class="form-check-input empty-checkbox" type="checkbox" name="tour_type_1" id="hailong" value="1"/>
    <label  class="form-check-label" for="hailong">Du lịch nghỉ dưỡng (ăn uống, nghỉ ngơi, thư giãn...)</label>
    </div>
    <div class="form-check">
        <input  class="form-check-input empty-checkbox" type="checkbox" name="tour_type_2" id="hailong" value="1"/>
        <label  class="form-check-label" for="hailong">Du lịch khám phá (tham quan, chụp hình, Mua sắm...)</label>
        </div>
        <div class="form-check">
            <input  class="form-check-input empty-checkbox" type="checkbox" name="tour_type_3" id="hailong" value="1"/>
            <label  class="form-check-label" for="hailong">Du lịch trải nghiệm (leo núi, vượt rừng, cắm trại, đạp xe, chèo thuyền...)</label>
            </div>
            <div class="form-check">
                <input  class="form-check-input empty-checkbox" type="checkbox" name="tour_type_4" id="hailong" value="1"/>
                <label  class="form-check-label" for="hailong">Du lịch sức khỏe (thiền định, yoga, cân bằng thân-tâm-trí...)</label>
                </div>
                <div class="form-check">
                    <input  class="form-check-input empty-checkbox" type="checkbox" name="tour_type_5" id="hailong" value="1"/>
                    <label  class="form-check-label" for="hailong">Du lịch nghỉ dưỡng (trò chơi, hoạt động nhóm, tiệc gala...)</label>
                    </div>

                    <div class="form-check">
                        <input  class="form-check-input empty-checkbox" type="checkbox" id="tour_type_other_check" value="1"/>
                        <label  class="form-check-label" for="rathailong">Khác:</label>
                        <input type="text" class="input-no-border input-no-border-small " disabled id="tour_type_other" name="tour_type_other" placeholder=".....................................................................................................">
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
    <input  class="form-check-input" type="radio" name="tour_factor" id="hailong" value="0"/>
    <label  class="form-check-label" for="hailong">Uy tín thương hiệu</label>
    </div>
    <div class="form-check">
        <input  class="form-check-input" type="radio" name="tour_factor" id="hailong" value="1"/>
        <label  class="form-check-label" for="hailong">Có khuyến mãi/ quà tặng</label>
        </div>
        <div class="form-check">
            <input  class="form-check-input" type="radio" name="tour_factor" id="hailong" value="2"/>
            <label  class="form-check-label" for="hailong">Gía rẻ hơn nơi khác</label>
            </div>
            <div class="form-check">
                <input  class="form-check-input" type="radio" name="tour_factor" id="hailong" value="3"/>
                <label  class="form-check-label" for="hailong">Thấy quảng cáo nhiều</label>
                </div>
                <div class="form-check">
                    <input  class="form-check-input" type="radio" name="tour_factor" id="hailong" value="4"/>
                    <label  class="form-check-label" for="hailong">Nhân viên tư vấn nhiệt tình</label>
                    </div>
                    <div class="form-check">
                        <input  class="form-check-input" type="radio" name="tour_factor" id="hailong" value="5"/>
                        <label  class="form-check-label" for="hailong">Người thân bạn bè giới thiệu</label>
                        </div>
                    <div class="form-check">
                        <input  class="form-check-input" type="radio" name="tour_factor" id="tour_factor_check" value="6"/>
                        <label  class="form-check-label" for="rathailong">Khác:</label>
                        <input type="text" class="input-no-border input-no-border-small" id="tour_factor" name="tour_factor_other" disabled placeholder=".....................................................................................................">
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
        <textarea disabled class="form-control" id="exampleFormControlTextarea1" name="other_advice" rows="3">{{ $clientAdvice->clientOtherAdvice->other_advice }}</textarea>
      </div>
</div>
</div>
</form>
</div>
<script type="text/javascript" src="{{ asset('frontend/js/form-details.js')}}"></script>
</body>
@stop
