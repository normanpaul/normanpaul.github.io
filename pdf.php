<?php require_once('html2pdf/html2pdf.class.php');
$contenido="<h2>FORMULARIO CONTACTO</h2>
			<hr>
			<h4> CONTACTO EMPRESA </h4><ul>";
			if(isset($_POST["nombre"]))
			{
				$contenido.="<li>Nombre:$_POST[nombre]</li>";
			}
			
			if(isset($_POST["cliente"]))
			{
				$contenido.="<li>Numero de cliente:$_POST[cliente]</li>";
			}
			
			if(isset($_POST["correo"]))
			{
				$contenido.="<li>Correo:$_POST[correo]</li>";
			}
			
			if(isset($_POST["telefono"]))
			{
				$contenido.="<li>Telefono:$_POST[telefono]</li>";
			}
			if(isset($_POST["ciudad"]))
			{
				$contenido.="<li>Ciudad:$_POST[ciudad]</li>";
			}
			if(isset($_POST["comen"]))
			{
				$contenido.="<li>Comentarios:$_POST[comen]</li>";
			}
			
			$contenido.="</ul><hr>
			
			<ul>";
			
			$contenido.="</ul>";

$html2pdf=new HTML2PDF('P','A4','es');
$html2pdf->WriteHTML($contenido);
$html2pdf->Output('formulario.pdf');

?>