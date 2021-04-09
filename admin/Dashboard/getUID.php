<?php
	$event_pass_id=$_POST["UIDresult"];
	$Write="<?php $" . "event_pass_id='" . $event_pass_id . "'; " . "echo $" . "event_pass_id;" . " ?>";
	file_put_contents('notify.php',$Write);
?>