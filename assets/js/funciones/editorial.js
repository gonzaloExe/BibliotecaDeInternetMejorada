$(function(){

	// Lista de docente
	$.post( '../../view/funciones/editorial.php' ).done( function(respuesta)
	{
		$( '#editorial' ).html( respuesta );
	});
	
	
	// Lista de Ciudades
	$( '#editorial' ).change( function()
	{
		var el_continente = $(this).val();

	});


	
	
	

})
