$(document).ready(function (){
    $(document).on("click", "#ingresar", function(){
        id = $("#id_i").val()
        nombre = $("#nombre_i").val()
        capital = $("#capital_i").val()
        codigo_iso = $("#codigo_iso_i").val()
        poblacion = $("#poblacion_i").val()
        moneda = $("#moneda_i").val()
        continente = $("#continente_i").val()
        if((id !="") || (nombre !="") || (capital !="") || (codigo_iso !="") || (poblacion !="") || (moneda !="") || (continente !="")){
           $.ajax({
                type: "POST",
                url: "../php/ingreso.php",
                data: {'id':id, 'nombre':nombre, 'capital':capital, 'codigo_iso':codigo_iso, 'poblacion':poblacion, 'moneda':moneda, 'continente':continente},
                success: function (retorno) {
                    if (retorno === id) {
                        alert("Se ingreso correctamente el pais")
                    } else {
                        alert("No se ingreso correctamente el pais")
                    }
                },
           }); 
        }
        else{
            alert("Por favor verifique que todos los campos esten llenos");
        }
    })  
});