<section class="index">

<?php
// Huidige tijd
	$curdate = time (); 
	$curday = date('d', $curdate); 
	$curmonth = date('m', $curdate); 
	$curyear = date('Y', $curdate);

// Welke collega
	$userID = $_GET['id'];

// Ga naar de aandegeduide dag in de kalender
	if (isset($_GET['day'])){
		$day= $_GET['day'];
		$month= $_GET['month'];
		$year= $_GET['year'];
	} else {
		$day = $curday; 
		$month = $curmonth; 
		$year = $curyear;
	}
	
// Controls volgende en vorige	 	 
	 if (isset($_GET['month'])){
	 	$month=$_GET['month'];
	 	$year=$_GET['year'];
	 }
	 if($month>12){
		 $month=1;
		 $year++;
	 } else if ($month<1){
		 $month=12;
		 $year--;
	 }	 
	 
	 //Here we generate the first day of the month 
	 $first_day = mktime(0,0,0,$month, 1, $year) ; 

	 //This gets us the month name 
	 $title = date('F', $first_day) ;

	 //Here we find out what day of the week the first day of the month falls on 
	 $day_of_week = date('D', $first_day) ;
	 
 	//We then determine how many days are in the current month
	$days_in_month = cal_days_in_month(0, $month, $year) ; 
	 
	 //Once we know what day of the week it falls on, we know how many blank days occure before it. If the first day of the week is a Monday then it would be zero
	switch($day_of_week){ 
	case "Mon": $blank = 0; break; 
	case "Tue": $blank = 1; break; 
	case "Wed": $blank = 2; break; 
	case "Thu": $blank = 3; break; 
	case "Fri": $blank = 4; break; 
	case "Sat": $blank = 5; break; 
	case "Sun": $blank = 6; break; 
 }	
?>

<div class="calendar">
	<div class="calendarheader">
		<a href="?month=<?php echo $month-1;?>&year=<?php echo $year?>"><div class="prev">&laquo;</div></a>
		<a href="?day=<?php echo $curday;?>&month=<?php echo $curmonth?>&year=<?php echo $curyear?>"><div class="titlemonth"><?php echo $title.' '.$year; ?></div></a>
		<a href="?month=<?php echo $month+1;?>&year=<?php echo $year?>"><div class="next">&raquo;</div></a>
	</div>
	<div class="daysrow">
		<div class="titleday">M</div>
		<div class="titleday">T</div>
		<div class="titleday">W</div>
		<div class="titleday">T</div>
		<div class="titleday">F</div>
		<div class="titleday">S</div>
		<div class="titleday">S</div>
	</div>
	<div class="calendarrow">
		<?php
			$day_count = 1;
			while ( $blank > 0 ) { 
				echo '<div class="calenderday hidden"><div class="date">.</div></div>'; 
				$blank = $blank-1; 
				$day_count++;
			} 
			$day_num = 1;
			while ($day_num <= $days_in_month) { 
				if(isset($_GET['day']) && $day==$day_num){
					$class='calenderday active red';
					}
				else if($curday==$day_num && $month==$curmonth && $year==$curyear){
					$class='calenderday today';
				} else {
					$class='calenderday';
				};
				echo '<a href="?day='.$day_num.'&month='.$month.'&year='.$year.'&id='.$userID.'"><div class="'.$class.'"><div class="date">'.$day_num.'</div></div></a>'; 
				$day_num++; 
				$day_count++;
				if ($day_count > 7){
					echo '</div><div class="calendarrow">';
					$day_count = 1;
					}
			} 
			while ( $day_count >1 && $day_count <=7 ) { 
				echo '<div class="calenderday hidden"><div class="date">.</div></div>'; 
				$day_count++; 
			} 
		?>
	</div>
</div>

<div class="planning thisday">
	<ul>
		<?php getAllAppointments($day, $month, $year, $userID); ?>
	</ul>
</div>

</section>