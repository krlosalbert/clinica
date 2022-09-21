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
                <th>Número</th><th>Fecha</th><th>Hora</th>
            </tr>
            <?php
                while($fila=$result->fetch_object()){
            ?>
            <tr>
                <td><?php echo $fila->CitNumero;?></td>
                <td><?php echo $fila->CitFecha;?></td>
                <td><?php echo $fila->CitHora;?></td>
                <td><a href="#" onclick="confirmarCancelar(<?php echo $fila->CitNumero; ?>)">Ver</a></td>
            </tr>
            <?php
            }
            ?>
        </table>
        <?php
        }else {
        ?>
        <p>El paciente no tiene citas asignadas</p>
        <?php
        }
        ?>
</div>
<?php 
    require_once 'footer.php';
?>