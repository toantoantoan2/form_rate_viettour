$(document).ready(function() {
    const tourRate = JSON.parse($( "[name=tourRate]" ).val());
    const accommodationRate = JSON.parse($( "[name=accommodationRate]" ).val());
    const clientAdvice = JSON.parse($( "[name=clientAdvice]" ).val());
    const restaurantRate = JSON.parse($( "[name=restaurantRate]" ).val());
    const otherAdvice = JSON.parse($( "[name=otherAdvice]" ).val());
    const vehicleRate = JSON.parse($( "[name=vehicleRate]" ).val());
    const tourLeadRate = JSON.parse($( "[name=tourLeadRate]" ).val());
    const foreignTourLeadRate = JSON.parse($( "[name=foreigntourLeadRate]" ).val());
    //labels for chart
    const tourRateLabels = ["HÀNH TRÌNH TOUR", "PHÂN BỐ THỜI GIAN", "ĐIỂM THAM QUAN", "ĐIỂM MUA SẮM"];
    const generalThinkingLabels = ["CẢM NHẬN CHUNG CỦA QUÝ KHÁCH VỀ CHẤT LƯỢNG CỦA ĐẤT VIỆT TOUR"];
    const vehicleRateLabels = ["HÀNH TRÌNH TOUR", "PHÂN BỐ THỜI GIAN", "ĐIỂM THAM QUAN", "ĐIỂM MUA SẮM"];
    const accommodationRateLabels = ["Chất lượng phòng", "Vị trí khách sạn", "Thái độ phục vụ"];
    const restaurantRateLabels = ["Chất lượng bữa ăn", "Vệ sinh chung", "Thái độ phục vụ", "Điểm mua sắm"];
    const tourLeadRateLabels = ["THÁI ĐỘ PHỤC VỤ", "TRANG PHỤC", "VUI VẺ HÒA ĐỒNG THÂN THIỆN", "NHIỆT TÌNH", "ĐIỂM MUA SẮM", "BIẾT LẮNG NGHE", "KỸ NĂNG CHUYÊN MÔN  ", "KIẾN THỨC", "XỬ LÝ TÌNH HUỐNG"];
    const howToKnowLabels = ["khách biết đến đất việt tour qua phương tiện nào"];
    const datVietTourBeforeLabels = ["SỐ LẦN ĐI ĐẤT VIỆT TOUR"];
    const tourTypeLabels = ['LOẠI HÌNH DU LỊCH'];
    const tourFactorLabels = ['YẾU TỐ ẢNH HƯỞNG ĐẾN QUYẾT ĐỊNH CHỌN TOUR CỦA KHÁCH'];
    $( "#from-date" ).datepicker({
        dateFormat: 'dd/mm/yy',
        changeMonth: true,
        changeYear: true
    });
    $( "#to-date" ).datepicker({
        dateFormat: 'dd/mm/yy',
        changeMonth: true,
        changeYear: true
    });
    //Tour Rate
    tourRates = {
        tour_trip : {
            bad: 0,
            notBad: 0,
            good: 0,
            veryGood: 0
        },
        tour_time : {
            bad: 0,
            notBad: 0,
            good: 0,
            veryGood: 0
        },
        tour_sight_seeing : {
            bad: 0,
            notBad: 0,
            good: 0,
            veryGood: 0
        },
        tour_shopping : {
            bad: 0,
            notBad: 0,
            good: 0,
            veryGood: 0
        }
    }
    getRateType(tourRate, tourRates);
    const dataTourRate = [{
        label: 'Không tốt',
        data: [tourRates.tour_trip.bad, tourRates.tour_time.bad, tourRates.tour_sight_seeing.bad, tourRates.tour_shopping.bad],
        borderWidth: 1,
        backgroundColor: 'rgb(230 17 17 / 74%)',
        borderRadius: 5,
    }, {
        label: 'Bình thường',
        data: [tourRates.tour_trip.notBad, tourRates.tour_time.notBad, tourRates.tour_sight_seeing.notBad, tourRates.tour_shopping.notBad],
        borderWidth: 1,
        backgroundColor: 'rgb(237 234 38 / 51%)',
        borderRadius: 5,
    }, {
        label: 'Tốt',
        data: [tourRates.tour_trip.good, tourRates.tour_time.good, tourRates.tour_sight_seeing.good, tourRates.tour_shopping.good],
        borderWidth: 1,
        backgroundColor: '#45b2f387',
        borderRadius: 5,
    },
    {
        label: 'Rất tốt',
        data: [tourRates.tour_trip.veryGood, tourRates.tour_time.veryGood, tourRates.tour_sight_seeing.veryGood, tourRates.tour_shopping.veryGood],
        borderWidth: 1,
        backgroundColor: '#0aab0aad',
        borderRadius: 5,
      }];
    //Tour Lead Rate
    tourLeadRates = {
        tour_lead_attitude : {
            bad: 0,
            notBad: 0,
            good: 0,
            veryGood: 0
        },
        tour_lead_uniform : {
            bad: 0,
            notBad: 0,
            good: 0,
            veryGood: 0
        },
        tour_lead_friendly : {
            bad: 0,
            notBad: 0,
            good: 0,
            veryGood: 0
        },
        tour_lead_enthusiasm : {
            bad: 0,
            notBad: 0,
            good: 0,
            veryGood: 0
        },
        tour_lead_listen : {
            bad: 0,
            notBad: 0,
            good: 0,
            veryGood: 0
        },
        tour_lead_specialize : {
            bad: 0,
            notBad: 0,
            good: 0,
            veryGood: 0
        },
        tour_lead_knowledge : {
            bad: 0,
            notBad: 0,
            good: 0,
            veryGood: 0
        },
        tour_lead_situation : {
            bad: 0,
            notBad: 0,
            good: 0,
            veryGood: 0
        },
        tour_lead_voice : {
            bad: 0,
            notBad: 0,
            good: 0,
            veryGood: 0
        }
    }
    getRateType(tourLeadRate, tourLeadRates);
    const dataTourLeadRate = [{
        label: 'Không tốt',
        data: [tourLeadRates.tour_lead_attitude.bad, tourLeadRates.tour_lead_uniform.bad, tourLeadRates.tour_lead_friendly.bad, tourLeadRates.tour_lead_enthusiasm.bad, tourLeadRates.tour_lead_listen.bad, tourLeadRates.tour_lead_specialize.bad, tourLeadRates.tour_lead_knowledge.bad, tourLeadRates.tour_lead_situation.bad, tourLeadRates.tour_lead_voice.bad],
        borderWidth: 1,
        backgroundColor: 'rgb(230 17 17 / 74%)',
        borderRadius: 5,
    }, {
        label: 'Bình thường',
        data: [tourLeadRates.tour_lead_attitude.notBad, tourLeadRates.tour_lead_uniform.notBad, tourLeadRates.tour_lead_friendly.notBad, tourLeadRates.tour_lead_enthusiasm.notBad, tourLeadRates.tour_lead_listen.notBad, tourLeadRates.tour_lead_specialize.notBad, tourLeadRates.tour_lead_knowledge.notBad, tourLeadRates.tour_lead_situation.notBad, tourLeadRates.tour_lead_voice.notBad],
        borderWidth: 1,
        backgroundColor: 'rgb(237 234 38 / 51%)',
        borderRadius: 5,
    }, {
        label: 'Tốt',
        data: [tourLeadRates.tour_lead_attitude.good, tourLeadRates.tour_lead_uniform.good, tourLeadRates.tour_lead_friendly.good, tourLeadRates.tour_lead_enthusiasm.good, tourLeadRates.tour_lead_listen.good, tourLeadRates.tour_lead_specialize.good, tourLeadRates.tour_lead_knowledge.good, tourLeadRates.tour_lead_situation.good, tourLeadRates.tour_lead_voice.good],
        borderWidth: 1,
        backgroundColor: '#45b2f387',
        borderRadius: 5,
    },
    {
        label: 'Rất tốt',
        data: [tourLeadRates.tour_lead_attitude.veryGood, tourLeadRates.tour_lead_uniform.veryGood, tourLeadRates.tour_lead_friendly.veryGood, tourLeadRates.tour_lead_enthusiasm.veryGood, tourLeadRates.tour_lead_listen.veryGood, tourLeadRates.tour_lead_specialize.veryGood, tourLeadRates.tour_lead_knowledge.veryGood, tourLeadRates.tour_lead_situation.veryGood, tourLeadRates.tour_lead_voice.veryGood],
        borderWidth: 1,
        backgroundColor: '#0aab0aad',
        borderRadius: 5,
      }];

    //General Thinking
    var generalThinking = {
        general_thinking: {
            bad: 0,
            notBad: 0,
            good: 0,
            veryGood: 0
        }

    }
    getRateType(clientAdvice, generalThinking);
    const dataGeneralThingking = [{
        label: 'Không tốt',
        data: [generalThinking.general_thinking.bad],
        borderWidth: 1,
        backgroundColor: 'rgb(230 17 17 / 74%)',
        borderRadius: 5,
    }, {
        label: 'Bình thường',
        data: [generalThinking.general_thinking.notBad],
        borderWidth: 1,
        backgroundColor: 'rgb(237 234 38 / 51%)',
        borderRadius: 5,
    }, {
        label: 'Tốt',
        data: [generalThinking.general_thinking.good],
        borderWidth: 1,
        backgroundColor: '#45b2f387',
        borderRadius: 5,
    },
    {
        label: 'Rất tốt',
        data: [generalThinking.general_thinking.veryGood],
        borderWidth: 1,
        backgroundColor: '#0aab0aad',
        borderRadius: 5,
      }];

    //Accommodation Rate
    var accommodationRates = {
        accommodation_room : {
            bad: 0,
            notBad: 0,
            good: 0,
            veryGood: 0
        },
        accommodation_position : {
            bad: 0,
            notBad: 0,
            good: 0,
            veryGood: 0
        },
        accommodation_attidude : {
            bad: 0,
            notBad: 0,
            good: 0,
            veryGood: 0
        },
    }
    getRateType(accommodationRate, accommodationRates);
    const dataAccommodationRate = [{
        label: 'Không tốt',
        data: [accommodationRates.accommodation_room.bad, accommodationRates.accommodation_position.bad, accommodationRates.accommodation_attidude.bad],
        borderWidth: 1,
        backgroundColor: 'rgb(230 17 17 / 74%)',
        borderRadius: 5,
    }, {
        label: 'Bình thường',
        data: [accommodationRates.accommodation_room.notBad, accommodationRates.accommodation_position.notBad, accommodationRates.accommodation_attidude.notBad],
        borderWidth: 1,
        backgroundColor: 'rgb(237 234 38 / 51%)',
        borderRadius: 5,
    }, {
        label: 'Tốt',
        data: [accommodationRates.accommodation_room.good, accommodationRates.accommodation_position.good, accommodationRates.accommodation_attidude.good],
        borderWidth: 1,
        backgroundColor: '#45b2f387',
        borderRadius: 5,
    },
    {
        label: 'Rất tốt',
        data: [accommodationRates.accommodation_room.veryGood, accommodationRates.accommodation_position.veryGood, accommodationRates.accommodation_attidude.veryGood],
        borderWidth: 1,
        backgroundColor: '#0aab0aad',
        borderRadius: 5,
      }];

    //Vehicle Rate
    var vehicleRates = {
        vehicle_quality : {
            bad: 0,
            notBad: 0,
            good: 0,
            veryGood: 0
        },
        vehicle_attidude : {
            bad: 0,
            notBad: 0,
            good: 0,
            veryGood: 0
        },
        vehicle_safety : {
            bad: 0,
            notBad: 0,
            good: 0,
            veryGood: 0
        },
        vehicle_clean : {
            bad: 0,
            notBad: 0,
            good: 0,
            veryGood: 0
        },
    }
    getRateType(vehicleRate, vehicleRates);
    const dataVehicleRate = [{
        label: 'Không tốt',
        data: [vehicleRates.vehicle_quality.bad, vehicleRates.vehicle_attidude.bad, vehicleRates.vehicle_safety.bad, vehicleRates.vehicle_clean.bad],
        borderWidth: 1,
        backgroundColor: 'rgb(230 17 17 / 74%)',
        borderRadius: 5,
    }, {
        label: 'Bình thường',
        data: [vehicleRates.vehicle_quality.notBad, vehicleRates.vehicle_attidude.notBad, vehicleRates.vehicle_safety.notBad, vehicleRates.vehicle_clean.notBad],
        borderWidth: 1,
        backgroundColor: 'rgb(237 234 38 / 51%)',
        borderRadius: 5,
    }, {
        label: 'Tốt',
        data: [vehicleRates.vehicle_quality.good, vehicleRates.vehicle_attidude.good, vehicleRates.vehicle_safety.good, vehicleRates.vehicle_clean.good],
        borderWidth: 1,
        backgroundColor: '#45b2f387',
        borderRadius: 5,
    },
    {
        label: 'Rất tốt',
        data: [vehicleRates.vehicle_quality.notGood, vehicleRates.vehicle_attidude.notGood, vehicleRates.vehicle_safety.notGood, vehicleRates.vehicle_clean.notGood],
        borderWidth: 1,
        backgroundColor: '#0aab0aad',
        borderRadius: 5,
      }];

    //Foreign Tour Lead Rate
    foreignTourLeadRates = {
        tour_lead_attitude : {
            bad: 0,
            notBad: 0,
            good: 0,
            veryGood: 0
        },
        tour_lead_uniform : {
            bad: 0,
            notBad: 0,
            good: 0,
            veryGood: 0
        },
        tour_lead_friendly : {
            bad: 0,
            notBad: 0,
            good: 0,
            veryGood: 0
        },
        tour_lead_enthusiasm : {
            bad: 0,
            notBad: 0,
            good: 0,
            veryGood: 0
        },
        tour_lead_listen : {
            bad: 0,
            notBad: 0,
            good: 0,
            veryGood: 0
        },
        tour_lead_specialize : {
            bad: 0,
            notBad: 0,
            good: 0,
            veryGood: 0
        },
        tour_lead_knowledge : {
            bad: 0,
            notBad: 0,
            good: 0,
            veryGood: 0
        },
        tour_lead_situation : {
            bad: 0,
            notBad: 0,
            good: 0,
            veryGood: 0
        },
        tour_lead_voice : {
            bad: 0,
            notBad: 0,
            good: 0,
            veryGood: 0
        }
    }
    getRateType(foreignTourLeadRate, foreignTourLeadRates);
    const dataForeignTourLeadRates = [{
        label: 'Không tốt',
        data: [foreignTourLeadRates.tour_lead_attitude.bad, foreignTourLeadRates.tour_lead_uniform.bad, foreignTourLeadRates.tour_lead_friendly.bad, foreignTourLeadRates.tour_lead_enthusiasm.bad, foreignTourLeadRates.tour_lead_listen.bad, foreignTourLeadRates.tour_lead_specialize.bad, foreignTourLeadRates.tour_lead_knowledge.bad, foreignTourLeadRates.tour_lead_situation.bad, foreignTourLeadRates.tour_lead_voice.bad],
        borderWidth: 1,
        backgroundColor: 'rgb(230 17 17 / 74%)',
        borderRadius: 5,
    }, {
        label: 'Bình thường',
        data: [foreignTourLeadRates.tour_lead_attitude.notBad, foreignTourLeadRates.tour_lead_uniform.notBad, foreignTourLeadRates.tour_lead_friendly.notBad, foreignTourLeadRates.tour_lead_enthusiasm.notBad, foreignTourLeadRates.tour_lead_listen.notBad, foreignTourLeadRates.tour_lead_specialize.notBad, foreignTourLeadRates.tour_lead_knowledge.notBad, foreignTourLeadRates.tour_lead_situation.notBad, foreignTourLeadRates.tour_lead_voice.notBad],
        borderWidth: 1,
        backgroundColor: 'rgb(237 234 38 / 51%)',
        borderRadius: 5,
    }, {
        label: 'Tốt',
        data: [foreignTourLeadRates.tour_lead_attitude.good, foreignTourLeadRates.tour_lead_uniform.good, foreignTourLeadRates.tour_lead_friendly.good, foreignTourLeadRates.tour_lead_enthusiasm.good, foreignTourLeadRates.tour_lead_listen.good, foreignTourLeadRates.tour_lead_specialize.good, foreignTourLeadRates.tour_lead_knowledge.good, foreignTourLeadRates.tour_lead_situation.good, foreignTourLeadRates.tour_lead_voice.good],
        borderWidth: 1,
        backgroundColor: '#45b2f387',
        borderRadius: 5,
    },
    {
        label: 'Rất tốt',
        data: [foreignTourLeadRates.tour_lead_attitude.veryGood, foreignTourLeadRates.tour_lead_uniform.veryGood, foreignTourLeadRates.tour_lead_friendly.veryGood, foreignTourLeadRates.tour_lead_enthusiasm.veryGood, foreignTourLeadRates.tour_lead_listen.veryGood, foreignTourLeadRates.tour_lead_specialize.veryGood, foreignTourLeadRates.tour_lead_knowledge.veryGood, foreignTourLeadRates.tour_lead_situation.veryGood, foreignTourLeadRates.tour_lead_voice.veryGood],
        borderWidth: 1,
        backgroundColor: '#0aab0aad',
        borderRadius: 5,
      }];

     //HOW TO KNOW
     var howToKnows = {
        how_to_know: {
            bad: 0,
            notBad: 0,
            good: 0,
            veryGood: 0
        }

    }
    getRateType(otherAdvice, howToKnows);
    const dataHowToKnow= [{
        label: 'Bạn bè/ người thân',
        data: [howToKnows.how_to_know.bad],
        borderWidth: 1,
        backgroundColor: 'rgb(230 17 17 / 74%)',
        borderRadius: 5,
    }, {
        label: 'Công ty/ đồng nghiệp',
        data: [howToKnows.how_to_know.notBad],
        borderWidth: 1,
        backgroundColor: 'rgb(237 234 38 / 51%)',
        borderRadius: 5,
    }, {
        label: 'Tìm kiếm qua google',
        data: [howToKnows.how_to_know.good],
        borderWidth: 1,
        backgroundColor: '#45b2f387',
        borderRadius: 5,
    },
    {
        label: 'Quảng cáo facebook',
        data: [howToKnows.how_to_know.veryGood],
        borderWidth: 1,
        backgroundColor: '#0aab0aad',
        borderRadius: 5,
      }];

    //DAT VIET TOUR BEFORE
     var datVietTours = {
        domestic_viettour_before: {
            is_before: 0,
        },
        foreign_viettour_before: {
            is_before: 0,
        },
        never: {
            is_never: 0,
        }

    }
    getRateDatVietTourBefore(otherAdvice, datVietTours);
    const dataDatVietTourBefore = [{
        label: 'Đã đi trong nước',
        data: [datVietTours.domestic_viettour_before.is_before],
        borderWidth: 1,
        backgroundColor: 'rgb(230 17 17 / 74%)',
        borderRadius: 5,
    }, {
        label: 'Đã đi nước ngoài',
        data: [datVietTours.foreign_viettour_before.is_before],
        borderWidth: 1,
        backgroundColor: 'rgb(237 234 38 / 51%)',
        borderRadius: 5,
    }, {
        label: 'Chưa từng đi',
        data: [datVietTours.never.is_never],
        borderWidth: 1,
        backgroundColor: '#45b2f387',
        borderRadius: 5,
    }];

     //Vehicle Rate
     var tourTypes = {
        tour_type_1 : {
            count: 0
        },
        tour_type_2 : {
            count: 0
        },
        tour_type_3 : {
            count: 0
        },
        tour_type_4 : {
            count: 0
        },
        tour_type_5 : {
            count: 0
        }
    }
    getRateTourTypes(otherAdvice, tourTypes);
    const datatourTypes = [{
        label: 'Du lịch nghỉ dưỡng (ăn uống, nghỉ ngơi, thư giãn...)',
        data: [tourTypes.tour_type_1.count],
        borderWidth: 1,
        backgroundColor: 'rgb(230 17 17 / 74%)',
        borderRadius: 5,
    }, {
        label: 'Du lịch khám phá (tham quan, chụp hình, Mua sắm...)',
        data: [tourTypes.tour_type_2.count],
        borderWidth: 1,
        backgroundColor: 'rgb(237 234 38 / 51%)',
        borderRadius: 5,
    }, {
        label: 'Du lịch trải nghiệm (leo núi, vượt rừng, cắm trại, đạp xe, chèo thuyền...)',
        data: [tourTypes.tour_type_3.count],
        borderWidth: 1,
        backgroundColor: '#45b2f387',
        borderRadius: 5,
    },
    {
        label: 'Du lịch sức khỏe (thiền định, yoga, cân bằng thân-tâm-trí...)',
        data: [tourTypes.tour_type_4.count],
        borderWidth: 1,
        backgroundColor: '#0aab0aad',
        borderRadius: 5,
      },
      {
        label: 'Du lịch nghỉ dưỡng (trò chơi, hoạt động nhóm, tiệc gala...)',
        data: [tourTypes.tour_type_5.count],
        borderWidth: 1,
        backgroundColor: '#0aab0aad',
        borderRadius: 5,
      }
    ];

    //Tour Factor
    var tourFactor = {
        tour_factor: {
            fac_1: 0,
            fac_2: 0,
            fac_3: 0,
            fac_4: 0,
            fac_5: 0,
            fac_6: 0,
        }

    }
    getRateTourFactor(otherAdvice, tourFactor);
    const dataTourFactor = [{
        label: 'Uy tín thương hiệu',
        data: [tourFactor.tour_factor.fac_1],
        borderWidth: 1,
        backgroundColor: 'rgb(230 17 17 / 74%)',
        borderRadius: 5,
    }, {
        label: 'Có khuyến mãi/ quà tặng',
        data: [tourFactor.tour_factor.fac_2],
        borderWidth: 1,
        backgroundColor: 'rgb(237 234 38 / 51%)',
        borderRadius: 5,
    }, {
        label: 'Gía rẻ hơn nơi khác',
        data: [tourFactor.tour_factor.fac_3],
        borderWidth: 1,
        backgroundColor: '#45b2f387',
        borderRadius: 5,
    },
    {
        label: 'Thấy quảng cáo nhiều',
        data: [tourFactor.tour_factor.fac_4],
        borderWidth: 1,
        backgroundColor: '#0aab0aad',
        borderRadius: 5,
      },
      {
        label: 'Nhân viên tư vấn nhiệt tình',
        data: [tourFactor.tour_factor.fac_5],
        borderWidth: 1,
        backgroundColor: '#0aab0aad',
        borderRadius: 5,
      },
      {
        label: 'Người thân bạn bè giới thiệu',
        data: [tourFactor.tour_factor.fac_6],
        borderWidth: 1,
        backgroundColor: '#0aab0aad',
        borderRadius: 5,
      }];

    //CREATE CHART
      const options = {
        type: 'bar',
        data: {
            labels: tourRateLabels,
            datasets: dataTourRate,
        },
        };
    //Restaurant Rate
    restaurantRates = {
        restaurant_dinner : {
            bad: 0,
            notBad: 0,
            good: 0,
            veryGood: 0
        },
        restaurant_clean : {
            bad: 0,
            notBad: 0,
            good: 0,
            veryGood: 0
        },
        restaurant_attitude : {
            bad: 0,
            notBad: 0,
            good: 0,
            veryGood: 0
        },
        restaurant_shopping : {
            bad: 0,
            notBad: 0,
            good: 0,
            veryGood: 0
        }
    }
    getRateType(restaurantRate, restaurantRates);
    const dataRestaurantRate = [{
        label: 'Không tốt',
        data: [restaurantRates.restaurant_dinner.bad, restaurantRates.restaurant_clean.bad, restaurantRates.restaurant_attitude.bad, restaurantRates.restaurant_shopping.bad],
        borderWidth: 1,
        backgroundColor: 'rgb(230 17 17 / 74%)',
        borderRadius: 5,
    }, {
        label: 'Bình thường',
        data: [restaurantRates.restaurant_dinner.notBad, restaurantRates.restaurant_clean.notBad, restaurantRates.restaurant_attitude.notBad, restaurantRates.restaurant_shopping.notBad],
        borderWidth: 1,
        backgroundColor: 'rgb(237 234 38 / 51%)',
        borderRadius: 5,
    }, {
        label: 'Tốt',
        data: [restaurantRates.restaurant_dinner.good, restaurantRates.restaurant_clean.good, restaurantRates.restaurant_attitude.good, restaurantRates.restaurant_shopping.good],
        borderWidth: 1,
        backgroundColor: '#45b2f387',
        borderRadius: 5,
    },
    {
        label: 'Rất tốt',
        data: [restaurantRates.restaurant_dinner.veryGood, restaurantRates.restaurant_clean.veryGood, restaurantRates.restaurant_attitude.veryGood, restaurantRates.restaurant_shopping.veryGood],
        borderWidth: 1,
        backgroundColor: '#0aab0aad',
        borderRadius: 5,
      }];
    var ctx = document.getElementById('chartJSContainer');
    var chart = new Chart(ctx, options);
    $(".change-chart").click(function() {
        if($(this).hasClass("tour-lead-rate")) {

            addData(chart, dataTourLeadRate , tourLeadRateLabels);
        }
        else if($(this).hasClass("general-thinking")) {
            addData(chart, dataGeneralThingking, generalThinkingLabels);
        }
        else if($(this).hasClass("tour-rate")) {
            addData(chart, dataTourRate , tourRateLabels);
        }
        else if($(this).hasClass("restaurant-rate")) {
            addData(chart, dataRestaurantRate , restaurantRateLabels);
        }
        else if($(this).hasClass("accommodation-rate")) {
            addData(chart, dataAccommodationRate , accommodationRateLabels);
        }
        else if($(this).hasClass("vehicle-rate")) {
            addData(chart, dataVehicleRate , vehicleRateLabels);
        }
        else if($(this).hasClass("foreign-tour-lead-rate")) {
            addData(chart, dataForeignTourLeadRates , tourLeadRateLabels);
        }
        else if($(this).hasClass("how-to-know")) {
            addData(chart, dataHowToKnow , howToKnowLabels);
        }
        else if($(this).hasClass("viettour-before")) {
            addData(chart, dataDatVietTourBefore , datVietTourBeforeLabels);
        }
        else if($(this).hasClass("tour-type")) {
            addData(chart, datatourTypes , tourTypeLabels);
        }
        else if($(this).hasClass("tour-factor")) {
            addData(chart, dataTourFactor , tourFactorLabels);
        }
    });
});

