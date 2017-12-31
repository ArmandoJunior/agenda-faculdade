		<tr>
			<td>Nome</td>
			<td><input class="form-control" 
					   type="text" 
					   name="nome" 
					   value="<?=$contato->getNome() ?>" />
			</td>
		</tr>

		<tr>
			<td>Telefone Fixo</td>
			<td><input class="form-control" 
					   type="text" 
					   name="fixo" 
					   value="<?=$contato->getFixo() ?>" >
			</td>
		</tr>

		<tr>
			<td>Celular</td>
			<td><input class="form-control" 
					   type="text" 
					   name="celular" 
					   value="<?=$contato->getCelular() ?>" >
			</td>
		</tr>

		<tr>
			<td>E-mail</td>
			<td><input class="form-control" 
					   type="email" 
					   name="email" 
					   value="<?=$contato->getEmail() ?>" >
			</td>
		</tr>

		<tr>
			<td>Endereço</td>
			<td><textarea class="form-control" 
						  name="endereco"><?=$contato->getEndereco() ?> 
			</textarea></td>
		</tr>

		<tr>
			<td>Data de Nascimento</td>
			<td><input class="form-control" 
					   type="Data" 
					   name="nascimento" 
					   value="<?=$contato->inverteData2() ?>" >
			</td>
		</tr>

		<tr>
			<td>Categoria</td>
			<td>
				<select class="form-control" 
						name="id_categoria">


					<?php foreach ($categorias as $categoria): 
						$testeCategoria = $contato->getCategoria()->getId() == $categoria->getId();
						$selecao = $testeCategoria ? "selected='selected'":"";?>
						
						<option value="<?=$categoria->getId()?>" <?=$selecao ?>/>
							<?=$categoria->getNome() ?>
						</option> <br/>

					<?php endforeach ?>	
				</select>
			</td>
		</tr>