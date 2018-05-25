// Call the dataTables jQuery plugin
$(document).ready(function() {
	$('#TablaPersonas').DataTable({
		"language": {
			"search": "Buscar",
			"lengthMenu": "Mostrar _MENU_ Registros por Pagina",
			"zeroRecords": "No se Encontró ningun dato",
			"paginate": {"previous": "Anterior","next": "Siguiente"},
			"info": "Mostrando Pagina _PAGE_ De _PAGES_",
			"infoEmpty": "La Tabla de Encuentra Vacia",
			"infoFiltered": "(filtrado de _MAX_ Registros Totales)"
		}
	});
});
