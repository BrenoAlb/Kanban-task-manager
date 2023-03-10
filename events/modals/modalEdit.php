<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form class="form-horizontal" method="POST" action="events/actions/eventEdit.php" onsubmit="return validaForm(this);">
				<div class="modal-header d-flex justify-content-between">
					<h4 class="modal-title" id="myModalLabel">Evento</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>

				<div class="modal-body">
					<div class="form-group">
						<label for="title" class="col-sm-4 control-label">Titulo</label>
						<div class="col-sm-12">
							<input type="text" name="title" class="form-control" id="title" placeholder="Title" required>
						</div>
					</div>

					<div class="form-group">
						<label for="description" class="col-sm-4 control-label">Descrição</label>
						<div class="col-sm-12">
							<textarea type="text" name="description" class="form-control" id="description" placeholder="Description"></textarea>
						</div>
					</div>


					<div class="form-group">
						<label for="colour" class="col-sm-4 control-label">Cor</label>
						<div class="col-sm-12">
						<select name="colour" class="form-control" id="colour">
							<option value="">Escolha uma cor</option>
							<option style="color:#0275d8" value="#0275d8">&#9724; Azul</option>
							<option style="color:#5bc0de" value="#5bc0de">&#9724; Azul claro</option>
							<option style="color:#5cb85c" value="#5cb85c">&#9724; Verde</option>						  
							<option style="color:#f0ad4e" value="#f0ad4e">&#9724; Laranja</option>
							<option style="color:#d9534f" value="#d9534f">&#9724; Vermelho</option>
							<option style="color:#292b2c" value="#292b2c">&#9724; Preto</option>						  
							</select>
						</div>
				  </div>

					<div class="form-group">
						<label for="start_date" class="col-sm-4 control-label">Fata de início</label>
						<div class="col-sm-12">
						<input type="text" name="start_date" class="form-control" id="start_date" required>
						</div>
					</div>

					<div class="form-group">
						<label for="end_date" class="col-sm-4 control-label">Data final</label>
						<div class="col-sm-12">
						<input type="text" name="end_date" class="form-control" id="end_date" required>
						</div>
					</div>
						
					<!-- Delete the event -->
					<div class="form-group"> 
						<div class="col-sm-offset-2 col-sm-12">
							<div class="checkbox">
								<label class="text-danger"><input type="checkbox" class="mr-2" name="delete">Deletar</label>
							</div>
						</div>
					</div>
					
					<input type="hidden" name="id_event" class="form-control" id="id_event">
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					<button type="submit" class="btn btn-info">Salvar</button>
				</div>
			</form>
		</div>
	</div>
</div>