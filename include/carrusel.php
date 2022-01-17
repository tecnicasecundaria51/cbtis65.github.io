<?php 
require_once 'views/funcion.php';
session_start();
session_regenerate_id(true);
error_reporting(0);


$crud = new CRUD();

$conexion = Conexion::ConectarBD();

$slider = $crud->mostrar_slider();

?>

<div id="carousel1" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
  <?php while ($row = mysqli_fetch_assoc($slider)) { ?>

    <div class="carousel-item <?= $row['estado']?>">
      <img loading="lazy" src="data:<?= $row['tipo_img']; ?>;base64,<?php echo base64_encode($row['imagen']); ?>" class="d-block" width="100%" height="450px" alt="...">

    </div>
    <?php }?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>