var htmlStatus = {
    'good': '<i class="ion-record text-success"></i> Correcto',
    'regular': '<i class="ion-record text-warning"></i> Regular',
    'bad': '<i class="ion-record text-danger"></i> Pobre'
};

$(document).ready(function() {
    $('#note1, #note2, #note3, #note4, #note5').summernote({
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
                // Apply one and first evaluation
                onKeyUp1(); onKeyUp2(); onKeyUp3(); onKeyUp4(); onKeyUp5();
            }
        }
    });

    $('#note1').on('summernote.keyup', onKeyUp1);
    $('#note2').on('summernote.keyup', onKeyUp2);
    $('#note3').on('summernote.keyup', onKeyUp3);
    $('#note4').on('summernote.keyup', onKeyUp4);
    $('#note5').on('summernote.keyup', onKeyUp5);

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
