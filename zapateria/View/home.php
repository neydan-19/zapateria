<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Resources/css/materialize.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col m12">
				<div class="card orange white-text center-align">
					<h2>Lista de Zapatos</h2>
				</div>
			</div>
		</div>
	<div class="row">
		<div class="col m12">
			<table class="table-responsive  z-depth-3">
				<tr class="black">
					<th class="white-text center-align">Id</th>
					<th class="white-text center-align">Precio</th>
					<th class="white-text center-align">Color</th>
					<th class="white-text center-align">Estilo</th>
					<th class="white-text center-align">Talla</th>
					<th class="white-text center-align">Genero</th>
					<th class="white-text center-align">Cantidad</th>
					<th class="white-text center-align">Acciones</th>
				</tr>
				<?php foreach ($this->MODEL->listar() as $k) : ?>
				<tr>
					<td class="center-align"><?php echo $k->id_zapato; ?></td>
					<td class="center-align"><?php echo $k->precio; ?></td>
					<td class="center-align"><?php echo $k->color; ?></td>
					<td class="center-align"><?php echo $k->id_estilo; ?></td>	
					<td class="center-align"><?php echo $k->id_talla; ?></td>
					<td class="center-align"><?php echo $k->id_genero; ?></td>
					<td class="center-align"><?php echo $k->cantidad; ?></td>
					<td class="center-align">
                        <a href="show.php?id_zapato=<?= $k->id_zapato?>" class="btn btn-primary">Ver</a>
                        <a href="edit.php?id=<?= $row[0]?>" class="btn btn-success">Modificar</a>
                        <!-- Button trigger modal -->
                        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#id<?=$row[0]?>">Eliminar</a>

                        <!-- Modal -->
                        <div class="modal fade" id="id<?=$row[0]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el registro?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Una vez eliminado no se podra recuperar el registro
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
                                    <a href="delete.php?id=<?= $row[0]?>" class="btn btn-danger">Eliminar</a>
                                    <!-- <button type="button" >Eliminar</button> -->
                                </div>
                                </div>
                            </div>
                        </div>
                    </td>
				</tr>	

			<?php endforeach; ?>
			</table>	
		
		</div>
	</div>

	</div>

</body>
</html>