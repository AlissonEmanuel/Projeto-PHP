
<main class="container">
	<form action="busca" method="GET">
		<input type="text" name="busca" placeholder="Busca">
		<button class="btn indigo">Pesquisar</button>
	</form>
	
	
	<h2>Lista de Produtos</h2>
	
	<table>
		<thead>
			<tr>
				<th>Titulo</th>
				<th>Descrição</th>
				<th>R$</th>
				<th>Ação</th>

			</tr>
		</thead>

		<tbody>
			<?php foreach($produtos as $produto): ?>
				<tr>
					<td><?php echo $produto['titulo']?></td>
					<td><?php echo $produto['descricao']?></td>
					<td> <?php echo "R$".number_format($produto['valor'],2,",",".")?> </td>
					
					<td> 
						<a class ="btn indigo lighten-4" href="/produto/editar?id=<?php echo $produto['id'] ?>">Editar</a>
						<a class ="btn indigo lighten-4" href="/produto/deletar?id=<?php echo $produto['id'] ?>">Deletar</a>

					 </td>

				</tr>
			<?php endforeach; ?>


		</tbody>
	</table>

	
	<?php if(isset($editando)): ?>
		
		<h2>Editando Produto</h2>

	<?php else: ?>
		
		<h2>Adicionar Produto</h2>

	<?php endif; ?>
	

	

	<?php if(isset($msg)):	?>
		<p><?php echo $msg ?></p>

	<?php endif; ?>

	<form action= "<?php echo (isset($editando)? '/produto/salvar' : '/produto/adicionar'); ?>" method = "post" >
		
		<?php if(isset($editando)): ?>
			<input type="hidden" name="id" value="<?php echo $produtoEdit['id']?>">
		<?php endif;?>

		<input type="text" name="titulo" placeholder="Titulo" 
		value="<?php echo (isset($produtoEdit['titulo'])? $produtoEdit['titulo'] : '' ); ?>">
		
		<input type="text" name="descricao" placeholder="Descrição" value="<?php echo (isset($produtoEdit['descricao'])? $produtoEdit['descricao'] : '' ); ?>">
		

		<input type="text" name="valor" placeholder="Valor" value="<?php echo (isset($produtoEdit['valor'])? $produtoEdit['valor'] : '' ); ?>">
		

		<button class="btn indigo"><?php echo (isset($editando)? "Atualizar" : "adicionar"); ?></button>


		<?php if(isset($editando)): ?>
			<a class ="btn indigo lighten-4"href="/home">Cancelar</a>
		<?php endif;?>
		


	</form>

</main>
