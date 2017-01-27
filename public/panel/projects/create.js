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
        setCharactersLengthMessage($(this), $('#limit0'));
    }
    function onKeyUp1() {
        setCharactersLengthMessage($(this), $('#limit1'));
    }
    function onKeyUp2() {
        setCharactersLengthMessage($(this), $('#limit2'));
    }
    function onKeyUp3() {
        setCharactersLengthMessage($(this), $('#limit3'));
    }

    function setCharactersLengthMessage($summerNote, $container) {
        var charactersNum = $summerNote.next('.note-editor').find('.note-editable').text().length;
        $container.html(charactersNum + ' caracteres');
    }
});
