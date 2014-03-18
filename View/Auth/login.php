<style type="text/css">
	.error {
		color: red;
	}
</style>
<div class="container">
	<?php $errors = isset($errors) ? $errors : array(); ?>
	<?php if(isset($errors) && count($errors)): ?>
		<ul>
		<?php foreach ($errors as $key => $value): ?>
			<li><label><?=$key?>:</label> <?=$value?></li>
		<?php endforeach; ?>
		</ul>
	<?php endif; ?>
	<form action="?action=submitLogin" method="post" class="form-horizontal row">

		<div class="form-group <?php isset($errors['UserName']) ? 'has-error' : '' ?>">
			<label for="UserName" class="col-sm-2 control-label">User Name</label>
			<div class="col-sm-10">
				<input type="text" name="UserName" id="UserName" placeholder="User Name" class="form-control" value="<?php $model['UserName'] ?>" />
				<?php if(isset($errors['UserName'])): ?><
				span class ="error"><?php $errors['UserName'] ?><
				/span><?php endif; ?>
			</div>
		</div>

		<div class="form-group <?php isset($errors['Password']) ? 'has-error' : '' ?>">
			<label for="Password" class="col-sm-2 control-label">Password</label>
			<div class="col-sm-10">
				<input type="password" name="Password" id="Password" placeholder="Password" class="form-control" value="<?php $model['Password'] ?>" />
				<?php if(isset($errors['Password'])): ?><
				span class ="error"><?php $errors['Password'] ?><
				/span><?php endif; ?>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-lg-10">
				<input type="submit" class="form-control btn btn-primary" value="Login"/>
			</div>
		</div>
	</form>
</div>
<a href="../Auth/index.php?action=new">New User?</a>
<?php echo $pas;?>