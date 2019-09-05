function insertar()
{
    var formulario = $("#form_sucursal").serialize();

    $.ajax({
        url:"insertar.php",
        type:"post",
        data:formulario,
        success:function(respuesta){
			if(respuesta == 1){

				$("#form_sucursal")[0].reset();

				alert('Operación exitosa!');

			}else{
				alert('Error al insertar. Revise.');
			}
		}
    });

}