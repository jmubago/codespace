

<div class="container mt-3">
    <div class="row ">
        <div class="col text-center">
            <h5>Tu información de Usuario</h5>
        </div>
    </div>
 <div class="container my-3">
    <div class="row">
    <?php while ($ver_usuarios = sqlsrv_fetch_array( $resultado_usuarios, SQLSRV_FETCH_ASSOC)){?>   
                        <div class="col-sm-12 col-md-6 col-lg-4 my-3 col-centered">
                            <div class="card" style="width: 18rem;">
                              <img class="card-img-top" src="<?php echo $root ?>media/fotoUsuarios/<?php echo $ver_usuarios["Foto"]?>" alt="<?php echo $ver_usuarios["Nombre"] . " " . $ver_usuarios["Apellido"]?>">
                              <div class="card-body">
                                <h5 class="card-title"><?php echo $ver_usuarios["Nombre"] . " " . $ver_usuarios["Apellido"] ?> </h5>
                                <p class="card-text"><?php echo $ver_usuarios["SobreMi"]?></p>
                              </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><strong>Empresa:</strong> <?php echo $ver_usuarios["Empresa"]?></li>
                                    <li class="list-group-item"><strong>Idioma:</strong> <?php echo $ver_usuarios["Idioma"]?></li>
                                    <li class="list-group-item"><strong>Coach:</strong> <?php echo $ver_usuarios["Coach"]?></li>
                                    <li class="list-group-item"><strong>Email:</strong> <?php echo $ver_usuarios["EmailContacto"]?></li>
                                    <li class="list-group-item"><strong>Telefono:</strong> <?php echo $ver_usuarios["Telefono"]?></li>
                                </ul>
                            </div>
                        </div>   
    <?php ;  }?>
        </div>    
    </div>   
     
</div>