<div>
        <div class="container col-12 text-center my-5">
            <!-- bg-success -->
            <div class="row m-auto w-100  A-E">
                <!-- bg-danger -->
                <h1 class="h1 fs-1 cbtis text-white">EVENTOS</h1>
                <?php while ($row = mysqli_fetch_assoc($res)) { ?>
                    <div class="col-sm-11 col-md-11 col-lg-3 my-3 p-2 m-auto">
                        <!-- bg-dark -->
                        <div class="card card-r w-100 m-auto">
                            <h5 class="card-header text-light fs-3"><?= $row['title'] ?></h5>
                            <?php
                        $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
                                if (in_array($row['tipo_img'],$permitidos)) { ?>

                                <img loading="lazy" src="data:<?= $row['tipo_img']; ?>;base64,<?php echo base64_encode($row['imgen']); ?>" class="img img-fluid " width="100%"  alt="...">
                
                                <?php } else { ?>
                                    
                                <img loading="lazy" src="img/perrito2.webp" class="img img-fluid" width="100%" alt=".arc">
                        
                                <?php } ?>
                            <hr>
                            <div class="card-body">
                                <p class="card-text text-light"><?= $row['contenido'] ?></p>
                                <div class="row my-5 m-auto">
                                    <a target="_blank" href="<?= $row['url'] ?>" class="btn btn-outline-danger col-5 m-auto">Link</a>
                                    <?php
                                if (!in_array($row['tipo_img'],$permitidos)) { ?>
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
        </div>
    </div>