<div class="container">
    <div class="jumbotron">
        <h2>Estudiantes</h2>
        
    </div>
    <div class="container">
        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nombres</th>
                    <th>Apellido_P</th>
                    <th>Apellido_M</th>
                    <th>Sexo</th>
                    <th>F_nacimiento</th>
                    <th>Asignatura</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($query as $data): ?>
                    <tr>
                        <th><?php echo $data['id']; ?></th>
                        <th><?php echo $data['nombres']; ?></th>
                        <th><?php echo $data['apellidopaterno']; ?></th>
                        <th><?php echo $data['apellidomaterno']; ?></th>
                        <th><?php echo $data['sexo']; ?></th>
                        <th><?php echo $data['fechanacimiento']; ?></th>
                        <th><?php echo $data['asignatura']; ?></th>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
</div>