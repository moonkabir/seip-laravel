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

// const url = "http://127.0.0.1:8000/districts";
// $.getJSON(url, function(result){
//     $.each(result, function(i, districts){
//         console.dir(districts.name)
//     })
// })



// load the district from Ajax call for Present Address
$('#pre_division').change(function () {
    //var a = $('#division option:selected').text();
    var division_id = $('#pre_division').val();
    $('#pre_district').empty();
    $.ajax({
        type: "GET",
        url: "http://127.0.0.1:8000/districts",
        data: {division_id: division_id},
        dataType: "json",
        success: function (data) {
            $('#pre_district').append('<option value="0" selected="selected">Select District</option>');
            for (var i = 0; i < data.length; i++) {
                if(division_id == data[i].division_id){
                    $("#pre_district").append('<option value="' + data[i].id + '">' + data[i].name + '</option>');
                }
            }
        }
    });
});
// load the Sub district from Ajax call for Present Address
$('#pre_district').change(function () {
    //var c = $('#district option:selected').text();
    var district_id = $('#pre_district').val();
    $('#pre_sub_district').empty();
    $.ajax({
        type: "GET",
        url: "http://127.0.0.1:8000/sub-districts",
        data: {district_id: district_id},
        dataType: "json",
        success: function (data) {
            $('#pre_sub_district').append('<option value="0" selected="selected">Select Upazila</option>');
            for (var i = 0; i < data.length; i++) {
                if(district_id == data[i].district_id){
                    $("#pre_sub_district").append('<option value="' + data[i].id + '">' + data[i].name + '</option>');
                }
            }
        }
    });
});

// load the district from Ajax call for Present Address

$('#per_division').change(function () {
    //var a = $('#division option:selected').text();
    var division_id = $('#per_division').val();
    $('#per_district').empty();
    $.ajax({
        type: "GET",
        url: "http://127.0.0.1:8000/districts",
        data: {division_id: division_id},
        dataType: "json",
        success: function (data) {
            $('#per_district').append('<option value="0" selected="selected">Select District</option>');
            for (var i = 0; i < data.length; i++) {
                if(division_id == data[i].division_id){
                    $("#per_district").append('<option value="' + data[i].id + '">' + data[i].name + '</option>');
                }
            }
        }
    });
});

// load the sub district from Ajax call for permanent Address
$('#per_district').change(function () {
    //var c = $('#district option:selected').text();
    var district_id = $('#per_district').val();
    $('#per_sub_district').empty();
    $.ajax({
        type: "GET",
        url: "http://127.0.0.1:8000/sub-districts",
        data: {district_id: district_id},
        dataType: "json",
        success: function (data) {
            $('#per_sub_district').append('<option value="0" selected="selected">Select Upazila</option>');
            for (var i = 0; i < data.length; i++) {
                if(district_id == data[i].district_id){
                    $("#per_sub_district").append('<option value="' + data[i].id + '">' + data[i].name + '</option>');
                }
            }
        }
    });
});