// var htmlStatus = {
//     'good': '<i class="ion-record text-success"></i> Correcto',
//     'regular': '<i class="ion-record text-warning"></i> Regular',
//     'bad': '<i class="ion-record text-danger"></i> Pobre'
// };

$(document).ready(function() {

    // Summer note setup
    $('#content').summernote({
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['fontsize', ['fontsize']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['insert', ['link', 'picture', 'hr']],
            ['view', ['fullscreen']]
        ],
        callbacks: {
            onInit: function() {
                // for (var i=1; i<=3; ++i)
                //     setCharactersLengthMessage($('#note'+i), $('#limit'+i), $('#status'+i));
            }
        }
    });

    // onKeyUp0(); // initial evaluation

    // $('#content').on('keyup', onKeyUp0);
    //
    // function onKeyUp0() {
    //     var charactersNum = $('#note0').val().length;
    //     $('#limit0').html(charactersNum + ' caracteres');
    //     // for the story title
    //     var $status = $('#status0');
    //     if (charactersNum >= 55 && charactersNum <= 70)
    //         $status.html(htmlStatus.good);
    //     else if (charactersNum >= 50 && charactersNum <= 72)
    //         $status.html(htmlStatus.regular);
    //     else
    //         $status.html(htmlStatus.bad);
    // }
    //
    // function setCharactersLengthMessage($summerNote, $limit, $status) {
    //     var charactersNum = $summerNote.next('.note-editor').find('.note-editable').text()
    //         .replace(/<(?:.|\n)*?>/gm, '').length; // remove html comments added by summer note
    //
    //     $limit.html(charactersNum + ' caracteres');
    //
    //     // for questions
    //     if (charactersNum >= 500)
    //         $status.html(htmlStatus.good);
    //     else if (charactersNum >= 300)
    //         $status.html(htmlStatus.regular);
    //     else
    //         $status.html(htmlStatus.bad);
    //
    // }
});
