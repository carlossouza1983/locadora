		<div class="rows">	
                <div class="col-12">
                <div class="caixa">
                    <div class="p-2 py-1 bg-title text-light text-uppercase h4 mb-0 text-branco d-flex justify-content-space-between">
						<span class="d-flex center-middle"><i class="far fa-list-alt mr-1"></i> Lista de Titulos Alugados </span>
						<div>
							<a href="<?php echo URL_BASE . "aluga/create"?>" class="btn btn-verde mx-1 d-inline-block"><i class="fas fa-plus-circle"></i> Realizar Locação</a>
						
						</div>
					</div>
                        
					<form name="busca" action="" method="GET">
                        <div class="px-2 pt-2">	
							  <div class="mostraFiltro bg-padrao mt-2 p-2 radius-4">
							  <div class="rows">
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
                                       <th>Cliente</th>
                                       <th align="center" width="30%">Titulo</th>
                                       <th align="center" >Valor R$</th>
                                       <th align="center">Data</th>
                                       <th align="center">Devolução</th>
                                    </tr>
                            </thead>
                            <tbody>  
                            
                            
                               <?php foreach ($lista as $aluga ){
                                  
                                   ?>
                                                  
                             <tr>
								<td align="center"><?php echo $aluga->id_aluga ?></td>
                                <td align="center"><?php echo $aluga->nome ?></td>
                                <td align="center"><?php echo $aluga->titulo ?></td>
                                <td align="center"><?php echo $aluga->preco ?></td>
                                <td align="center"><?php echo $aluga->datae ?></td>
                                											
                                                           							
                                <td align="center"><a href="javascript:;" onclick="return excluir(this)" data-entidade ="aluga" data-id="<?php echo $aluga->id_aluga?>" class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i class="fas fa-trash-alt"></i> Devolução</a>                                </td>
                           
                             </tr> 
                             <?php }?>              						
                        </tbody>
                    </table>
								
                        </div>

            </div>
        </div>

        </div>