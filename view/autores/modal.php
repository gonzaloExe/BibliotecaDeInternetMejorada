

<div class="modal fade" id="edit_<?php echo $d->id_au; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              
            </div>
			
            <div class="modal-body">
			<div class="container-fluid">
			
			<form method="POST" action="editar.php?id=<?php echo $d->id_au; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Nombre:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nomau" value="<?php echo $d->nomau; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Apellido:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="apeau" value="<?php echo $d->apeau; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Alias:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="alias" value="<?php echo $d->alias; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Bibliografia:</label>
					</div>
					<div class="col-sm-10">
						
						<textarea name="biblio" value="<?php echo $d->biblio; ?>"  class="form-control" rows="10" cols="50"><?php echo $d->biblio; ?></textarea>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Nacimiento:</label>
					</div>
					<div class="col-sm-10">
						
						<input type="date" class="form-control"  name="fecna" value="<?php echo $d->fecna; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Correo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="email" value="<?php echo $d->email; ?>">
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
<div class="modal fade" id="delete_<?php echo $d->id_au; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de Borrar el registro?</p>
				<h2 class="text-center"><?php echo $d->nomau.' '; ?> </h2>
				
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fas fa-ban"></span>Cancel</button>
				
                <a href="borrar.php?id=<?php echo $d->id_au; ?>" class="btn btn-success"><span class="fas fa-trash"></span>Eliminar Ahora</a>
            </div>

        </div>
    </div>
</div>