var htmlStatus = {
    'good': '<i class="ion-record text-success"></i> Correcto',
    'regular': '<i class="ion-record text-warning"></i> Regular',
    'bad': '<i class="ion-record text-danger"></i> Pobre'
};

$(document).ready(function() {
    $('#note1').summernote({
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['para', ['ul', 'ol']],
            ['insert', ['link', 'picture', 'hr']],
            ['view', ['fullscreen']]
        ],
        callbacks: {
            onInit: function() {
                // Apply one and first evaluation to each summer note
                // for (var i=1; i<=1; ++i)
                setCharactersLengthMessage($('#note'+1), $('#limit'+1), $('#status'+1));
            }
        }
    });

    $('#note1').on('summernote.keyup', onKeyUp1);

    function onKeyUp1() {
        setCharactersLengthMessage($(this), $('#limit1'), $('#status1'));
    }

    function setCharactersLengthMessage($summerNote, $limit, $status) {
        var charactersNum = $summerNote.next('.note-editor').find('.note-editable').text()
            .replace(/<(?:.|\n)*?>/gm, '').length; // remove html comments added by summer note

        $limit.html(charactersNum + ' caracteres');

        if (charactersNum >= 300)
            $status.html(htmlStatus.good);
        else if (charactersNum >= 200)
            $status.html(htmlStatus.regular);
        else
            $status.html(htmlStatus.bad);
    }
});
