<section class="index">
	<?php
		$preptime=minutesToNextApp($userID);
		if ($preptime>20 && $preptime<100){
		echo '<p class="center">You got <strong>'.$preptime.' minutes </strong> to cook, eat &amp; get to your next appointment. Here are some recipes:</p>';
			getRecipes($preptime);
		} else if ($preptime>100) {
		echo '<p class="center">You got plenty of time to cook &amp; eat.<br/> Here are some recipes:</p>';
			getRecipes($preptime);
		} else {
		echo '<p class="center">It seems that you only got <strong>'.$preptime.' minutes </strong> to cook &amp; eat.<br/> Maybe you want to order something online?</p>';
			getDeliveries();
		}
	?>	
	
		
</section>