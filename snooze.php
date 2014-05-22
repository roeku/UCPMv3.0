<?php
$leftlink='index.php';
$lefticon='back';
$title='Emergency stop';
$titlelink='#';
$rightlink='';
$righticon='reschedule';
?>

<?php include('core/init.php');?>
<?php include('template/head.php'); ?>

<body>
	<div id="st-container" class="st-container">
		<?php include('template/menu.php'); ?>
		<div class="st-pusher">
			<div class="st-content">
				<?php include('template/status.php'); ?>
				<?php include('template/snoozer.php'); ?>
				</div><!--st-content-->
		</div><!--st-pusher-->
	</div><!--st-container-->

<script src="js/classie.js"></script>
<script src="js/sidebarEffects.js"></script>

</body>
</html>