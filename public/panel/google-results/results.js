$(function () {
    $('[name=name]').on('keyup', onChangeName);
    $('[name=description]').on('keyup', onChangeDescription);
});

function onChangeName() {
    var title = $(this).val();
    $('.google-results .title').text(title);
    $('.google-results cite span').text(convertToSlug(title));
}

function onChangeDescription() {
    var description = $(this).val();
    if (description.length > 156) {
        description = description.substr(0, 152) + ' ...';
    }
    $('.google-results .description').text(description);
}

function convertToSlug(str) {
    str = str.replace(/^\s+|\s+$/g, ''); // trim
    str = str.toLowerCase();

    // remove accents, swap ñ for n, etc
    var from = "ãàáäâẽèéëêìíïîõòóöôùúüûñç·/_,:;";
    var to   = "aaaaaeeeeeiiiiooooouuuunc------";
    for (var i=0, l=from.length ; i<l ; i++) {
        str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
    }

    str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
        .replace(/\s+/g, '-') // collapse whitespace and replace by -
        .replace(/-+/g, '-'); // collapse dashes

    return str;
}
