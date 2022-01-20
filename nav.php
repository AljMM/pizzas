<?php
if($rol=='empleador'){
    echo "<ul>
    <li><a href='index.php'>pagina principal</a></li>
    <li><a href='Registro de trabajo.php'>registrar trabajo</a></li>
    <li><a href='mis_proyecto.php'>Mis Proyectos</a></li>
    <li><a href='buscador.php'>Buscar trabajo</a></li>
    <li class='apartado'><a href='perfil.php'>perfil</a></li>
    </ul>";
}
else
{
    echo "<ul>
    <li><a href='index.php'>pagina principal</a></li>
    <li><a href='buscador.php'>Buscar trabajo</a></li>
    <li><a href='mis_solic.php'>Mis solicitudes</a></li>
    <li class='apartado'><a href='perfil.php'>perfil</a></li>
    </ul>";
} 
?>