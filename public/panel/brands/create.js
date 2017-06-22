var htmlStatus = {
    'good': '<i class="ion-record text-success"></i> Correcto',
    'regular': '<i class="ion-record text-warning"></i> Regular',
    'bad': '<i class="ion-record text-danger"></i> Pobre'
};

$(document).ready(function() {

    // Summer note setup
    $('#note1, #note2, #note3').summernote({
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
                // Apply one and first evaluation to each summer note
                for (var i=1; i<=3; ++i)
                    // isTitle: TRUE for i == 0
                    setCharactersLengthMessage($('#note'+i), $('#limit'+i), $('#status'+i));
            }
        }
    });

    onKeyUp0(); // initial evaluation

    $('#note0').on('keyup', onKeyUp0); // this field is just an input
    $('#note1').on('summernote.keyup', onKeyUp1);
    $('#note2').on('summernote.keyup', onKeyUp2);
    $('#note3').on('summernote.keyup', onKeyUp3);

    function onKeyUp0() {
        var charactersNum = $('#note0').val().length;
        $('#limit0').html(charactersNum + ' caracteres');
        // for the story title
        var $status = $('#status0');
        if (charactersNum >= 55 && charactersNum <= 70)
            $status.html(htmlStatus.good);
        else if (charactersNum >= 50 && charactersNum <= 72)
            $status.html(htmlStatus.regular);
        else
            $status.html(htmlStatus.bad);
    }
    function onKeyUp1() {
        setCharactersLengthMessage($(this), $('#limit1'), $('#status1'));
    }
    function onKeyUp2() {
        setCharactersLengthMessage($(this), $('#limit2'), $('#status2'));
    }
    function onKeyUp3() {
        setCharactersLengthMessage($(this), $('#limit3'), $('#status3'));
    }

    function setCharactersLengthMessage($summerNote, $limit, $status) {
        var charactersNum = $summerNote.next('.note-editor').find('.note-editable').text()
            .replace(/<(?:.|\n)*?>/gm, '').length; // remove html comments added by summer note

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
