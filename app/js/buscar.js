get_datos();
function get_datos(paises)
{
	$.ajax({
		type : 'POST',
		url : '../php/buscar.php',
		data : { id: id }
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
