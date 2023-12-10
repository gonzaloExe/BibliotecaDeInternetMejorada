<div class="modal fade" id="edit_<?php echo $d->id_cate; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              
            </div>
			
            <div class="modal-body">
			<div class="container-fluid">
			
			<form method="POST" action="editar.php?id=<?php echo $d->id_cate; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Nombre:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nomcate" value="<?php echo $d->nomcate; ?>">
					</div>
				</div>
				
            </div> 
			</div>
			
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fas fa-ban"></span> Cancel</button>
                <button type="submit" name="editar" class="btn btn-success"><span class="fas fa-check"></span> Actualizar Ahora</a>
			</form>
            </div>

        </div>
    </div>
</div>


<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $d->id_cate; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de Borrar el registro?</p>
				<h2 class="text-center"><?php echo $d->nomcate.' '; ?> </h2>
				
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fas fa-ban"></span>Cancel</button>
				
                <a href="borrar.php?id=<?php echo $d->id_cate; ?>" class="btn btn-success"><span class="fas fa-trash"></span>Eliminar Ahora</a>
            </div>

        </div>
    </div>
</div>

<!-- IMAGE -->

<div class="modal fade" id="file_<?php echo $d->id_cate; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              
            </div>
			
            <div class="modal-body">
			<div class="container-fluid">
			
			<form method="POST" enctype="multipart/form-data" action="img.php?id=<?php echo $d->id_cate; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Foto:</label>
					</div>
					<div class="col-12 col-md-9">
						<img src="../../assets/img/imagenes/<?php echo $d->foto; ?>" alt="" style=""width="190px" height="200px"><p style="margin-left:60px;">Antigua</p>

			<input type="file" class="form-control" name="foto" id="imgInp" maxlength="256" placeholder="Imagen">
			<input type="hidden" class="form-control" name="imagenactual" id="imagenactual">
			<img src="" width="150px" height="120px" id="blah">
						<br />
						
						
						</div>
				</div>
				
            </div> 
			</div>
			
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fas fa-ban"></span> Cancel</button>
                <button type="submit" name="editar" class="btn btn-success"><span class="fas fa-check"></span> Actualizar Ahora</a>
			</form>
            </div>

        </div>
    </div>
</div>