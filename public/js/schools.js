$(document).ready(function () {

    load_json_data('region', '0');

    function load_json_data(id, parent_id) {
        var html_code = '';
        $.getJSON('region_type_schoolname.json', function (data) {

            html_code += '<option value="" id="">Select ' + id + '</option>';
            $.each(data, function (key, value) {
                if (id == 'region') {
                    if (value.parent_id == '0') {
                        html_code += '<option value="' + value.name + '" data-region="' + value.id + '"' + '>' + value.name + '</option>';
                    }
                } else {
                    if (value.parent_id == parent_id) {
                        html_code += '<option value="' + value.name + '" data-schoolname="' + value.id + '" data-type="' + value.id + '"' + '>' + value.name + '</option>';
                    }
                }
            });
            $('#' + id).html(html_code);
        });

    }

    $(document).on('change', '#region', function () {
        var region_id = $(this).find(':selected').data('region');
        if (region_id != '') {
            load_json_data('type', region_id);
        } else {
            $('#type').html('<option value="" id=">Select School type</option>');
            $('#schoolname').html('<option value="" id="">Select Schools</option>');
        }
    });

    $(document).on('change', '#type', function () {

        var type_id = $(this).find(':selected').data('type');
        if (type_id != '') {
            load_json_data('schoolname', type_id);
        } else {
            $('#schoolname').html('<option value="" id="">Select Schools</option>');

        }
    });
});

$(document).on('change', '#schoolname', function (e) {
    $('.dataschools').hide();
    $('#' + $(this).find(':selected').data('schoolname')).fadeIn(700);
});
