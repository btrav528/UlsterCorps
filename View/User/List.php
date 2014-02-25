<head>
	<title>User List</title>
</head>
<body>
	<h2> List of Users</h2>
	<a href="?action=new">Add Contact</a>
	<table>
		<thead>
		<tr>
			
			<th>First Name</th>
			<th>Last Name</th>
			<th>Control Level</th>
			<th></th>
		</tr>
		</thead>
		<tbody>
			  <? foreach ($model as $rs): ?>
                        <tr class=" <?= $rs['Id'] == $_REQUEST['Id'] ? 'success' : '' ?> ">
                        	 	<td><?=$rs['FirstName'] ?></td>
                                <td><?=$rs['LastName'] ?></td>
                                <td><?=$rs['Level'] ?></td>
                                <td><a href="?action=delete&id=<?=$rs['Id'] ?>">delete</a></td>
                                <td><a href="?action=edit&id=<?=$rs['Id'] ?>">edit entry</a></td>
                <? endforeach ?>
		</tbody>
	</table>
</body>