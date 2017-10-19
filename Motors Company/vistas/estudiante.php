<div class="container">
    <div class="jumbotron">
        <h2>formulario registro</h2>

    </div>
    <div class="col-md-6 col-md-offset-3">
        <div class="form-horizontal" style="">
            <?php if($data['nombres']==""){ ?>
            <form action="index.php?m=get_datosE" method="post">
            <?php } ?>
            <?php if($data['nombres']!=""){ ?>
            <form action="index.php?m=get_datosE&id=<?php echo $data['nombres'];?>" method="post">
            <?php } ?>

                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_nombres">Nombres:</label>
                    <div class="col-sm-10">
                <input type="text" class="form-control" name="txt_nombres" value="<?php echo $data['nombres']; ?>">
                    </div>
                    
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_apellidopaterno">Apellido Paterno:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="txt_apellidopaterno" value="<?php echo $data['apellidopaterno']; ?>">
                    </div>
                    
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_apellidomaterno">Apellido Materno:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="txt_apellidomaterno" value="<?php echo $data['apellidomaterno']; ?>">
                    </div>
                    
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_sexo">sexo:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="txt_sexo" value="<?php echo $data['sexo']; ?>">
                    </div>
                    
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_fechanacimiento">Fecha Nacimiento:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="txt_fechanacimiento" value="<?php echo $data['fechanacimiento']; ?>">
                    </div>
                    
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_aisgnatura">Asignatura:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="txt_asignatura" value="<?php echo $data['asignatura']; ?>">
                    </div>
                    
                </div>
                <div class="form-group">
                    <div class="col-md-12 col-md-off-set-3">
                    <?php if($data['nombres']==""){ ?>
                        <input type="submit" class="btn btn-primary form-control" name="" value="registrar">
                    <?php }  ?>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
    
</div>