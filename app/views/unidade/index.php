		<div class="rows">	
                <div class="col-12">
                <div class="caixa">
                    <div class="p-2 py-1 bg-title text-light text-uppercase h4 mb-0 text-branco d-flex justify-content-space-between">
						<span class="d-flex center-middle"><i class="far fa-list-alt mr-1"></i> Lista Localização Titulo </span>
						<div>
							<a href="<?php echo URL_BASE . "unidade/create"?>" class="btn btn-verde mx-1 d-inline-block"><i class="fas fa-plus-circle"></i> Adicionar novo</a>
						
						</div>
					</div>
                        
					<form name="busca" action="" method="GET">
                        <div class="px-2 pt-2">	
							  <div class="mostraFiltro bg-padrao mt-2 p-2 radius-4">
							  <div class="rows">
                                        <div class="col-8">	
                                                <label class="text-label d-block text-branco">Nome </label>
                                                <input type="text" name="unidade" value="" class="form-campo">
                                        </div>
                                        <div class="col-2">	
                                             <label class="text-label d-block text-branco">Ativo </label>
                                            <select name="ativo" class="form-campo">
                                                <option value="S">Sim</option>                                                 
                                                <option value="N">Não</option>                                                 
                                            </select>
                                        </div>
                                        <div class="col-2 mt-1 pt-1">
                                                <input type="submit" value="Pesquisar" class="btn btn-roxo text-uppercase">
                                        </div>
                                </div>
                                </div>
                        </div>
                    </form>
                </div>
                </div>

		<div class="col-12">
			<div class="px-2">			
				<div class="p-1">
					<?php $this->verMsg();?>
				</div>
               <div class="tabela-responsiva pb-4 mt-3">
                    <table cellpadding="0" cellspacing="0"  width="100%" id="dataTable">
                            <thead>
                                    <tr>
                                       <th align="center">Id</th>
                                       <th align="center" width="50%">Nome</th>
                                       <th align="center">Editar</th>
                                       <th align="center">Excluir</th>
                                    </tr>
                            </thead>
                            <tbody>  
                               <?php foreach ($lista as $unidade){?>                                    
                             <tr>
								<td align="center"><?php echo $unidade->id_unidade?></td>
                                <td align="left"><?php echo $unidade->unidade?></td>
                                											
                                <td align="center"><a href="<?php echo URL_BASE ."unidade/edit/" .$unidade->id_unidade?>" class="d-inline-block btn btn-outline-roxo btn-pequeno"><i class="fas fa-edit"></i> Editar</a>                              </td>									
                                <td align="center"><a href="javascript:;" onclick="return excluir(this)" data-entidade ="unidade" data-id="<?php echo $unidade->id_unidade?>" class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i class="fas fa-trash-alt"></i> Excluir</a>                                </td>
                           
                             </tr> 
                             <?php }?>              						
                        </tbody>
                    </table>
								
                        </div>

            </div>
        </div>

        </div>