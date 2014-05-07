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
        <form action="?action=save" method="post"  class="form-horizontal row">
                <input type="hidden" name="Id" value="<?php echo $model['Id'] ?>" />
                <input type="hidden" name="Level" value="<?php $model['Level'] ?>"/>
                
               <div class="form-group <?=isset($errors['displayname']) ? 'has-error' : '' ?>">
                        <label for="display_name" class="col-sm-2 control-label">Full Name</label>
                        <div class="col-sm-10">
                                <input type="text" name="display_name" id="display_name" placeholder="Your first and last name." class="form-control " value="<?=$model['display_name'] ?>"  />
                        </div>
                        <span><?=@$errors['display_name'] ?></span>
                </div>
               
                <div class="form-group <?=isset($errors['user_login']) ? 'has-error' : '' ?>">
                        <label for="user_login" class="col-sm-2 control-label">User Name</label>
                        <div class="col-sm-10">
                                <input type="text" name="user_login" id="user_login" placeholder="User Name" class="form-control " value="<?php echo $model['user_login'] ?>"  />
                        </div>
                        <span><?=@$errors['user_login'] ?></span>
                </div>
                <div class="form-group <?=isset($errors['user_pass']) ? 'has-error' : '' ?>">
                        <label for="user_pass" class="col-sm-2 control-label">Password: Enter new password or reenter old one.</label>
                        <div class="col-sm-10">
                                <input type="password" name="user_pass" id="user_pass"  class="form-control "/>
                        </div>
                        <span><?=@$errors['user_pass'] ?></span>
                </div>
                 <div class="form-group <?=isset($errors['user_email']) ? 'has-error' : '' ?>">
                        <label for="user_email" class="col-sm-2 control-label">Email Address</label>
                        <div class="col-sm-10">
                                <input type="text" name="user_email" id="user_email" placeholder="Email Address" class="form-control "  value="<?=$model['user_email'] ?>" />
                        </div>
                        <span><?=@$errors['user_email'] ?></span>
                </div>
                <div class="form-group <?=isset($errors['PrimaryPhone']) ? 'has-error' : '' ?>">
                        <label for="PrimaryPhone" class="col-sm-2 control-label">Primary Phone Number</label>
                        <div class="col-sm-10">
                                <input type="text" name="PrimaryPhone" id="PrimaryPhone" placeholder="Primary Phone Number" class="form-control "  value="<?=$model['PrimaryPhone'] ?>" />
                        </div>
                        <span><?=@$errors['PrimaryPhone'] ?></span>
                </div>
                <div class="form-group <?=isset($errors['SecondaryPhone']) ? 'has-error' : '' ?>">
                        <label for="SecondaryPhone" class="col-sm-2 control-label">Secondary Phone Number</label>
                        <div class="col-sm-10">
                                <input type="text" name="SecondaryPhone" id="SecondaryPhone" placeholder="Secondary Phone Number" class="form-control "  value="<?=$model['SecondaryPhone'] ?>" />
                        </div>
                        <span><?=@$errors['SecondaryPhone'] ?></span>
                </div>
                 <div class="form-group <?=isset($errors['ZIP']) ? 'has-error' : '' ?>">
                        <label for="ZIP" class="col-sm-2 control-label">Zip Code</label>
                        <div class="col-sm-10">
                                <input type="text" name="ZIP" id="ZIP" placeholder="Zip Code" class="form-control "  value="<?=$model['ZIP'] ?>" />
                        </div>
                        <span><?=@$errors['ZIP'] ?></span>
                </div>
                 <br>
                <div class="form-group <?=isset($errors['Artists']) ? 'has-error' : '' ?>">
                        <label for="Artists" class="col-sm-2 control-label">Artist</label>
                        
                                <input type='checkbox' name='Artists' value='1' <?php echo($model['Artists'] == 1 ? 'checked' : ''); ?> id='Artists' />
                        
                        <span><?=@$errors['Artists'] ?></span>
                </div>
                 <br>
                 <div class="form-group <?=isset($errors['ComputerSkills']) ? 'has-error' : '' ?>">
                        <label for="ComputerSkills" class="col-sm-2 control-label">Computer Skills</label>
                       
                                <input type='checkbox' name='ComputerSkills' value='1'<?php echo($model['ComputerSkills'] == 1 ? 'checked' : ''); ?> id='ComputerSkills' />
                        
                        <span><?=@$errors['ComputerSkills'] ?></span>
                </div>
                 <br>
                 <div class="form-group <?=isset($errors['Construction']) ? 'has-error' : '' ?>">
                        <label for="Construction" class="col-sm-2 control-label">Construction Skill</label>
                        
                                <input type='checkbox' name='Construction' value='1' <?php echo($model['Construction'] == 1 ? 'checked' : ''); ?> id='Construction' />
                        
                        <span><?=@$errors['Construction'] ?></span>
                        
                </div>
                 <br>
                <div class="form-group <?=isset($errors['Cooking']) ? 'has-error' : '' ?>">
                        <label for="Cooking" class="col-sm-2 control-label">Cooking Skill</label>
                        
                                <input type='checkbox' name='Cooking' value='1'<?php echo($model['Cooking'] == 1 ? 'checked' : ''); ?> id='Cooking' />
                       
                        <span><?=@$errors['Cooking'] ?></span>
                </div>
                 <br>
                <div class="form-group <?=isset($errors['EmergencyFeed']) ? 'has-error' : '' ?>">
                        <label for="EmergencyFeed" class="col-sm-2 control-label">Emergency Response-Feeding</label>
                        
                                <input type='checkbox' name='EmergencyFeed' value='1'<?php echo($model['EmergencyFeed'] == 1 ? 'checked' : ''); ?> id='EmergencyFeed' />
                       
                        <span><?=@$errors['EmergencyFeed'] ?></span>
                </div>
                 <br>
                <div class="form-group <?=isset($errors['EmergencyShelter']) ? 'has-error' : '' ?>">
                        <label for="EmergencyShelter" class="col-sm-2 control-label">Emergency Response-Shelter</label>
                       
                                <input type='checkbox' name='EmergencyShelter' value='1'<?php echo($model['EmergencyShelter'] == 1 ? 'checked' : ''); ?> id='EmergencyShelter' />
                       
                        <span><?=@$errors['EmergencyShelter'] ?></span>
                </div>
                 <br>
                <div class="form-group <?=isset($errors['Farming']) ? 'has-error' : '' ?>">
                        <label for="Farming" class="col-sm-2 control-label">Farming</label>
                        
                                <input type='checkbox' name='Farming' value='1'<?php echo($model['Farming'] == 1 ? 'checked' : ''); ?> id='Farming' />
                        
                        <span><?=@$errors['Farming'] ?></span>
                </div>
                 <br>
                <div class="form-group <?=isset($errors['Financial']) ? 'has-error' : '' ?>">
                        <label for="Financial" class="col-sm-2 control-label">Financial/Accounting</label>
                        
                                <input type='checkbox' name='Financial' value='1'<?php echo($model['Financial'] == 1 ? 'checked' : ''); ?> id='Financial' />
                        
                        <span><?=@$errors['Financial'] ?></span>
                </div>
                 <br>
                <div class="form-group <?=isset($errors['Fundraising']) ? 'has-error' : '' ?>">
                        <label for="Fundraising" class="col-sm-2 control-label">Fundraising</label>
                        
                                <input type='checkbox' name='Fundraising' value='1' <?php echo($model['Fundraising'] == 1 ? 'checked' : ''); ?> id='Fundraising' />
                        
                        <span><?=@$errors['Fundraising'] ?></span>
                </div>
                 <br>
                <div class="form-group <?=isset($errors['Grantwriting']) ? 'has-error' : '' ?>">
                        <label for="Grantwriting" class="col-sm-2 control-label">Grantwriting</label>
                        
                                <input type='checkbox' name='Grantwriting' value='1' <?php echo($model['Grantwriting'] == 1 ? 'checked' : ''); ?> id='Grantwriting' />
                        
                        <span><?=@$errors['Grantwriting'] ?></span>
                </div>
                 <br>
                <div class="form-group <?=isset($errors['GraphicDesign']) ? 'has-error' : '' ?>">
                        <label for="GraphicDesign" class="col-sm-2 control-label">Graphic Design</label>
                        
                                <input type='checkbox' name='GraphicDesign' value='1' <?php echo($model['GraphicDesign'] == 1 ? 'checked' : ''); ?> id='GraphicDesign' />
                        
                        <span><?=@$errors['GraphicDesign'] ?></span>
                </div>
                 <br>
                <div class="form-group <?=isset($errors['HealthCare']) ? 'has-error' : '' ?>">
                        <label for="HealthCare" class="col-sm-2 control-label">Health Care</label>
                        
                                <input type='checkbox' name='HealthCare' value='1' <?php echo($model['HealthCare'] == 1 ? 'checked' : ''); ?> id='HealthCare' />
                        
                        <span><?=@$errors['HealthCare'] ?></span>
                </div>
                 <br>
                <div class="form-group <?=isset($errors['HeavyLifting']) ? 'has-error' : '' ?>">
                        <label for="HeavyLifting" class="col-sm-2 control-label">Heavy Lifting</label>
                        
                                <input type='checkbox' name='HeavyLifting' value='1'<?php echo($model['HeavyLifting'] == 1 ? 'checked' : ''); ?> id='HeavyLifting' />
                        
                        <span><?=@$errors['HeavyLifting'] ?></span>
                </div>
                 <br>
                <div class="form-group <?=isset($errors['Media']) ? 'has-error' : '' ?>">
                        <label for="Media" class="col-sm-2 control-label">Media/PR</label>
                        
                                <input type='checkbox' name='Media' value='1'<?php echo($model['Media'] == 1 ? 'checked' : ''); ?> id='Media' />
                        
                        <span><?=@$errors['Media'] ?></span>
                </div>
                 <br>
                <div class="form-group <?=isset($errors['MediationLegal']) ? 'has-error' : '' ?>">
                        <label for="MediationLegal" class="col-sm-2 control-label">Mediation/Legal</label>
                        
                                <input type='checkbox' name='MediationLegal' value='1' <?php echo($model['MediationLegal'] == 1 ? 'checked' : ''); ?> id='MediationLegal' />
                       
                        <span><?=@$errors['MediationLegal'] ?></span>
                </div>
                 <br>
                <div class="form-group <?=isset($errors['MentalCare']) ? 'has-error' : '' ?>">
                        <label for="MentalCare" class="col-sm-2 control-label">Mental Health Care</label>
                        
                                <input type='checkbox' name='MentalCare' value='1' <?php echo($model['MentalCare'] == 1 ? 'checked' : ''); ?> id='MentalCare' />
                        
                        <span><?=@$errors['MentalCare'] ?></span>
                </div>
                 <br>
                <div class="form-group <?=isset($errors['Mentorship']) ? 'has-error' : '' ?>">
                        <label for="Mentorship" class="col-sm-2 control-label">Mentorship</label>
                        
                                <input type='checkbox' name='Mentorship' value='1' <?php echo($model['Mentorship'] == 1 ? 'checked' : ''); ?> id='Mentorship' />
                        
                        <span><?=@$errors['Mentorship'] ?></span>
                </div>
                 <br>
                <div class="form-group <?=isset($errors['Research']) ? 'has-error' : '' ?>">
                        <label for="Research" class="col-sm-2 control-label">Research</label>
                        
                                <input type='checkbox' name='Research' value='1' <?php echo($model['Research'] == 1 ? 'checked' : ''); ?> id='Research' />
                       
                        <span><?=@$errors['Research'] ?></span>
                </div>
                 <br>
                <div class="form-group <?=isset($errors['Spanish']) ? 'has-error' : '' ?>">
                        <label for="Spanish" class="col-sm-2 control-label">Spanish Speaker</label>
                        
                                <input type='checkbox' name='Spanish' value='1' <?php echo($model['Spanish'] == 1 ? 'checked' : ''); ?> id='Spanish' />
                        
                        <span><?=@$errors['Spanish'] ?></span>
                </div>
                 <br>
                <div class="form-group <?=isset($errors['SpecialEvent']) ? 'has-error' : '' ?>">
                        <label for="SpecialEvent" class="col-sm-2 control-label">Special Event Planning</label>
                        
                                <input type='checkbox' name='SpecialEvent' value='1' <?php echo($model['SpecialEvent'] == 1 ? 'checked' : ''); ?> id='SpecialEvent' />
                        
                        <span><?=@$errors['SpecialEvent'] ?></span>
                </div>
                 <br>
                <div class="form-group <?=isset($errors['Transportation']) ? 'has-error' : '' ?>">
                        <label for="Transportation" class="col-sm-2 control-label">Transportation</label>
                        
                                <input type='checkbox' name='Transportation' value='1' <?php echo($model['Transportation'] == 1 ? 'checked' : ''); ?> id='Transportation' />
                        
                        <span><?=@$errors['Transportation'] ?></span>
                </div>
                 <br>
                <div class="form-group <?=isset($errors['Tutoring']) ? 'has-error' : '' ?>">
                        <label for="Tutoring" class="col-sm-2 control-label">Tutoring</label>
                        
                                <input type='checkbox' name='Tutoring' value='1' <?php echo($model['Tutoring'] == 1 ? 'checked' : ''); ?> id='Tutoring' />
                        
                        <span><?=@$errors['Tutoring'] ?></span>
                </div>
                 <br>
                <div class="form-group <?=isset($errors['VideoPhoto']) ? 'has-error' : '' ?>">
                        <label for="VideoPhoto" class="col-sm-2 control-label">Videograpy/Photography</label>
                        
                                <input type='checkbox' name='VideoPhoto' value='1' <?php echo($model['VideoPhoto'] == 1 ? 'checked' : ''); ?> id='VideoPhoto' />
                        
                        <span><?=@$errors['VideoPhoto'] ?></span>
                </div>
                 <br>
                <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="form-control btn btn-primary" value="save" />
                                <a href="index.php">Cancel</a>
                        </div>
                </div>
               </form>
              </body>
