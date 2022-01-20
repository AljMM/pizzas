<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="icon" href="img/logo1.jfif">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles/custom.css">
<title> Administrador </title>
</head>
<body style="background-image:url('img/a.png')">
    
    <div id="page">
    <div id="header"> Usuarios </div>
    <div id="content">
    <center>
      <h1> Administrador </h1>
    </center>
    </div>
</div>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Listado de  <b>Usuarios</b></h2></div>
                    <div class="col-sm-4">
                        <a href="create.php" class="btn btn-info add-new"><i class="fa fa-plus"></i> Agregar cliente</a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id Usuario</th>
                        <th>Nombres</th>
                        <th>Teléfono</th>
                        <th>Dirección</th>
						<th>E-mail</th>
                        <th colspan="2">Acciones</th> 
                    </tr>
                </thead>
				<?php 
				include ('database.php');
				$clientes = new Database();
				$listado=$clientes->read();
				?>
                <tbody >
				<?php 
					while ($row=mysqli_fetch_object($listado)){
						$id=$row->idusuario;
						$nombres=$row->nombre;
						$telefono=$row->telefono;
						$direccion=$row->direccion;
						$email=$row->correo;
				?>
					<tr>
                        <td><?php echo $id;?></td>
                        <td><?php echo $nombres;?></td>
                        <td><?php echo $telefono;?></td>
                        <td><?php echo $direccion;?></td>
						<td><?php echo $email;?></td>
                        <td>
						    <a href="update.php?id=<?php echo $id;?>" class="edit" title="Editar" data-toggle="tooltip"><i class="buttom">Editar</i> </a>
                        </td>
                        <td>
                            <a href="delete.php?id=<?php echo $id;?>" class="delete" title="Eliminar" data-toggle="tooltip"><i class="buttom">Eliminar</i></a>
                        </td>
                    </tr>	
				<?php
					}
				?> 
               <fieldset class="co">
                <a class="boton2" href="crud_traba.php">crud trabajos</a>
                </fieldset>   
                <br></br>
                </tbody>
            </table>
        </div>
    </div>     
</body>
</html>                            