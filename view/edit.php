<?php require "layout/header.php";
if(empty($_SESSION["id"])) {
	header("location: ./index.php");
}
?>
<div class="container-xl">
<h1>Editar Producto</h1>
<hr>
<form action="">
    <?php foreach ($dato as $value): ?>
    <?php  foreach ($value as $v ): ?>
    <label for="">Nombre</label> <br>
    <input type="text" name="nombre" value="<?php echo $v['nombre'] ?>"><br>
    <label for="">Precio</label><br>
    <input type="text" name="precio" value="<?php echo $v['precio'] ?>"><br>
    <input type="hidden" name="id" value="<?php echo $v['id'] ?>">
    <input type="submit" name="btn" class="btn btn-warning my-2" value="Actualizar">
    <?php endforeach ?>
    <?php endforeach ?>
    <input type="hidden" name="m" value="update">
</form>
</div>
<?php require "layout/footer.php" ?>