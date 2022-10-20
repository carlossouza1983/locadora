<div class="p-2 bg-title text-light text-uppercase h5 mb-0 text-branco d-flex justify-content-space-between">
			<span><i class="fas fa-plus-circle"></i> Cadastrar Titulo/Filme</span>
			<a href="<?php echo URL_BASE . "produto"?>" class="btn btn-verde btn-pequeno"><i class="fas fa-arrow-left"></i>  Voltar</a>
		</div> 
		<div class="p-1">
		<?php 
		  $this->verMsg();
		  $this->verErro();
		  $imagem = $produto->imagem ? $produto->imagem :"semproduto.png" ;
		?>
			</div>		
	<form action="<?php echo URL_BASE . "produto/salvar"?>" method="Post" enctype="multipart/form-data">
		<div class="rows p-4"> 
			<div class="col-4">
				<div class="py-1 px-2 mt-3 border text-center  campo-upload">
					<label for="arquivo">
						<img src="<?php echo URL_IMAGEM .$imagem?>" class="img-fluido opaco" id= "imgUp"> 
						<span>Inserir produto</span>
					</label>
						<input type="file" name="arquivo" id="arquivo" onchange="pegaArquivo(this.files)"> 
				</div>
            </div>
            <div class="col-8 px-2">
               <div class="rows">
                    <div class="col-8 mb-3">
                            <label class="text-label">Nome do Titulo/Filme</label>
                            <input type="text" value="<?php echo isset ($produto->titulo) ? $produto->titulo: null ?>" name="titulo" placeholder="Digite aqui..." class="form-campo">
                    </div>
                    <div class="col-4 mb-3">
                            <label class="text-label">Código Barra</label>
                            <input type="text" name="codigo_barra" value="<?php echo isset ($produto->codigo_barra) ? $produto->codigo_barra: null ?>" placeholder="Digite aqui..." class="form-campo">
                    </div>
                    <div class="col-4 mb-3">
                            <label class="text-label">Gênero</label>
                            <select class="form-campo" name="id_categoria">
                            <option value="" >Selecione</option>
								<?php 
								foreach ($categorias as $categoria){
								    $selecionado = ($categoria->id_categoria == $produto->id_categoria) ? "selected" :"";
								    echo "<option value='$categoria->id_categoria'$selecionado>$categoria->categoria</option>";
								}?> 
                            </select>
                    </div>                                
                    <div class="col-4 mb-3">
                            <label class="text-label">Localização</label>
                            <select class="form-campo" name="id_unidade">
                            <option value="" >Selecione</option>
							<?php 
								foreach ($unidades as $unidade){
								    $selecionado =($unidade->id_unidade == $produto->id_unidade)? "selected" :"";
								    echo "<option value='$unidade->id_unidade'$selecionado>$unidade->unidade</option>";
								}?> 						  
							</select>
                    </div>
                    <div class="col-4 mb-3">
                            <label class="text-label">Preço/Locação</label>
                            <input type="text" name="preco" value="<?php echo isset ($produto->preco) ? $produto->preco: null ?>" placeholder="Digite aqui..." class="mascara-dinheiro form-campo">
                    
                    </div>
                    
                    <div class="col-4 mb-3">
                            <label class="text-label">Promoção</label>
                            <select class="form-campo" name="eh_promocao">
                                    <option value="" >Selecione</option>
                                    <option value="S"<?php echo ($produto->eh_promocao=="S") ? "selected" : ""?>>Sim</option>  
                                    <option value="N"<?php echo ($produto->eh_promocao=="N") ? "selected" : ""?>>Não</option> 
                            </select>
                    </div>
                    <div class="col-4 mb-3">
                            <label class="text-label">Lançamento</label>
                            <select class="form-campo" name="eh_lancamento">
                                    <option value="" >Selecione</option>
                                    <option value="S"<?php echo ($produto->eh_lancamento=="S") ? "selected" : ""?>>Sim</option>  
                                    <option value="N"<?php echo ($produto->eh_lancamento=="N") ? "selected" : ""?>>Não</option>
                            </select>
                    </div>
					<div class="col-4 mb-3">
                            <label class="text-label">Estoque</label>
                            <input type="text" name="estoque_inicial" value="<?php echo isset ($produto->estoque_inicial) ? $produto->estoque_inicial: null ?>" placeholder="Digite aqui..." class="form-campo">
                    </div>
                    <div class= "col-12 mb-3">
                <label class="text-label">Sinopse</label>
                
                <input type= "text" name="sinopse" value="<?php echo isset ($produto->sinopse) ? $produto->sinopse: null ?>"placeholder="Digite a sinopse do filme"   rows=5 class = "form-campo">
                </div>
                   <div class="col-12 mt-2">
                        <input type="hidden" name="id_produto" value="<?php echo isset ($produto->id_produto) ? $produto->id_produto: null ?>">
                        <input type="submit" value="Salvar alterações" class="btn btn-laranja btn-medio d-block m-auto">
                </div>	
            </div>
</div>
</div>