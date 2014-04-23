
<?php $user = $_SESSION['User'];
	//var_dump($user);
 ?>



<head>
	<?php
	include "../../inc/header.php";
?>
</head>
<body>
	
	<p>Logged in as: <?php echo $user["display_name"] ?></p>
	<a href="../Hours/index.php">View Hour Requests&nbsp;&nbsp;</a>
	<a href="../Auth/index.php?action=logout">Log out</a>
<?php if($user['Level']==0){?>	
<h1>List of Users</h1>
	<?php } else {?>
		<h1>User Profile</h1>
		<?php }?>
	
	
	<table border="1">
		<thead>
		<tr>
			
			<th>Name</th>
			<th>Number of Hours done.</th>
			<th>Actions</th>
			
			
		</tr>
		</thead>
		<tbody>
			<?php if ($user['Level']!=0):?>
			<td><?php echo $model['display_name'] ?></td>
            <td><?php echo $model['Hours'] ?></td>
            <td><a href="?action=edit&id=<?php echo $model['Id']?>">Edit My Account</a></td>
				<?php else: ?>
			  <?php foreach ($model as $rs): ?>


					
                        <tr>
                        	 	<td><?php echo $rs['display_name'] ?></td>
                                <td><?php echo $rs['Hours'] ?></td>
                                <td><a href="?action=delete&id=<?php echo $rs['Id'] ?>">delete</a>
                                <br><a href="?action=edit&id=<?php echo $rs['Id'] ?>">edit entry</a></td> </tr>
                 <?php endforeach; ?>
                 <?php endif; ?>
		</tbody>
	</table>
</body>