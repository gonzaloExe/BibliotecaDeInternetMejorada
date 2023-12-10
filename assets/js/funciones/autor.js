$(function(){

	// Lista de docente
	$.post( '../../view/funciones/autor.php' ).done( function(respuesta)
	{
		$( '#autor' ).html( respuesta );
	});
	
	
	// Lista de Ciudades
	$( '#autor' ).change( function()
	{
		var el_continente = $(this).val();

	});


	
	
	

})
