<head>
		<?php include "../../inc/header.php";?>
</head>

<form action="?action=save" method="post"  class="form-horizontal row">
<input type="hidden" name="Id" value="<?php echo $model['Id'] ?>" />
<input type="hidden" name="Users_Id" value="<?php echo $model['Users_Id'] ?>" />

<?php
$list = Hours::getEventList();
 ?>
 <label for="Event" class="col-sm-2 control-label">Select the  event you volunteered at:</label>
 <select name='Event_Id'>
 	<?php foreach($list as $rs):?>
 		
 		<option value=<?php echo $rs['event_id']; ?>><?php echo $rs['event_name']; ?></option>
 		<?php endforeach; ?>
 </select>
 <br>
<label for="Date" class="col-sm-2 control-label">What day did you volunteer? Please enter in YYYY-MM-DD format:</label>
<input type="text" name="Date" id="Date" placeholder="YYYY-MM-DD" class="form-control " value="<?=$model['Date'] ?>"  />
 <br>
 <label for="TimeIn" class="col-sm-2 control-label">When did you start working? Please use a 24-hour clock </label>
 <input type="text" name="TimeIn" id="TimeIn" placeholder="HH:MM" class="form-control " value="<?=$model['TimeIn'] ?>"  />
 <br>
 <label for="TimeOut" class="col-sm-2 control-label">When did you stop working?</label>
  <input type="text" name="TimeOut" id="TimeOut" placeholder="HH:MM" class="form-control " value="<?=$model['TimeOut'] ?>"  />
 <br>
 <label for="HoursRequested" class="col-sm-2 control-label">How many hours total did you work? (eg: if it was 4 and a half, enter 4.5)</label>
  <input type="text" name="HoursRequested" id="HoursRequested" placeholder="Hours total" class="form-control " value="<?=$model['HoursRequested'] ?>"  />
 <br>
 <input type="submit" class="form-control btn btn-primary" value="save" />