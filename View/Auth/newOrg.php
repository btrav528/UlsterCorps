<head>
		<?php include "../../inc/header.php";?>
</head>
<body>
<div class="container">
        <?php $errors = isset($errors) ? $errors : array(); ?>
        <?php if(isset($errors) && count($errors)): ?>
                <ul>
                <?php foreach ($errors as $key => $value): ?>
                        <li><label><?php echo $key ?>:</label> <?=$value ?></li>
                <?php endforeach; ?>
                </ul>
        <?php endif; ?>
        <form action="?action=saveOrg" method="post"  class="form-horizontal row">
                <input type="hidden" name="Id" value="<?php echo $model['Id'] ?>" />
                
               <div class="form-group <?=isset($errors['display_name']) ? 'has-error' : '' ?>">
                        <label for="display_name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                                <input type="text" name="display_name" id="display_name" class="form-control " value="<?=$model['display_name'] ?>"  />
                        </div>
                        <span><?=@$errors['display_name'] ?></span>
                </div>
                <div class="form-group <?=isset($errors['Address']) ? 'has-error' : '' ?>">
                        <label for="Address" class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-10">
                                <input type="text" name="Address" id="Address" class="form-control " value="<?=$model['Address'] ?>"  />
                        </div>
                        <span><?=@$errors['Address'] ?></span>
                </div>
                <div class="form-group <?=isset($errors['PrimaryPhone']) ? 'has-error' : '' ?>">
                        <label for="PrimaryPhone" class="col-sm-2 control-label">Primay Phone Number</label>
                        <div class="col-sm-10">
                                <input type="text" name="PrimaryPhone" id="PrimaryPhone" class="form-control " value="<?=$model['PrimaryPhone'] ?>"  />
                        </div>
                        <span><?=@$errors['PrimaryPhone'] ?></span>
                </div>
                <div class="form-group <?=isset($errors['Email']) ? 'has-error' : '' ?>">
                        <label for="Email" class="col-sm-2 control-label">Email Address</label>
                        <div class="col-sm-10">
                                <input type="text" name="Email" id="Email"  class="form-control " value="<?=$model['Email'] ?>"  />
                        </div>
                        <span><?=@$errors['Email'] ?></span>
                </div>
                <div class="form-group <?=isset($errors['ZIP']) ? 'has-error' : '' ?>">
                        <label for="ZIP" class="col-sm-2 control-label">Zip Code</label>
                        <div class="col-sm-10">
                                <input type="text" name="ZIP" id="ZIP" class="form-control " value="<?=$model['ZIP'] ?>"  />
                        </div>
                        <span><?=@$errors['ZIP'] ?></span>
                </div>
                <div class="form-group <?=isset($errors['UserName']) ? 'has-error' : '' ?>">
                        <label for="UserName" class="col-sm-2 control-label">User Name</label>
                        <div class="col-sm-10">
                                <input type="text" name="UserName" id="UserName" class="form-control " value="<?=$model['UserName'] ?>"  />
                        </div>
                        <span><?=@$errors['UserName'] ?></span>
                </div>
                <div class="form-group <?=isset($errors['Password']) ? 'has-error' : '' ?>">
                        <label for="Password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                                <input type="password" name="Password" id="Password" placeholder="Your first and last name." class="form-control " value="<?=$model['Password'] ?>"  />
                        </div>
                        <span><?=@$errors['Password'] ?></span>
                </div>
                 <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="form-control btn btn-primary" value="save" />
                        </div>
                </div>
                </form>
              </body>