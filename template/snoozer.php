<section class="index">
    <form id="cancel" action="snooze_time.php" method="post">
	<p>How long will the emergency last?</p>
        <input type="range" min="0" max="24" step="1" value="0" name="hour" onchange="showValue(this.value)">
        <span id="range"></span>
        <b>hours</b>
       
        </form>
    <div class="thisday">
        <h1>Today's appointments</h1>
        <ul>
	<?php 
    getAppointments(date("j"), date("n"), date("Y"), $userID) ?>
        </ul></div>
</section>
        <script type="text/javascript">
            function showValue(newValue) {
            	document.getElementById("range").innerHTML=newValue;
            }
        </script>