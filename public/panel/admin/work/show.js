var $spanMonth, $spanActivity;
var $complete, $awaiting, $cancel, $empty;
var $formUpdateState;

$(function () {
    $spanMonth = $('#spanMonth');
    $spanActivity = $('#spanActivity');

    $formUpdateState = $('#formUpdateState');
    $complete = $('#complete');
    $awaiting = $('#awaiting');
    $cancel = $('#cancel');
    $empty = $('#empty');

    $('[data-type]').on('click', onClickTd);
    function onClickTd() {
        var $this = $(this);

        var type = $this.data('type');
        var offset = $this.data('offset');
        var tdIndex = $this.index();
        var status = $this.data('value');
        // alert(status);

        var monthName = $('#schedule-tr-months').find('th')[tdIndex].innerHTML;
        var activityName = $this.parent('tr').find('td')[0].innerHTML;

        $formUpdateState.find('[name=type]').val(type);
        $formUpdateState.find('[name=month_offset]').val(offset);

        $spanMonth.text(monthName);
        $spanActivity.text(activityName);
        switch (status) {
            case 1: $complete.prop('checked', true); break;
            case 0: $awaiting.prop('checked', true); break;
            case -1: $cancel.prop('checked', true); break;
            default: $empty.prop('checked', true); break;
        }

        $('#modalActivityMonth').modal('show');
    }



    $('#exportToPdf').on('click', htmlToPdf);
    function htmlToPdf() {
        var doc = new jsPDF('l', 'mm', [297, 210]);
        doc.text("From HTML", 14, 16);
        var elem = document.getElementById("schedule-table");
        var res = doc.autoTableHtmlToJson(elem);
        console.log(res);
        doc.autoTable(res.columns, res.data, {startY: 20});

        doc.setProperties({
            title: 'Cronograma de trabajo',
            subject: 'Cronograma generado por Teresa v1.0'
        });

        doc.save('table.pdf');
    }
});
