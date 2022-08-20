//document.querySelector(".btn-alerta").click();

function CerrarAlerta(){
    document.getElementById("alerta").style.display = 'none';
    $('#form-confirm-refresh').load(location.href + " #form-confirm-refresh", "");
}

function AbrirAgregar(){
    document.getElementById("alerta").style.display = 'flex';
}

function Agregar(){
    let objeto = $("#objeto").val();

    let datos = $("#form-objeto-agregar").serialize();

    $.ajax({
        method: 'POST',
        url: 'functions/agregarObjeto.php',
        data: datos,
        success: function(response){
            let res = JSON.parse(response);

                

                $('#resp_text').removeClass('has-text-danger');
                $('#resp_text').addClass('has-text-success');
                $('#resp_text').html(res.msg);
                $('#form-objeto-agregar').hide();
                $('#lista-objetos').load(location.href + " #lista-objetos", "");
                
        },
        error: function (response){
            let res = JSON.parse(response.responseText);
                $('#resp_text').addClass('has-text-danger');
                $('#resp_text').removeClass('has-text-success');
                $('#resp_text').removeClass('title');
                $('#resp_text').html(res.msg);
                document.getElementById('objeto').value = '';
        }
    });

}

function EliminarObjeto(id){
    $.ajax({
        method: 'POST',
        url: 'functions/eliminarObjeto.php',
        data: {'id': id},
        success: function(response){
            let res = JSON.parse(response);
            $('#lista-objetos').load(location.href + " #lista-objetos", "");
        }
    });
}