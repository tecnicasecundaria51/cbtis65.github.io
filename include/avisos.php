
    <div class="col-12 text-center">
        <?php if ($_SESSION['rol'] == 1 || $_SESSION['rol'] == 1) { ?>
            <a class="btn btn-danger col-3" href="../logout.php">
                <h1 class="">cerrar sesion</h1>
            </a>
        <?php } ?>
    </div>
        <!-- bg-success -->
        <div class="row m-auto col-11 bg-primary">
            <!-- bg-danger -->
            <h1 class=" fs-1 cbtis text-white h1">AVISOS</h1>
            <?php while ($row = mysqli_fetch_assoc($respuesta)) { ?>
                <div class="col-10 col-sm-6 col-md-4 col-lg-3 my-3 p-2 m-auto">
                    <!-- bg-dark -->
                    <div class="card card-r bg-red w-100 m-auto">
                        <h5 class="card-header text-light fs-3"><?= $row['title'] ?></h5>
                        <?php
                        $tipo = array("image/jpg", "image/jpeg", "image/gif", "image/png");
                                if (in_array($row['tipo_img'],$tipo)) { ?>

                                <img loading="lazy" src="data:<?= $row['tipo_img']; ?>;base64,<?php echo base64_encode($row['imgen']); ?>" class="img img-fluid " width="100%"  alt="...">
                
                                <?php } else { ?>
                                    
                                <img loading="lazy" src="img/perrito2.webp" class="img img-fluid" width="100%" alt=".arc">
                        
                                <?php } ?>
                        <hr>
                        <div class="card-body">
                            <p class="card-text text-light"><?= $row['contenido'] ?></p>
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <div class="row my-5 m-auto">
                                <a target="_blank" href="<?= $row['url'] ?>" class="btn btn-primary col-5 m-auto">Link</a>
                                <?php
                                $archivos = array("image/jpg", "image/jpeg", "image/gif", "image/png", "");
                                if (!in_array($row['tipo_img'],$archivos)) { ?>
                                    <a target="_blank" download="<?= $row['nombre_img'] ?>" href="data:<?= $row['tipo_img']; ?>;base64,<?php echo base64_encode($row['imgen']); ?>" class="btn btn-success col-5 m-auto">
                                        Descargar
                                    </a>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
