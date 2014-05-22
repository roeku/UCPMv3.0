<header>
	<?php 
	if ($leftlink==false){
		echo '<div id="left"><div id="st-trigger-effects"><button data-effect="st-effect-4">menu</button></div></div>';
	} else {
		echo '<a href="'.$leftlink.'"><div id="left"><button>'.$lefticon.'</button></div></a>';
	}
	?>
	
	<a href="<?php echo $titlelink;?>">
		<div id="titel"><?php echo $title;?></div>
	</a>	
	
	<?php 
	if ($rightlink!=false && $righticon != 'done'){
		echo '<a href="'.$rightlink.'"><div id="right"><button>'.$righticon.'</button></div></a>';
	} else if ($righticon == 'add'){
		echo '<div id="right"><input type="submit" value="add" form="add"></div>';
	} else if ($righticon == 'edit'){
		echo '<div id="right"><input type="submit" value="edit" form="edit"></div>';
	} else if ($righticon == 'reschedule'){
        echo '<div id="right"><input type="submit" value="reschedule" form="cancel"></div>';
    }

	?>
</header>