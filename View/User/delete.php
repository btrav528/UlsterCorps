<head>
		<?php include "../../inc/header.php";?>
</head>
<h3> Are you sure you want to delete your account? Note that thil will only delete your volunteer profile, not your login used to access the rest off the site.</h3>
<form action="?action=delete" method="post">
	<input type="hidden" name="id" value="<?=$model['Id'] ?>" />
	<input type="submit" value="Delete" class="btn btn-primary"  />
	<a href="?action=list">No, you're right.</a>

</form>
