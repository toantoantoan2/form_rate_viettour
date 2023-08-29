@extends('layouts/header_footer')
@section('main')
<body>
    <div class="container">
        <h1 class ="title-green">
            Biểu đồ khảo sát đánh giá khách hàng
        </h1>
        <div class="dropdown">
            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Chọn loại khảo sát
            </button>
            <div class="dropdown-menu change-chart" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item change-chart general-thinking" href="#">Cảm nhận chung về chất lượng tour của Đất Việt Tour</a>
              <a class="dropdown-item change-chart tour-rate" href="#">Đánh giá chương trình tour</a>
              <a class="dropdown-item change-chart tour-lead-rate" href="#">Đánh giá về hướng dẫn viên</a>
              <a class="dropdown-item change-chart restaurant-rate" href="#">Đánh giá về nhà hàng</a>
              <a class="dropdown-item change-chart accommodation-rate" href="#">Đánh giá nơi lưu trú</a>
              <a class="dropdown-item change-chart vehicle-rate" href="#">Phương tiện vận chuyển</a>
              <a class="dropdown-item change-chart foreign-tour-lead-rate" href="#">Đánh giá về HDV địa phương đối với tour nước ngoài </a>
              <a class="dropdown-item change-chart how-to-know" href="#">biết đến đất việt tour qua phương tiện nào </a>
              <a class="dropdown-item change-chart viettour-before" href="#">Trước đây đã từng đi tour của Đất Việt Tour chưa</a>
              <a class="dropdown-item change-chart tour-type" href="#">Loại hình du lịch </a>
              <a class="dropdown-item change-chart tour-factor" href="#">Yếu tố ẢNH HƯỞNG NHẤT đến quyết định chọn tour của khách </a>
            </div>
          </div>
    <div>
        <canvas id="chartJSContainer"></canvas>
      </div>
      <form method="get" action="{{url('admin/filter-rate-by-date')}}">
        @csrf
      <div class="row">
        <div class="col-12">
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label  class="form-check-label font-weight-bold" for="from-day">Từ ngày</label>
                    <input type="text" name="from_date" class="form-control check-empty" id="from-date" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label  class="form-check-label font-weight-bold" for="to-date">Đến ngày</label>
                    <input type="text" name="to_date" class="form-control" id="to-date" value="">
                  </div>
                  <div class="form-group col-md-4 d-flex flex-column justify-content-end align-items-start">
                  <button type="submit" class="btn btn-primary">Lọc</button>
                  </div>
                </div>
        </div>
    </div>
</form>
     <!-- pass to jquery -->
        <input type="hidden" name="tourRate" value="{{ json_encode($tourRate)}}">
        <input type="hidden" name="accommodationRate" value="{{ json_encode($accommodationRate)}}">
        <input type="hidden" name="clientAdvice" value="{{ json_encode($clientAdvice)}}">
        <input type="hidden" name="restaurantRate" value="{{ json_encode($restaurantRate)}}">
        <input type="hidden" name="otherAdvice" value="{{ json_encode($otherAdvice)}}">
        <input type="hidden" name="vehicleRate" value="{{ json_encode($vehicleRate)}}">
        <input type="hidden" name="tourLeadRate" value="{{ json_encode($tourLeadRate)}}">
        <input type="hidden" name="foreigntourLeadRate" value="{{ json_encode($foreignTourLeadRate)}}">
    </div>
    <script type="text/javascript" src="{{ asset('frontend/js/rate-chart.js')}}"></script>
</body>
@stop