function addData(chart, data, label) {
    chart.data.labels = label;
    chart.data.datasets = data;
    chart.update();
}

function getRateType(rateType, Rates) {
    for (let i in Rates) {
        for (var key in rateType) {
            if (rateType.hasOwnProperty(key)) {
                var rateTypeGet = rateType[key][i]
                if(rateTypeGet == 0) {
                    Rates[i].bad++;
                }
                else if(rateTypeGet == 1) {
                    Rates[i].notBad++;
                }
                else if(rateTypeGet == 2) {
                    Rates[i].good++
                }
                else if(rateTypeGet == 3) {
                    Rates[i].veryGood++;
                }
            }
        }
    }
}

function getRateDatVietTourBefore(rateType, Rates) {
    var neverTour = true;
    for (let i in Rates) {
        for (var key in rateType) {
            if (rateType.hasOwnProperty(key)) {
                var rateTypeGet = rateType[key][i]
                if(rateTypeGet != null) {
                    neverTour = false;
                    Rates[i].is_before++;
                }
                else {
                    neverTour = true;
                }
            }
        }
        if(neverTour == true) {
            Rates['never'].is_never++;
        }
    }
}

function getRateTourTypes(rateType, Rates) {
    for (let i in Rates) {
        for (var key in rateType) {
            if (rateType.hasOwnProperty(key)) {
                var rateTypeGet = rateType[key][i]
                if(rateTypeGet != null) {
                    neverTour = false;
                    Rates[i].count++;
                }
            }
        }
    }
}

function getRateTourFactor(rateType, Rates) {
    for (let i in Rates) {
        for (var key in rateType) {
            if (rateType.hasOwnProperty(key)) {
                var rateTypeGet = rateType[key][i]
                if(rateTypeGet == 0) {
                    Rates[i].fac_1++;
                }
                else if(rateTypeGet == 1) {
                    Rates[i].fac_2++;
                }
                else if(rateTypeGet == 2) {
                    Rates[i].fac_3++
                }
                else if(rateTypeGet == 3) {
                    Rates[i].fac_4++;
                }
                else if(rateTypeGet == 4) {
                    Rates[i].fac_5++;
                }
                else if(rateTypeGet == 5) {
                    Rates[i].fac_6++;
                }
            }
        }
    }
}
