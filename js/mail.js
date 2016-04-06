$(document).ready(function() {
    $("#ok").hide();

    $("#formid").validate({
        rules: {
            name: { required: true, minlength: 2},
            email: { required:true, email: true},
            phone_number: { required:true, minlength: 2},
            type_event: { required:true, minlength: 2},
            date_event: { required:true, minlength: 2},
            service: { required:true, minlength: 2},
            persons: { required:true, minlength: 2}
        },
        messages: {
            name: "Debe introducir su nombre.",
            email : "Debe introducir un email válido.",
            phone_number : "Debes introducir un número telefónico.",
            type_event : "Debes selecionar un evento.",
            date_event : "Debes selecionar una fecha.",
            persons : "Debes ingresar un número.",
        },
        submitHandler: function(form){
            var dataString = 'name='+$('#name').val()+'&email='+$('#email').val()+'&phone_number='+$('#phone_number').val()+'&type_event='+$('#type_event').val()+'&date_event='+$('#date_event').val()+'&service='+$('#service').val()+'&persons='+$('#persons').val();
            $.ajax({
                type: "POST",
                url:"model/contacto_mail.php",
                data: dataString,
                success: function(data){
                    $("#ok").html(data);
                    $("#ok").show();
                    document.getElementById('formid').reset();
                 
                }
            });
        }
    });
});