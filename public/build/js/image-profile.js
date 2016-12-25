var $avatarInput, $avatarForm;
var $avatarImage, $avatarContainer;
var avatarUrl;

$(function () {
	$avatarInput = $('#avatarInput');
	$avatarImage = $('#avatarImage');
	$avatarForm = $('#avatarForm');
	$avatarContainer = $('#esp-user-profile');

    $avatarContainer.on('click', function (e) {
        e = e || event;
        var target = e.target || e.srcElement;
        // the click event is propagated to the parent DIV
        if (target.id == '') // this conditional avoid the bubble infinite propagation
            $avatarInput.click();
    });

	avatarUrl = $avatarForm.attr('action');

	$avatarInput.on('change', function () {
		// AJAX
		var formData = new FormData();
		formData.append('photo', $avatarInput[0].files[0]);

		$.ajax({
		    url: avatarUrl+'?'+$avatarForm.serialize(),
		    method: 'POST',
		    data: formData,
		    processData: false,
			contentType: false
		})
		.done(function(data) {
		    if (data.success)
		    	$avatarImage.attr('src', './images/users/'+data.file_name+'?'+ new Date().getTime());
		})
		.fail(function() {
		    alert('La imagen subida no tiene el formato correcto!');
		});
	});
});