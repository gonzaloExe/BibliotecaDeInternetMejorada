

<div class="modal fade" id="edit_<?php echo $d->id_libro; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              
            </div>
			
            <div class="modal-body">
			<div class="container-fluid">
			
			<form method="POST" action="editar.php?id=<?php echo $d->id_libro; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Nombre:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nomli" value="<?php echo $d->nomli; ?>">
					</div>
				</div>

				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Lugar:</label>
					</div>
					<div class="col-sm-10">
						<select class="form-control" name="lugar">
							<option value="<?php echo $d->lugar; ?>" selected=""><?php echo $d->lugar; ?></option>
							<option  value="Lima">Lima</option>
							<option  value="Piura">Piura</option>
					</select>
					</div>
				</div>


				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Año de edicion:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="anedi" value="<?php echo $d->anedi; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Numero de paginas:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="numpa" value="<?php echo $d->numpa; ?>">
					</div>
				</div>

				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Idioma:</label>
					</div>
					<div class="col-sm-10">
						<select class="form-control" name="idioma">
							<option value="<?php echo $d->idioma; ?>" selected=""><?php echo $d->idioma; ?></option>
							<option  value="Castellano">Castellano</option>
							<option  value="English">English</option>
					</select>
					</div>
				</div>


				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Sinópsis:</label>
					</div>
					<div class="col-sm-10">
						
						<textarea name="sinop" value="<?php echo $d->sinop; ?>"  class="form-control" rows="10" cols="50"><?php echo $d->sinop; ?></textarea>
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
<div class="modal fade" id="delete_<?php echo $d->id_libro; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de Borrar el registro?</p>
				<h2 class="text-center"><?php echo $d->nomli.' '; ?> </h2>
				
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fas fa-ban"></span>Cancel</button>
				
                <a href="borrar.php?id=<?php echo $d->id_libro; ?>" class="btn btn-success"><span class="fas fa-trash"></span>Eliminar Ahora</a>
            </div>

        </div>
    </div>
</div>