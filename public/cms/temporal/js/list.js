$(document).ready(function () {

    $.validator.addMethod("validName", function(value, element, arg){
        var re = new RegExp(arg);
        return this.optional(element) || re.test(value);
    }, "Valor inválido.");

    $.validator.addMethod("validEmail", function(value, element, arg){
        var re = new RegExp(arg);
        return this.optional(element) || re.test(value);
    }, "Valor inválido.");

    $.validator.addMethod("valueNotEquals", function(value, element, arg){
        return arg != value;
    }, "Valor inválido.");

    if($("#contactForm").length > 0){
        $("#contactForm").validate({
            debug: true,
            errorElement: "span",
            rules: {
                email: { validEmail: /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i },
                name: { valueNotEquals: "", validName: /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/i },   
                subject: { valueNotEquals: "" },
                message: { valueNotEquals: "" }
            },
            messages: {
                user_id: "",
                email: "",
                name: "",
                phone: "",
                topic: "",
                message: ""
            },
            highlight: function (element, errorClass, validClass) {
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
            },
            errorPlacement: function (error, element) {
                if (element.parent('.input-group').length || element.prop('type') === 'radio' || element.prop('type') === 'text' || element.prop('class') === 'form-control') {
                    error.insertAfter(element);
                } else if(element.prop('type') === 'checkbox'){
                    element.focus();
                    element.siblings().attr({
                      style: "color: red;"
                    });
                } else {
                    error.insertAfter(element);
                }
            },  
            submitHandler: function (form) {
                $(':input[type="submit"]').prop('disabled', true);
                $.ajax({
                    url: 'https://theressa.net/formulario/contacto',
                    dataType: 'json',
                    type: 'GET',
                    data: $("#contactForm").serialize(),
                    success: function (data) {
                        if (data.success) {
                            $("#contactForm")[0].reset();
                            $("#myModal3").modal("show");
                            $(':input[type="submit"]').prop('disabled', false);
                        } else {
                            displayErrorMessages(data);
                        }
                    },
                    error: function() {
                        alert('Ocurrió un error inesperado.');
                    }
                });
            }
        });
    }  

    if ($("#close_form_blend").length > 0){
        $("#close_form_blend").click(function(e){
            document.forms["form_blend"].reset();
        });
    }

});

function displayErrorMessages(errors) {
    for (var property in errors) {
        if (errors.hasOwnProperty(property)) {
            alert(errors[property]);
        }
    }
}