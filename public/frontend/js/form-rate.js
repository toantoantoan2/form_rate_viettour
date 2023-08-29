$(document).ready(function() {
    $("#form-rate").on("submit", function(e) {
        $(".check-empty").each(function(){
            if ($(this).val() == "") {
                Swal.fire({
                    icon: 'error',
                    title: 'Qúy khách chọn thiếu thông tin',
                    text: `Mời quý khách điền đầy đủ thông tin cá nhân bắt buộc`,
                })
                e.preventDefault();
            }
        });

        checkRadio("general_thinking","Cảm nhận chung của Quý khách về chất lượng tour của Đất Việt Tour",e);
        checkRadio("tour_trip","Đánh giá chương trình tour",e);
        checkRadio("restaurant_dinner","Đánh giá về nhà hàng",e);
        checkRadio("tour_lead_attitude","Đánh giá về hướng dẫn viên",e);
        checkRadio("accommodation_room","Đánh giá nơi lưu trú",e);
        checkRadio("vehicle_quality","Phương tiện vận chuyển",e);
        checkRadio("how_to_know","Qúy khách biết đến đất việt tour qua phương tiện nào?",e);
        checkRadio("viettour_before","Trước đây đã từng đi tour của Đất Việt Tour chưa?",e);
        checkRadio("tour_factor","Yếu tố nào ẢNH HƯỞNG NHẤT đến quyết định chọn tour của quý khách?",e);

        if (!$('input[type=checkbox]').is(":checked")) {
            Swal.fire({
                icon: 'error',
                title: 'Qúy khách chọn thiếu thông tin',
                text: `Mời quý khách cho ý kiến về Nếu lựa chọn. Qúy khách sẽ chọn loại hình du lịch nào sau đây?`,
              })
              e.preventDefault();
        }

        });

        $('#show-foreign-tour-lead-form').click(function() {
            $('#foreign-tour-lead-form').slideToggle("fast");
        });

        $(`#viettour_before`).on('change', function(){
            if ($("#domestic_viettour_before_check").is(":checked")) {
                $(`#foreign_viettour_before`).val(null);
            }
            if ($("#foreign_viettour_before_check").is(":checked")) {
                $(`#domestic_viettour_before`).val(null);
            }
        })

        $('#tour_type_other_check').change(function () {
            if($(this).is(':checked')) {
                $(`#tour_type_other`).prop('disabled', false);
            }
            else {
                $(`#tour_type_other`).prop('disabled', true);
                $(`#tour_type_other`).val(null);
            }
        });


        checkOtherRadio("how_to_know", "check_how_to_know_other", "how_to_know_other");
        setValueForRadio("how_to_know_other", "check_how_to_know_other");
        checkOtherRadio("tour_factor", "tour_factor_check", "tour_factor");
        setValueForRadio("tour_factor", "tour_factor_check");
        checkOtherRadio("viettour_before", "domestic_viettour_before_check", "domestic_viettour_before");
        checkOtherRadio("viettour_before", "foreign_viettour_before_check", "foreign_viettour_before");

});

function checkRadio(name, text, e){
    if ($(`input[name="${name}"]:checked`).length == 0) {
        Swal.fire({
            icon: 'error',
            title: 'Qúy khách chọn thiếu thông tin',
            text: `Mời quý khách cho ý kiến về ${text}`,
        })
        e.preventDefault();
    }
}

function checkOtherRadio(nameRadio, idRadio, idInput) {
    $(`input[type=radio][name=${nameRadio}]`).change(function(){
        if($(`#${idRadio}`).is(':checked')) {
            $(`#${idInput}`).prop('disabled', false);
        }
        else {
            $(`#${idInput}`).prop('disabled', true);
        }
    });
}

function setValueForRadio(idInput, idRadio) {
    $(`#${idInput}`).on('change', function(){
        $(`#${idRadio}`).val($(this).val());
    });
}
