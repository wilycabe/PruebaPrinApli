get_datos();
function get_datos(alumnos)
{
	$.ajax({
		url : 'consulta.php',
		type : 'POST',
		dataType : 'html',
		data : { alumnos: alumnos },
		})

	.done(function(resultado){
		$("#resultado").html(resultado);
	})
}

$(document).on('keyup', '#busqueda', function()
{
	var buscar=$(this).val();
	if (buscar!="")
	{
		get_datos(buscar);
	}
	else
		{
			get_datos();
		}
});
