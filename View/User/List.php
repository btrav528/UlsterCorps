<head>
	<title>User List</title>
</head>
<body>
	<h2> List of Users</h2>
	<table>
		<thead>
		<tr>
			<th>Id</th>
			<th>First Name</th>
			<th>Last Name</th>
		</tr>
		</thead>
		<tbody>
			  <? foreach ($model as $rs): ?>
                        <tr class=" <?= $rs['Id']==$_REQUEST['Id'] ? 'success' : '' ?> ">
                        	 <td><?=$rs['FirstName']?></td>
                                <td><?=$rs['LastName']?></td>
                                <td><?=$rs['Level']?></td>
                <? endforeach ?>
		</tbody>
	</table>
</body>