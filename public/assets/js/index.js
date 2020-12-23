$(document).ready(function ($) {
    show_company_info('no');
});

function show_company_info(is_employee) {
    if (is_employee === 'yes') {
        $('#company_info').show();
    } else {
        $('#company_info').hide();
    }
}


// const url = "http://127.0.0.1:8000/sub-districts";
// $.getJSON(url, function(result){
//     $.each(result, function(i, sub_districts){
//         console.log(sub_districts)
//     })
// })

const url = "http://127.0.0.1:8000/districts";
$.getJSON(url, function(result){
    $.each(result, function(i, districts){
        console.dir(districts.name)
    })
})













// $('#pre_division').change(function () {
//     //var a = $('#division option:selected').text();
//     var division_id = $('#pre_division').val();
//     $('#pre_district').empty();
//     $('#pre_sub_district').empty();
//     $.ajax({
//         type: "POST",
//         url: "http://seip.bitm.org.bd/seip/get_district",
//         data: {division_id: division_id},
//         dataType: "json",
//         success: function (data) {
//             $('#pre_district').append('<option value="0" selected="selected">Select District</option>');
//             $('#pre_sub_district').append('<option value="0" selected="selected">Select Upazila</option>');
//             for (var i = 0; i < data.length; i++) {
//                 $("#pre_district").append('<option value="' + data[i].id + '">' + data[i].name + '</option>');
//             }
//         }
//     });
// });

// $('#pre_district').change(function () {
//     //var c = $('#district option:selected').text();
//     var district_id = $('#pre_district').val();
//     $('#pre_sub_district').empty();
//     $.ajax({
//         type: "POST",
//         url: "http://seip.bitm.org.bd/seip/get_upazila",
//         data: {district_id: district_id},
//         dataType: "json",
//         success: function (data) {
//             $('#pre_sub_district').append('<option value="0" selected="selected">Select Upazila</option>');
//             for (var i = 0; i < data.length; i++) {
//                 $("#pre_sub_district").append('<option value="' + data[i].id + '">' + data[i].name + '</option>');
//             }
//         }
//     });
// });