<?php include('core/init.php');?>

<?php
$leftlink=false;
$lefticon='menu';
$title = 'Calendar';
$titlelink='c_calendar.php?day='.date("j").'&month='.date("n").'&year='.date("Y");
$rightlink='colleagues.php';
$righticon='back';
?>

<?php include('template/head.php') ?>

<body>
	<div id="st-container" class="st-container">
		<?php include('template/menu.php') ?>
		<div class="st-pusher">
			<div class="st-content">
				<?php include('template/status.php') ?>
				<?php include('template/c_calendar.php');
				echo $q;?>
			</div><!--st-content-->
		</div><!--st-pusher-->
	</div><!--st-container-->

<script src="js/classie.js"></script>
<script src="js/sidebarEffects.js"></script>
</body>
</html>