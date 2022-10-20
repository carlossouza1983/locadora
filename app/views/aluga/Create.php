<div class="p-2 bg-title text-light text-uppercase h5 mb-0 text-branco d-flex justify-content-space-between">
<span><i class="fas fa-plus-circle"></i> Realizar Locação do Titulo</span>
<a href="<?php echo URL_BASE ."aluga"?>" class="btn btn-verde btn-pequeno"><i class="fas fa-arrow-left"></i>  Voltar</a>
</div>

<div class="p-1">
<?php 
$this-> verMsg();
$this-> verErro();
?>
</div>
<form action="<?php echo URL_BASE ."aluga/salvar"?>" method="Post">
<div class="col-6 d-block m-auto rows px-5 py-">
<div class="border radius-4 mt-5 px-4">
<div class="col-12 mb-3 mt-5">
 							<label class="text-label">Nome Cliente</label>
                            <select class="form-campo" name="id_contato">
                            <option value="" >Selecione</option>
								<?php 
								foreach ($contatos as $contato){
								    $selecionado = ($contato->id_contato == $aluga->id_contato) ? "selected" :"";
								    echo "<option value='$contato->id_contato'$selecionado>$contato->nome</option>";
								}?> 
                            </select>
                    </div>                  
							<div class="col-12 mb-3">
                            <label class="text-label">Nome Titulo</label>
                            <select class="form-campo" name="id_produto">
                            <option value="" >Selecione</option>
								<?php 
								foreach ($produtos as $produto){
								    $selecionado = ($produto->id_produto == $aluga->id_produto) ? "selected" :"";
								    echo "<option value='$produto->id_produto'$selecionado>$produto->titulo</option>";
								}?> 
                            </select>
               
                    
                </div>    
				<div class="col-6 mb-3">
						<label class="text-label">Data Locação</label>	
						<input type="date" name="datae" value="<?php echo ($aluga->datae) ? $aluga->datae : null ?>" placeholder="Digite aqui..." class="form-campo">
				</div>	
				<div class="col-6 mb-3">
						<label class="text-label">Data Devolução</label>	
						<input type="date" name="datad"  value="<?php echo ($aluga->datad) ? $aluga->datad : null ?>" placeholder="Digite aqui..." class="form-campo ">
				
                    </div>       
                               
<div class="col-12 mt-3 mb-5">
<input type="hidden" name="id_aluga" value="<?php echo isset($aluga->id_aluga) ?$unidade->id_aluga: null?>">
<input type="submit"  value="Locar" class="btn btn-laranja d-block m-auto">
</div>
</div>
</form>