$(document).ready(function() {
    $(".container :input[type=radio]").prop("disabled", true);
    const clientAdvice = JSON.parse($("input[type=hidden][name=clientAdvice]" ).val());
    const clientLeadTourRate = JSON.parse($("input[type=hidden][name=clientLeadTourRate]" ).val());
    const clientForeignLeadTourRate = JSON.parse($("input[type=hidden][name=clientForeignLeadTourRate]" ).val());
    const clientRestaurantRate = JSON.parse($("input[type=hidden][name=clientRestaurantRate]" ).val());
    const clientVehicleRate = JSON.parse($("input[type=hidden][name=clientVehicleRate]" ).val());
    const clientTourRate = JSON.parse($("input[type=hidden][name=clientTourRate]" ).val());
    const clientOtherAdvice = JSON.parse($("input[type=hidden][name=clientOtherAdvice]" ).val());
    const clientAccommodationRate = JSON.parse($("input[type=hidden][name=clientAccommodationRate]" ).val());
    $('#show-foreign-tour-lead-form').click(function() {
        $('#foreign-tour-lead-form').slideToggle("fast");
    });

    $(`input[name=general_thinking][value='${clientAdvice.general_thinking}']`).prop('checked',true);
    if(isNaN(clientOtherAdvice.how_to_know)) {
        $('input[name=how_to_know_other]').val(clientOtherAdvice.how_to_know);
    }
    else {
        $(`input[name=how_to_know][value='${clientOtherAdvice.how_to_know}']`).prop('checked',true)
    }

    if(clientOtherAdvice.domestic_viettour_before == null && clientOtherAdvice.foreign_viettour_before == null) {
        $(`input[name=never_viettour_before]`).prop('checked',true);
    }
    else {
        $('input[name=domestic_viettour_before]').val(clientOtherAdvice.domestic_viettour_before);
        $('input[name=foreign_viettour_before]').val(clientOtherAdvice.foreign_viettour_before);
    }
    for(var i = 1; i<= 5; i++) {
        if(clientOtherAdvice[`tour_type_${i}`] == 1) {
            $(`input[name=tour_type_${i}]`).prop('checked',true);
        }
    }
    $('input[name=tour_type_other]').val(clientOtherAdvice.tour_type_other);

    if(isNaN(clientOtherAdvice.tour_factor)) {
        $('input[name=tour_factor_other]').val(clientOtherAdvice.tour_factor);
    }
    else {
        $(`input[name=tour_factor][value='${clientOtherAdvice.tour_factor}']`).prop('checked',true)
    }

    loadCheckedRadio(clientLeadTourRate);
    loadCheckedRadio(clientForeignLeadTourRate);
    loadCheckedRadio(clientRestaurantRate);
    loadCheckedRadio(clientVehicleRate);
    loadCheckedRadio(clientTourRate);
    loadCheckedRadio(clientAccommodationRate);

});

function loadCheckedRadio(rateType){
    if(rateType.foreign == 1) {
        $.each( rateType, function( key, value ) {
            $(`input[name=foreign_${key}][value='${value}']`).prop('checked',true)
          });
    }
    $.each( rateType, function( key, value ) {
        $(`input[name=${key}][value='${value}']`).prop('checked',true)
      });
}
