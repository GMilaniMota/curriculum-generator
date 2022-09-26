$(document).ready(function(){
    var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    spOptions = {
    onKeyPress: function(val, e, field, options) {
        field.mask(SPMaskBehavior.apply({}, arguments), options);
        }
    };

    $('#telInput').mask(SPMaskBehavior, spOptions);
    $('#cepInput').mask('00000-000');

    $('#currOcupInput').change(function() {
        if ($(this).is(':checked')) {
            $('#endDateInput').val('');
            $('#endDateInput').prop('disabled', true);
        } else {
            $('#endDateInput').prop('disabled', false);
        }
    });

    $('#btnAddExp').click(function() {
        return
    });
});