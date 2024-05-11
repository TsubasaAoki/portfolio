$(function () {
    $('form').submit(function () {
        $(this).find('input[type="submit"], button[type="submit"]').prop('disabled', true);
    });
});
