<?php $user = $_SESSION['User']; ?>
<?php var_dump($user);?>

<head>
	<title>User List</title>
</head>
<body>
	<h2> List of Users </h2>
	<p>logged in as: <?php echo $user["display_name"] ?></p>
	<a href="../Hours/index.php">View Hour Requests</a>
	<a href="../Auth/index.php?action=logout">Log out</a>
	

	
	<a href="?action=new">Add Contact</a>
	
	<table border="1">
		<thead>
		<tr>
			
			<th>Name</th>
			<th>Number of Hours done.</th>
			
			
		</tr>
		</thead>
		<tbody>
			<?php if ($user['Level']!=0):?>
			<td><?php echo $model['display_name'] ?></td>
            <td><?php echo $model['Hours'] ?></td>
				<?php else: ?>
			  <?php foreach ($model as $rs): ?>


					
                        <tr>
                        	 	<td><?php echo $rs['display_name'] ?></td>
                                <td><?php echo $rs['Hours'] ?></td>
                                <td><a href="?action=delete&id=<?php echo $rs['Id'] ?>">delete</a></td>
                                <td><a href="?action=edit&id=<?php echo $rs['Id'] ?>">edit entry</a></td> </tr>
                 <?php endforeach; ?>
                 <?php endif; ?>
		</tbody>
	</table>
</body>