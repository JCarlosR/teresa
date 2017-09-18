var htmlStatus = {
    'good': '<i class="ion-record text-success"></i> Correcto',
    'regular': '<i class="ion-record text-warning"></i> Regular',
    'bad': '<i class="ion-record text-danger"></i> Pobre'
};

$(document).ready(function() {

    var toolbarConfig = [
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear']],
        ['fontsize', ['fontsize']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['insert', ['link', 'hr']],
        ['view', ['fullscreen']]
    ];

    // Summer note setup
    for (var i=1; i<=3; ++i) {
        var $note = $('#note'+i);
        var $limit = $('#limit'+i);
        var $status = $('#status'+i);

        (function ($note, $limit, $status) {
            $note.summernote({
                toolbar: toolbarConfig,
                callbacks: {
                    onInit: function() {
                        setCharactersLengthMessage($note, $limit, $status);
                    }
                }
            });

            $note.on('summernote.keyup', function () {
                setCharactersLengthMessage($note, $limit, $status);
            });
        })($note, $limit, $status);
    }

    function setCharactersLengthMessage($summerNote, $limit, $status) {
        // console.log('fired');
        var charactersNum = $summerNote.next('.note-editor').find('.note-editable').text()
            .replace(/<(?:.|\n)*?>/gm, '').length; // remove html comments added by summer note

        console.log($summerNote);
        $limit.html(charactersNum + ' caracteres');

        // for questions
        if (charactersNum >= 500)
            $status.html(htmlStatus.good);
        else if (charactersNum >= 300)
            $status.html(htmlStatus.regular);
        else
            $status.html(htmlStatus.bad);
    }

});
