<?php 
    require_once 'head.php';
?>
<ul id="menu">
    <li><a href="index.php">inicio</a> </li>
    <li><a href="index.php?accion=asignar">Asignar</a> </li>
    <li class="activa"><a href="index.php?accion=consultar">Consultar Cita</a> </li>
    <li><a href="index.php?accion=cancelar">Cancelar Cita</a> </li>
</ul>
<div id="contenido">
        <?php
            if($result->num_rows > 0){
        ?>
        <table>
            <tr>
                <th>Documento</th><th>Nombre Completo</th><th>Sexo</th>
            </tr>
            <?php
                while($fila=$result->fetch_object()){
            ?>
            <tr>
                <td><?php echo $fila->PacIdentificacion;?></td>
                <td><?php echo $fila->PacNombres . " ". $fila->PacApellidos;?></td>
                <td><?php echo $fila->PacSexo;?></td>
                <td>Ver</td>
            </tr>
            <?php
                }
            ?>
        </table>
        <?php
            }else {
        ?>
        <p>El paciente no existe en la base de datos.</p>
        <input type="button" name="ingPaciente" id="ingPaciente" value="IngresarPaciente" onclik="ingPaciente()">
        <?php
            }
        ?>
</div>
<?php 
    require_once 'footer.php';
?>