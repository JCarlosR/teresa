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
    $('#note1').summernote({
        toolbar: toolbarConfig,
        placeholder: 'Contexto y Ambiente de trabajo en el que se desarrollan las actividades. Desventajas y desafíos encontrados, problemáticas, necesidades. ',
        callbacks: {
            onInit: function() {
                setCharactersLengthMessage($('#note1'), $('#limit1'), $('#status1'));
            }
        },
        height: 60
    });

    $('#note2').summernote({
        toolbar: toolbarConfig,
        placeholder: 'Exposición del metodo de trabajo y las caracteristicas del servicio, ventajas de alguna innovación o acciones llevadas a cabo, descripción de diversos aspectos sociales, económicos, técnicos o laborales de la propia función desarrollada. Implicancias y consecuencias de ellos. De qué manera nos adaptamos al contexto y qué valor añadimos dentro de nuestros servicios. ¿Qué queda por hacer? ¿Qué comentarios, logros o reconocimientos hemos recibido por el desarrollo de estas actividades?',
        callbacks: {
            onInit: function() {
                setCharactersLengthMessage($('#note2'), $('#limit2'), $('#status2'));
            }
        },
        height: 100
    });

    $('#note1').on('summernote.keyup', onKeyUp1);
    $('#note2').on('summernote.keyup', onKeyUp2);

    function onKeyUp1() {
        setCharactersLengthMessage($(this), $('#limit1'), $('#status1'));
    }
    function onKeyUp2() {
        setCharactersLengthMessage($(this), $('#limit2'), $('#status2'));
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
