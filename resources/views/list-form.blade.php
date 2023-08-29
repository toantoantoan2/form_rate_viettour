@extends('layouts/header_footer')
@section('main')
<body>
    <div class="container">
        <h1 class ="title-green">
            Danh Sách Phiếu khảo sát khách hàng
        </h1>
        <form class="form-inline my-2 my-lg-0" method="get" action="{{url('admin/search-form')}}">
            @csrf
            <input class="form-control mr-sm-2" name="key_search" style="width:400px;" type="search" placeholder="Tên khách hàng hoặc số điện thoại" aria-label="Search">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Tìm kiếm phiếu khảo sát</button>
          </form>
    <div class="row">
    <div class="col-lg-12">
    <div class="main-box clearfix">
    <div class="table-responsive">
    <table class="table user-list">
    <thead>
        <tr>
        <th class="text-center"><span class="font-weight-bold">Tên Khách Hàng</span></th>
        <th class="text-center"><span class="font-weight-bold">Số Điện Thoại</span></th>
        <th class="text-center"><span class="font-weight-bold">Tên Tour</span></th>
        <th class="text-center"><span class="font-weight-bold">Ngày Tạo Form</span></th>
        <th>&nbsp;</th>
        @foreach ($listForm as $lf)
        </tr>
        </thead>
        <tbody>
        <tr>
        <td class="text-center">
        <a href="{{ route('manage.form-details', $lf->id) }}" class="user-link">{{ $lf->client_name }}</a>
        </td>
        <td class="text-center">
            {{ $lf->phone_number }}
        </td>
        <td class="text-center">
            {{ $lf->tour_name }}
        </td>
        @php
            $date = DateTime::createFromFormat('Y-m-d h:i:s', $lf->created_at);
        @endphp
        <td class="text-center">
            <span class="label label-default">{{ $date->format('d/m/Y') }}</span>
        </td>
        <td class="text-center" style="width: 20%;">
        <a href="{{ route('manage.form-details', $lf->id) }}" class="table-link">
        <span class="fa-stack">
        <i class="fa fa-square fa-stack-2x"></i>
        <i class="fa fa-eye fa-stack-1x fa-inverse"></i>
        </span>
        </a>
        </td>
        </tr>
    @endforeach
    </tbody>

    </table>
    <div class="pagination-container-bottom">
        {{ $listForm->links() }}
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</body>
@stop

