<style type="text/css">
	.error {
		color: red;
	}
</style>

<div class="container">

	<? if (isset($errors) && $errors):
	?>
	<ul class="error">
		<? foreach ($errors as $key => $value):
		?>
		<li>
			<label><?=$key ?>:
			</label><?=$value ?>
		</li>
		<? endforeach; ?>
	</ul>
	<? endif; ?>
	<form action="?action=submitLogin" method="post" class="form-horizontal row">

		<div class="form-group <?= isset($errors['UserName']) ? 'has-error' : '' ?>">
			<label for="UserName" class="col-sm-2 control-label">Last Name</label>
			<div class="col-sm-10">
				<input type="text" name="UserName" id="UserName" placeholder="User Name" class="form-control" value="<?=$model['UserName'] ?>" />
				<? if(isset($errors['UserName'])): ?><
				span class ="error"><?=$errors['UserName'] ?><
				/span><? endif; ?>
			</div>
		</div>

		<div class="form-group <?= isset($errors['Password']) ? 'has-error' : '' ?>">
			<label for="Password" class="col-sm-2 control-label">Password</label>
			<div class="col-sm-10">
				<input type="password" name="Password" id="Password" placeholder="Password" class="form-control" value="<?=$model['Password'] ?>" />
				<? if(isset($errors['Password'])): ?><
				span class ="error"><?=$errors['Password'] ?><
				/span><? endif; ?>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-lg-10">
				<input type="submit" class="form-control btn btn-primary" value="Login"/>
			</div>
		</div>
	</form>
</div>
