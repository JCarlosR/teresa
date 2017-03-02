var htmlStatus = {
    'good': '<i class="ion-record text-success"></i> Correcto',
    'regular': '<i class="ion-record text-warning"></i> Regular',
    'bad': '<i class="ion-record text-danger"></i> Pobre'
};

$(document).ready(function() {

    // Summer note setup
    $('#note0, #note1, #note2, #note3, #note4, #note5, #note6').summernote({
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['fontsize', ['fontsize']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['insert', ['link', 'picture', 'hr']],
            ['view', ['fullscreen']]
        ]
    });

    $('#note1').on('summernote.keyup', onKeyUp1);
    $('#note2').on('summernote.keyup', onKeyUp2);
    $('#note3').on('summernote.keyup', onKeyUp3);
    $('#note4').on('summernote.keyup', onKeyUp4);
    $('#note5').on('summernote.keyup', onKeyUp5);
    $('#note6').on('summernote.keyup', onKeyUp6);

    function onKeyUp1() {
        setCharactersLengthMessage($(this), $('#limit1'), $('#status1'));
    }
    function onKeyUp2() {
        setCharactersLengthMessage($(this), $('#limit2'), $('#status2'));
    }
    function onKeyUp3() {
        setCharactersLengthMessage($(this), $('#limit3'), $('#status3'));
    }
    function onKeyUp4() {
        setCharactersLengthMessage($(this), $('#limit4'), $('#status4'));
    }
    function onKeyUp5() {
        setCharactersLengthMessage($(this), $('#limit5'), $('#status5'));
    }
    function onKeyUp6() {
        setCharactersLengthMessage($(this), $('#limit6'), $('#status6'));
    }

    function setCharactersLengthMessage($summerNote, $limit, $status) {
        var charactersNum = $summerNote.next('.note-editor').find('.note-editable').text().length;
        $limit.html(charactersNum + ' caracteres');

        if (charactersNum >= 300)
            $status.html(htmlStatus.good);
        else if (charactersNum >= 200)
            $status.html(htmlStatus.regular);
        else
            $status.html(htmlStatus.bad);
    }
});

