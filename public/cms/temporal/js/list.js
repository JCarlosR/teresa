
$(document).ready(function () {
    var method = "";

    if(window.location.href.indexOf("create") > -1) {
        method = "http://localhost/launcher-blend/admin/users/create_app";
    }else if(window.location.href.indexOf("update") > -1){
        method = "http://localhost/launcher-blend/admin/users/update_app";
    }

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

    if($("#form_blend").length > 0){
        $("#form_blend").validate({
            debug: true,
            errorElement: "span",
            rules: {
                email: {validEmail: /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i },
                name: { valueNotEquals: "", validName: /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/i },   
                subject: { valueNotEquals: "" },
                message: { valueNotEquals: "" },
            },
            messages:{
                email: "",
                name: "",
                subject: "",
                message: "",
            },
            highlight: function (element, errorClass, validClass) { //glyphicon-ok -- glyphicon-remove
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                //$(element).closest('.form-group').find('span').removeClass('glyphicon-ok').addClass('glyphicon-remove');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                //$(element).closest('.form-group').find('span').removeClass('glyphicon-remove').addClass('glyphicon-ok');
            },
            errorPlacement: function (error, element) {
                if (element.parent('.input-group').length || element.prop('type') === 'radio' || element.prop('type') === 'text' || element.prop('class') === 'form-control') {
                    //error.insertAfter(element.parent());
                    error.insertAfter(element);
                }else if(element.prop('type') === 'checkbox'){
                    element.focus();
                    element.siblings().attr({
                      style: "color: red;"
                    });
                }else{
                    error.insertAfter(element);
                }
            },  
            submitHandler: function (form) {
                $(':input[type="submit"]').prop('disabled', true);
                $.ajax({
                    url: baseUrl+'/home/send_form', 
                    type: 'POST', 
                    data: $("#form_blend").serialize(), 
                    success: function (data) {
                        document.forms["form_blend"].reset();
                        $("#myModal3").modal("show");
                        $(':input[type="submit"]').prop('disabled', false);
                    }
                });
            },
        });
    }  

    if($("#form_notify").length > 0){
        $("#form_notify").validate({
            debug: true,
            errorElement: "span",
            rules: {
                email_notify: {validEmail: /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i },
            },
            messages:{
                email_notify: "",
            },
            highlight: function (element, errorClass, validClass) { //glyphicon-ok -- glyphicon-remove
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                //$(element).closest('.form-group').find('span').removeClass('glyphicon-ok').addClass('glyphicon-remove');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                //$(element).closest('.form-group').find('span').removeClass('glyphicon-remove').addClass('glyphicon-ok');
            },
            errorPlacement: function (error, element) {
                if (element.parent('.input-group').length || element.prop('type') === 'radio' || element.prop('type') === 'text' || element.prop('class') === 'form-control') {
                    //error.insertAfter(element.parent());
                    error.insertAfter(element);
                }else if(element.prop('type') === 'checkbox'){
                    element.focus();
                    element.siblings().attr({
                      style: "color: red;"
                    });
                }else{
                    error.insertAfter(element);
                }
            },  
            submitHandler: function (form) {
                $(':input[type="submit"]').prop('disabled', true);
                $.ajax({
                    url: baseUrl+'/home/send_notificacion', 
                    type: 'POST', 
                    data: $("#form_notify").serialize(), 
                    success: function (data) {
                        document.forms["form_notify"].reset();
                        $("#myModal3").modal("show");
                        $(':input[type="submit"]').prop('disabled', false);
                    }
                });
            },
        });
    }  

    if ($("#close_form_blend").length > 0){
        $("#close_form_blend").click(function(e){
            document.forms["form_blend"].reset();
        });
    }

    if ($("#close_notify").length > 0){
        $("#close_notify").click(function(e){
            document.forms["form_notify"].reset();
        });
    }

});