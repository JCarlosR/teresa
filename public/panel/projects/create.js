var htmlStatus = {
    'good': '<i class="ion-record text-success"></i> Correcto',
    'regular': '<i class="ion-record text-warning"></i> Regular',
    'bad': '<i class="ion-record text-danger"></i> Pobre'
};

$(document).ready(function() {

    // Tag-it setup
    $('#myULServices').tagit({
        availableTags: sampleTags, // this param is of course optional. it's for autocomplete.
        fieldName: 'services[]',
        allowSpaces: true
    });

    // Summer note setup
    $('#note0, #note1, #note2, #note3').summernote({
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

    $('#note0').on('summernote.keyup', onKeyUp0);
    $('#note1').on('summernote.keyup', onKeyUp1);
    $('#note2').on('summernote.keyup', onKeyUp2);
    $('#note3').on('summernote.keyup', onKeyUp3);

    function onKeyUp0() {
        setCharactersLengthMessage($(this), $('#limit0'), $('#status0'));
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

    // Apply one and first evaluation
    onKeyUp0(); onKeyUp1(); onKeyUp2(); onKeyUp3();

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
