<head>
	<?php
	include "../../inc/header.php";
?>
</head>

<form action="?action=save" method="post"  class="form-horizontal row">
	<input type="hidden" name="Id" value="<?php echo $model['Id'] ?>" />
	<input type="hidden" name="Users_Id" value="<?php echo $model['Users_Id'] ?>" />
	<input type="hidden" name="event_id" value="<?php echo $model['event_id']?>"/>
	<input type="hidden" name="Date" value="<?php echo $model['Date']?>"/>
	<input type="hidden" name="TimeIn" value="<?php echo $model['TimeIn']?>"/>
	<input type="hidden" name="TimeOut" value="<?php echo $model['TimeOut']?>"/>
	<input type="hidden" name="HoursRequested" value="<?php echo $model['HoursRequested']?>"/>

	<label for="OtherLoc" class="col-sm-2 control-label">What is the Name of the Orgnization you volunteered with?</label>
	<input type="text" name="OtherOrg" id="OtherOrg" placeholder="Name" class="form-control " value="<?=$model['OtherOrg'] ?>"  />
	<br>
	<label for="OtherLoc" class="col-sm-2 control-label">If you know the location that you volunteered at, put it here.</label>
	<input type="text" name="OtherLoc" id="OtherLoc" placeholder="YYYY-MM-DD" class="form-control " value="<?=$model['OtherLoc'] ?>"  />
	<br>
		<label for="OtherName" class="col-sm-2 control-label">If you know the name of the event you volunteered, put it here. If there was no name, or you do not remember, leave it blank.</label>
	<input type="text" name="OtherName" id="OtherName" placeholder="YYYY-MM-DD" class="form-control " value="<?=$model['OtherName'] ?>"  />
	<br>
	<input type="submit" class="form-control btn btn-primary" value="save" />
	<a href="?action=list">Cancel</a>
