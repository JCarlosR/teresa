$(function () {
    $('select').on('change', onSelectChangeValue);
    setInitialBackgroundColorToSelects();
});

function onSelectChangeValue() {
    if ($(this).val() == 1) {
        $(this).parent().removeClass('has-error').addClass('has-success');
    } else {
        $(this).parent().removeClass('has-success').addClass('has-error');
    }
}
function setInitialBackgroundColorToSelects() {
    $('select').each(function (i, e) {
        onSelectChangeValue.call(e); // calling a function with a desired context
    });
}