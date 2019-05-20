$(function(){
    $("#formNewsletter").submit(function(e) {
        e.preventDefault();
        var object = validFormNewsletter();
        if(object !== 0)
            saveNewsletter(object);
    });
});

function validFormNewsletter(){
    if($.trim($('#name').val()) === '' || $.trim($('#phone').val()) === '' || $.trim($('#email').val()) === ''){
        swal("¡FAILED!", "The information entered is incomplete, there are empty fields.", "warning");
        return 0;
    }else{
        return {
            'name':$('#name').val(),
            'phone':$('#phone').val(),
            'email':$('#email').val()
        };
    }
}

function saveNewsletter(object){
    $.ajax({
        url: 'save-new',
        type: 'POST',
        data: object,
        success:function(data){
        	if (data) {
	            swal("¡SUCCESSFUL!", "Your data has been stored", "success");
	            cleanFormNewsletter();
	        }else{
	            swal("¡FAILED!", "Your data could not be stored", "warning");
	        }
	    }
    });
}

function cleanFormNewsletter() {
	$('#name').val(''),
	$('#phone').val(''),
	$('#email').val('')
}

function solonumeros(e){
   key = e.keyCode || e.which;
   tecla = String.fromCharCode(key).toLowerCase();
   letras = "1234567890.";
   especiales = "8-37-39-46";

   tecla_especial = false
   for(var i in especiales){
        if(key == especiales[i]){
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla)==-1 && !tecla_especial){
        return false;
    }
}