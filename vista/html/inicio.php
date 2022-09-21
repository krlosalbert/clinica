<?php 
    require_once 'head.php';
?>
<ul id="menu">
    <li class="activa"><a href="index.php">inicio</a> </li>
    <li><a href="index.php?accion=asignar">Asignar</a> </li>
    <li><a href="index.php?accion=consultar">Consultar Cita</a> </li>
    <li><a href="index.php?accion=cancelar">Cancelar Cita</a> </li>
</ul>
<div id="contenido">
    <h2>Información General</h2>
    <p>El Sistema de Gestión Odontológica permite administrar la información de los
        pacientes,
        tratamientos y citas a través de una interfaz web.
    </p>
    <p>El sistema cuenta con las siguientes secciones:
        <ul>
            <li>Asignar cita</li>
            <li>Consultar cita</li>
            <li>Cancelar cita</li>
        </ul>
    </p>
</div>
<?php 
    require_once 'footer.php';
?>