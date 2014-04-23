<head>
		<?php
	include "../../inc/header.php";
?>
</head>
<?php $user = $_SESSION['User']; ?>
<p>Logged in as: <?php echo $user["display_name"]; ?></p>
	<a href="../Auth/index.php?action=logout">Log out&nbsp;&nbsp;  </a>
	<a href="?action=new">  Create new request &nbsp;&nbsp; </a>
	<a href="../User/">  View Profile  </a>
<h1>List of hours awaiting aproval:</h1>


<?php //var_dump($user); ?>

<?php //if(!array_key_exists('error', $model)):?>
	<table border="1">
		<thead>
		<tr>
			<?php if ($user['Level']==0){?>

			<th> User Name</th>
			<?php }?>	
			<th> Name of Event</th>
			<th> Date of Hours Worked</th>
			<th> Time In</th>
			<th> Time Out</th>
			<?php if ($user['Level']==0){?>
						<th> User ID</th>
						<?php }?>

						<th>Actions</th>
		</tr>
		</thead>
		<tbody>
			<?php unset ($model['error']);
			//var_dump($model);
			foreach ($model as $rs){
				$id=$rs['Id'];
				$userName=$rs['display_name'];
				$Uid=$rs['Users_Id'];
				$Eid=$rs['Event_Id'];
				$date=$rs['Date'];
				$TimeIn=$rs['TimeIn'];
				$TimeOut=$rs['TimeOut'];
				$event=Hours::GetEvent($Eid);
				$mrs['Event'] = Hours::GetEvent($Eid);
				
				//var_dump($id);

				//var_dump($userName);

				
				?>


                        <tr>
                        	<?php if($user['Level']==0):?>
                        		
								<td><?php echo $userName; ?></td>
								<?php endif; ?>
                        	 	<td><?php echo $event['event_name']; ?></td>
                                <td><?php echo $date; ?></td>
                                <td><?php echo $TimeIn; ?></td>
                                <td><?php echo $TimeOut; ?></td>
                                <?php if($user['Level']==0):?>
                                <td><?php echo $Uid; ?></td>
                                <?php endif; ?>
                                <td><a href="?action=delete&id=<?php echo $id; ?>">delete</a><br>
                                <a href="?action=edit&id=<?php echo $id; ?>">edit entry</a></td>
                                </tr>
                 <?php } ?>
              
                 	
		</tbody>
		   
		