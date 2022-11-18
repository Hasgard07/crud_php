<?php require "layout/header.php";
if(empty($_SESSION["id"])) {
	header("location: ./index.php");
}
?>
<div class="container-xl">
    <h1>Nuevo Producto</h1>
    <hr>
    <form action="">
        <label for="">Nombre</label> <br>
        <input type="text" name="nombre"><br>
        <label for="">Precio</label><br>
        <input type="text" name="precio"><br>
        <input type="submit" class="btn btn-success my-2" name="btn">
        <input type="hidden" name="m" value="guardar">
    </form>
</div>
<?php require "layout/footer.php" ?>