<?php
/*if(empty($_SESSION["id"])) {
	header("location: ./index.php");
}*/
?>
<?php require "layout/header.php" ?>
<div class="container-xl">
	<div class="py-4">
		<a class="btn btn-primary active" aria-current="page" href="producto.php?m=nuevo">Nuevo Producto</a>
	</div>
	<table class="table table-dark table-striped">
		<tr>
			<td>Id</td>
			<td>Nombre</td>
			<td>Precio</td>
			<td>Acción</td>
		</tr>
		<?php 
			if(!empty($dato)){
				foreach ($dato as $key => $value)
					foreach ($value as $va ):
						echo "<tr><td>".$va['id']."</td><td>".$va['nombre']."</td><td>$ ".$va['precio']."</td>";
						echo "<td><a class='btn btn-warning'href='producto.php?m=editar&id=".$va['id']."'>Actualizar</a> <a class='btn btn-danger' href='producto.php?m=eliminar&id=".$va['id']."'>Eliminar</a></td>";
						echo "</tr>";
					endforeach;
			}
			?>
	</table>
</div>
<?php require "layout/footer.php" ?>