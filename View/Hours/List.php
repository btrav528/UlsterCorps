<?php $user = $_SESSION['User']; ?>
<p>logged in as: <?php echo $user["FirstName"] ?> <?php echo $user["LastName"]; ?></p>
	<a href="../Auth/index.php?action=logout">Log out</a>
	<a href="?action=new">Create new request</a>
	<a href="../User/">View Profile</a>
<h1>List of hours awaiting aproval:</h1>




<?php if(!$model['error']):?>
	<table border="1">
		<thead>
		<tr>
			<th> Name of Event</th>
			<th> Date of Hours Worked</th>
			<th> Time In</th>
			<th> Time Out</th>
		</tr>
		</thead>
		<tbody>
			
			<?php unset ($model['error']);
			foreach ($model as $rs){
				$Uid=$rs['Users_Id'];
				$Eid=$rs['Event_Id'];
				$date=$rs['Date'];
				$TimeIn=$rs['TimeIn'];
				$TimeOut=$rs['TimeOut'];
				$event=Hours::GetEvent($Eid);
				$userName=Hours::GetUser($Uid);

				
				?>


					
                        <tr>

                        	 	<td><?php echo $event['event_name'] ?></td>
                                <td><?php echo $date ?></td>
                                <td><?php echo $TimeIn ?></td>
                                <td><?php echo $TimeOut?></td>
                                <td><?php echo $userName['LastName']?></td>
                                <td><a href="?action=delete&id=<?php echo $rs['Id'] ?>">delete</a></td>
                                <td><a href="?action=edit&id=<?php echo $rs['Id'] ?>">edit entry</a></td>
                                </tr>
                 <?php } ?>
              
                 	
		</tbody>
		   <?php else: ?>
		   	<h2><?php echo $model['error']; ?></h2>
		   	<?php endif; ?>
		