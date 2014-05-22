<section class="index">
	<?php $id = $_GET['id'];?>
	
	<div class="recipe_container">
		<div class="recipe_pic">
		<img src="img/recipes/<?php echo recipeDetail($id, 'picture');?>" width="100%">
		</div>
			<?php echo '<h2>'.recipeDetail($id, 'title').'</h2>';?>
			
		<div class="recipe_info">
			<ul>
				<li><?php echo recipeDetail($id, 'cookingtime');?> Minutes preperation time</li>
				<li>Serves <?php echo recipeDetail($id, 'yield');?> people</li><br/>
				<li><strong>Ingredients:</strong><br/> <?php echo recipeDetail($id, 'ingredients');?></li><br/>
				<li><strong>Recipe:</strong><br/> <?php echo recipeDetail($id, 'recipe');?></li>
			</ul>
		</div>
	</div>
	
		
</section>