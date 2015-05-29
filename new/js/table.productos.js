
/*
 * Editor client script for DB table productos
 * Created by http://editor.datatables.net/generator
 */

(function($){

$(document).ready(function() {
	var editor = new $.fn.dataTable.Editor( {
		"ajax": "php/table.productos.php",
		"table": "#productos",
		"fields": [
			{
				"label": "id",
				"name": "Id"
			},
			{
				"label": "producto",
				"name": "producto"
			},
			{
				"label": "precio",
				"name": "precio"
			},
			{
				"label": "descripcion",
				"name": "descripcion"
			}
		]
	} );

	$('#productos').DataTable( {
		"dom": "Tfrtip",
		"ajax": "php/table.productos.php",
		"columns": [
			{
				"data": "Id"
			},
			{
				"data": "producto"
			},
			{
				"data": "precio"
			},
			{
				"data": "descripcion"
			}
		],
		"tableTools": {
			"sRowSelect": "os",
			"aButtons": [
				{ "sExtends": "editor_create", "editor": editor },
				{ "sExtends": "editor_edit",   "editor": editor },
				{ "sExtends": "editor_remove", "editor": editor }
			]
		}
	} );
} );

}(jQuery));
