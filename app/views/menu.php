</div>	<div class="col menu-lateral position-relative">

<nav class="menuprincipal" id="principal">				
					<ul class="menu-ul icones">
						<li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
						<li><a href="#menu_cadastro"><i class="icon fas fa-file"></i> Cadastros <span>+</span></a></li>
						<li><a href="#menu_movimentacao"><i class="icon fas fa-cubes"></i> Movimento <span>+</span></a></li>
						
					</ul>
</nav>

<!-- MENU CADASTRO -->
<nav class="menuprincipal" id="menu_cadastro">
	<ul class="menu-lista">
		<li class="icones"><a href="" title="Recolher menu"><i class="fas fa-arrow-left ativo"></i></a></li>
		<h1 class="tt px-2"><b><i class="far fa-fw fa-file"></i> Cadastros</b></h1>
			<div id="accordion" >
				  <h3>Gênero</h3>
					<ul>
						<li><a href="<?php echo URL_BASE ."categoria"?>">Lista todos</a></li>
						<li><a href="<?php echo URL_BASE ."categoria/create"?>"> Cadastrar novo</a></li>							
					</ul>
				  <h3>Localização</h3>
					<ul>
						<li><a href="<?php echo URL_BASE ."unidade"?>">Lista todos</a></li>
						<li><a href="<?php echo URL_BASE ."unidade/create"?>"> Cadastrar novo</a></li>					
					</ul>
				  <h3>Titulos</h3>
					<ul>
						<li><a href="<?php echo URL_BASE ."produto"?>">Lista todos</a></li>
						<li><a href="<?php echo URL_BASE ."produto/create"?>"> Cadastrar novo</a></li>							
					</ul>
				
				  <h3>Pessoas</h3>
					<ul>
					<li><a href="<?php echo URL_BASE ."contato"?>">Lista todos</a></li>
						<li><a href="<?php echo URL_BASE ."contato/create"?>"> Cadastrar novo</a></li>				
					</ul>
			
			</div>
	</ul>
</nav>

<!-- MENU MOVIMENTO -->
<nav class="menuprincipal" id="menu_movimentacao">
	<ul class="menu-lista">
		<li class="icones"><a href="" title="Recolher menu"><i class="fas fa-arrow-left ativo"></i></a></li>
		<h1 class="tt px-2"><b><i class="fas fa-cubes"></i> Locações</b></h1>
		<li><a href="<?php echo URL_BASE ."aluga"?>">Alugar Titulo</a></li>
		
		
	</ul>
</nav>

</div>
