$(function () {
    $('.btn-filter').on('click', function () {
        var $target = $(this).data('target');
        if ($target != 'all') {
            $('[data-status]').css('display', 'none');
            $('[data-status="' + $target + '"]').fadeIn('slow');
        } else {
            $('[data-status]').css('display', 'none').fadeIn('slow');
        }
    });
});