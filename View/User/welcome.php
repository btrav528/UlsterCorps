<head>
		<?php include "../../inc/header.php";?>
</head>

<?php include "../../inc/_global.php";?>

<h1> Welcome back <?php echo $user['display_name'];?></h1>
<div align="center">
<h3> Please choose what you would like to do:</h3>

<a href='../User'>View my profile&nbsp;&nbsp;</a>
<a href='../Hours'>View my hour requests&nbsp;&nbsp;</a>
<a href="../Auth/index.php?action=logout">Log out&nbsp;&nbsp;  </a>
</div>
<a href='User/test.php'>test</a>
<?php var_dump($user);?>

