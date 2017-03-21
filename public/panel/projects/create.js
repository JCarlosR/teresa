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
        ],
        callbacks: {
            onInit: function() {
                // Apply one and first evaluation to each summer note
                for (var i=0; i<=3; ++i)
                    // isTitle: TRUE for i == 0
                    setCharactersLengthMessage($('#note'+i), $('#limit'+i), $('#status'+i), i==0);
            }
        }
    });

    $('#note0').on('summernote.keyup', onKeyUp0);
    $('#note1').on('summernote.keyup', onKeyUp1);
    $('#note2').on('summernote.keyup', onKeyUp2);
    $('#note3').on('summernote.keyup', onKeyUp3);

    function onKeyUp0() {
        setCharactersLengthMessage($(this), $('#limit0'), $('#status0'), true);
    }
    function onKeyUp1() {
        setCharactersLengthMessage($(this), $('#limit1'), $('#status1'), false);
    }
    function onKeyUp2() {
        setCharactersLengthMessage($(this), $('#limit2'), $('#status2'), false);
    }
    function onKeyUp3() {
        setCharactersLengthMessage($(this), $('#limit3'), $('#status3'), false);
    }

    function setCharactersLengthMessage($summerNote, $limit, $status, isTitle) {
        var charactersNum = $summerNote.next('.note-editor').find('.note-editable').text()
            .replace(/<(?:.|\n)*?>/gm, '').length; // remove html comments added by summer note

        $limit.html(charactersNum + ' caracteres');

        if (isTitle)
        {
            // for the story title
            if (charactersNum >= 55 && charactersNum <= 70)
                $status.html(htmlStatus.good);
            else if (charactersNum >= 50 && charactersNum <= 72)
                $status.html(htmlStatus.regular);
            else
                $status.html(htmlStatus.bad);
        } else {
            // for questions
            if (charactersNum >= 300)
                $status.html(htmlStatus.good);
            else if (charactersNum >= 200)
                $status.html(htmlStatus.regular);
            else
                $status.html(htmlStatus.bad);
        }

    }
});
