<head>
		<?php include "../../inc/header.php";?>
</head>
<?php $user = $_SESSION['User']; ?>
<p>logged in as: <?php echo $user["display_name"]; ?></p>
	<a href="../Auth/index.php?action=logout">Log out</a>
	<a href="../User/">View Profile</a>
	
<body>
	<?php var_dump($errors);?>
	<h3>Are you sure you want to delete this hour request?</h3>
	<form action="?action=delete" method="post">
	<input type="hidden" name="id" value="<?=$model['Id'] ?>" />
	<input type="submit" value="Delete" class="btn btn-primary"  />
	<a href="?action=list">Cancel</a>

</form>

</body>