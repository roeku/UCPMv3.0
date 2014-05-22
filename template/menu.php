<nav class="st-menu st-effect-4" id="menu-4">
		<div id="profile">
			<div class="picture"><img src="img/<?php echo getEmployee($userID, 'img') ?>" alt="profile" width="100"></div>
			<div class="name"><?php echo getEmployee($userID, 'name') ?></div>
			<div class="settings">View Profile & Settings</div>
		</div>
		<ul id="menu">
			<a href="index.php"><li><span class="icon-calendar menu-icon"></span></span>Overview</li></a>
			<a href="colleagues.php"><li><span class="icon-user menu-icon"></span></span>Colleagues</li></a>
			<a href="holidays.php"><li><span class="icon-briefcase menu-icon"></span></span>Holidays</li></a>
			<a href="carpooling.php"><li><span class="icon-road menu-icon"></span></span>Carpooling</li></a>
			<a href="cooking_select.php"><li><span class="icon-food menu-icon"></span></span>Cooking</li></a>
		</ul>
</nav>
