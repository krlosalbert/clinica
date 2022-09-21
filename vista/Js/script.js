$(document).ready(function(){
    $("#frmPaciente").dialog({
        autoOpen: false,
        height: 310,
        width: 400,
        modal: true,
        buttons: {
            "Insertar":insertarPaciente,
            "Cancelar":cancelar
        }
    });
});
function consultarPaciente(){
    
    window.location.replace(`index.php?accion=ConsultarPaciente&documento=${$('#asignarDocumento').val()}`);
    console.log(doc);
   /*  $("#paciente").load(url,function(){
    
    }); */
    /* parametros = { 
        "accion" : "consultarPaciente",
        "documento" : doc
    };
    $.ajax({
        data: parametros,
        url: 'index.php',
        type: 'GET'
        
    })
    .done(function(data){
        console.log(data);
        /* window.location.replace(`ReadUsers.php`); 
    })
    .fail(function(){

        console.log('fallo');
    }); */
}

function mostrarFormulario(){
    documento = "" + $("#asignarDocumento").val();
    $("#PacDocumento").attr("value",documento);
    $("#frmPaciente").dialog('open');
}

/* function consultarPaciente(){
    const doc = document.getElementById("asignarDocumento").value;
    var parametros = {
        "documento": doc
    };
    //utilizo el metodo ajax para poder enviar los datos por metodo POST para la respectiva insersion a la BD
    $.ajax({
    data: parametros,
    url: 'index.php?accion=consultarPaciente',
    type: "GET"
    
    })
    .done(function(data){
        $("#paciente").html(data);
        console.log(data);
    })
    .fail(function(){

    console.log('fallo');
    }); 
} */