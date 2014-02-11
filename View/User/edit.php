<div class="container">
        <? $errors = isset($errors) ? $errors : array(); ?>
        <? if(isset($errors) && count($errors)): ?>
                <ul>
                <? foreach ($errors as $key => $value): ?>
                        <li><label><?=$key?>:</label> <?=$value?></li>
                <? endforeach; ?>
                </ul>
        <? endif; ?>
        <form action="?action=save" method="post"  class="form-horizontal row">
                <input type="hidden" name="Id" value="<?=$model['Id']?>" />
                <input type="hidden" name="Level" value="<?=$model['Level']?>"/>
                
                <div class="form-group <?=isset($errors['FirstName']) ? 'has-error' : ''?>">
                        <label for="FirstName" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-10">
                                <input type="text" name="FirstName" id="FirstName" placeholder="First Name" class="form-control " value="<?=$model['FirstName']?>"  />
                        </div>
                        <span><?=@$errors['FirstName']?></span>
                </div>
                <div class="form-group <?=isset($errors['LastName']) ? 'has-error' : ''?>">
                        <label for="LastName" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-10">
                                <input type="text" name="LastName" id="LastName" placeholder="Last Name" class="form-control " value="<?=$model['LastName']?>"  />
                        </div>
                        <span><?=@$errors['LastName']?></span>
                </div>
                <div class="form-group <?=isset($errors['UserName']) ? 'has-error' : ''?>">
                        <label for="UserName" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-10">
                                <input type="text" name="UserName" id="UserName" placeholder="User Name" class="form-control " value="<?=$model['UserName']?>"  />
                        </div>
                        <span><?=@$errors['UserName']?></span>
                </div>
                <div class="form-group <?=isset($errors['Password']) ? 'has-error' : ''?>">
                        <label for="Password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                                <input type="password" name="Password" id="Password" placeholder="Password" class="form-control "  value="<?=$model['Password']?>" />
                        </div>
                        <span><?=@$errors['Password']?></span>
                </div>
                <div class="form-group <?=isset($errors['PrimaryPhone']) ? 'has-error' : ''?>">
                        <label for="PrimaryPhone" class="col-sm-2 control-label">Primary Phone Number</label>
                        <div class="col-sm-10">
                                <input type="text" name="PrimaryPhone" id="PrimaryPhone" placeholder="Primary Phone Number" class="form-control "  value="<?=$model['PrimaryPhone']?>" />
                        </div>
                        <span><?=@$errors['PrimaryPhone']?></span>
                </div>
                <div class="form-group <?=isset($errors['SecondaryPhone']) ? 'has-error' : ''?>">
                        <label for="SecondaryPhone" class="col-sm-2 control-label">Secondary Phone Number</label>
                        <div class="col-sm-10">
                                <input type="text" name="SecondaryPhone" id="SecondaryPhone" placeholder="Secondary Phone Number" class="form-control "  value="<?=$model['SecondaryPhone']?>" />
                        </div>
                        <span><?=@$errors['SecondaryPhone']?></span>
                </div>
                
                
                <div class="form-group <?=isset($errors['Artists']) ? 'has-error' : ''?>">
                        <label for="Artists" class="col-sm-2 control-label">Artist</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='Artists' value='1'<?php echo ($model['Artists']==1 ? 'checked' : '');?> id='Artists' />
                        </div>
                        <span><?=@$errors['Artists']?></span>
                </div>
                 <div class="form-group <?=isset($errors['ComputerSkills']) ? 'has-error' : ''?>">
                        <label for="ComputerSkills" class="col-sm-2 control-label">Computer Skills</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='ComputerSkills' value='1'<?php echo ($model['ComputerSkills']==1 ? 'checked' : '');?> id='ComputerSkills' />
                        </div>
                        <span><?=@$errors['ComputerSkills']?></span>
                </div>
                 <div class="form-group <?=isset($errors['Construction']) ? 'has-error' : ''?>">
                        <label for="Construction" class="col-sm-2 control-label">Construction Skill</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='Construction' value='1' <?php echo ($model['Construction']==1 ? 'checked' : '');?>id='Construction' />
                        </div>
                        <span><?=@$errors['Construction']?></span>
                        
                </div>
                <div class="form-group <?=isset($errors['Cooking']) ? 'has-error' : ''?>">
                        <label for="Cooking" class="col-sm-2 control-label">Cooking Skill</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='Cooking' value='1'<?php echo ($model['Cooking']==1 ? 'checked' : '');?> id='Cooking' />
                        </div>
                        <span><?=@$errors['Cooking']?></span>
                </div>
                <div class="form-group <?=isset($errors['EmergencyFeed']) ? 'has-error' : ''?>">
                        <label for="EmergencyFeed" class="col-sm-2 control-label">Emergency Response-Feeding</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='EmergencyFeed' value='1'<?php echo ($model['EmergencyFeed']==1 ? 'checked' : '');?> id='EmergencyFeed' />
                        </div>
                        <span><?=@$errors['EmergencyFeed']?></span>
                </div>
                <div class="form-group <?=isset($errors['EmergencyShelter']) ? 'has-error' : ''?>">
                        <label for="EmergencyShelter" class="col-sm-2 control-label">Emergency Response-Shelter</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='EmergencyShelter' value='1'<?php echo ($model['EmergencyShelter']==1 ? 'checked' : '');?> id='EmergencyShelter' />
                        </div>
                        <span><?=@$errors['EmergencyShelter']?></span>
                </div>
                <div class="form-group <?=isset($errors['Farming']) ? 'has-error' : ''?>">
                        <label for="Farming" class="col-sm-2 control-label">Farming</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='Farming' value='1'<?php echo ($model['Farming']==1 ? 'checked' : '');?> id='Farming' />
                        </div>
                        <span><?=@$errors['Farming']?></span>
                </div>
                <div class="form-group <?=isset($errors['Financial']) ? 'has-error' : ''?>">
                        <label for="Financial" class="col-sm-2 control-label">Financial/Accounting</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='Financial' value='1'<?php echo ($model['Financial']==1 ? 'checked' : '');?> id='Financial' />
                        </div>
                        <span><?=@$errors['Financial']?></span>
                </div>
                <div class="form-group <?=isset($errors['Fundraising']) ? 'has-error' : ''?>">
                        <label for="Fundraising" class="col-sm-2 control-label">Fundraising</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='Fundraising' value='1' <?php echo ($model['Fundraising']==1 ? 'checked' : '');?> id='Fundraising' />
                        </div>
                        <span><?=@$errors['Fundraising']?></span>
                </div>
                <div class="form-group <?=isset($errors['Grantwriting']) ? 'has-error' : ''?>">
                        <label for="Grantwriting" class="col-sm-2 control-label">Grantwriting</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='Grantwriting' value='1' <?php echo ($model['Grantwriting']==1 ? 'checked' : '');?>id='Grantwriting' />
                        </div>
                        <span><?=@$errors['Grantwriting']?></span>
                </div>
                <div class="form-group <?=isset($errors['GraphicDesign']) ? 'has-error' : ''?>">
                        <label for="GraphicDesign" class="col-sm-2 control-label">Graphic Design</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='GraphicDesign' value='1' <?php echo ($model['GraphicDesign']==1 ? 'checked' : '');?> id='GraphicDesign' />
                        </div>
                        <span><?=@$errors['GraphicDesign']?></span>
                </div>
                <div class="form-group <?=isset($errors['HealthCare']) ? 'has-error' : ''?>">
                        <label for="HealthCare" class="col-sm-2 control-label">Health Care</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='HealthCare' value='1' <?php echo ($model['HealthCare']==1 ? 'checked' : '');?> id='HealthCare' />
                        </div>
                        <span><?=@$errors['HealthCare']?></span>
                </div>
                <div class="form-group <?=isset($errors['HeavyLifting']) ? 'has-error' : ''?>">
                        <label for="HeavyLifting" class="col-sm-2 control-label">Heavy Lifting</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='HeavyLifting' value='1'<?php echo ($model['HeavyLifting']==1 ? 'checked' : '');?> id='HeavyLifting' />
                        </div>
                        <span><?=@$errors['HeavyLifting']?></span>
                </div>
                <div class="form-group <?=isset($errors['Media']) ? 'has-error' : ''?>">
                        <label for="Media" class="col-sm-2 control-label">Media/PR</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='Media' value='1'<?php echo ($model['Media']==1 ? 'checked' : '');?> id='Media' />
                        </div>
                        <span><?=@$errors['Media']?></span>
                </div>
                <div class="form-group <?=isset($errors['MediationLegal']) ? 'has-error' : ''?>">
                        <label for="MediationLegal" class="col-sm-2 control-label">Mediation/Legal</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='MediationLegal' value='1' <?php echo ($model['MediationLegal']==1 ? 'checked' : '');?>id='MediationLegal' />
                        </div>
                        <span><?=@$errors['MediationLegal']?></span>
                </div>
                <div class="form-group <?=isset($errors['MentalCare']) ? 'has-error' : ''?>">
                        <label for="MentalCare" class="col-sm-2 control-label">Mental Health Care</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='MentalCare' value='1' <?php echo ($model['MentalCare']==1 ? 'checked' : '');?>id='MentalCare' />
                        </div>
                        <span><?=@$errors['MentalCare']?></span>
                </div>
                <div class="form-group <?=isset($errors['Mentorship']) ? 'has-error' : ''?>">
                        <label for="Mentorship" class="col-sm-2 control-label">Mentorship</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='Mentorship' value='1' <?php echo ($model['Mentorship']==1 ? 'checked' : '');?>id='Mentorship' />
                        </div>
                        <span><?=@$errors['Mentorship']?></span>
                </div>
                <div class="form-group <?=isset($errors['Research']) ? 'has-error' : ''?>">
                        <label for="Research" class="col-sm-2 control-label">Research</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='Research' value='1' <?php echo ($model['Research']==1 ? 'checked' : '');?>id='Research' />
                        </div>
                        <span><?=@$errors['Research']?></span>
                </div>
                <div class="form-group <?=isset($errors['Spanish']) ? 'has-error' : ''?>">
                        <label for="Spanish" class="col-sm-2 control-label">Spanish Speaker</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='Spanish' value='1' <?php echo ($model['Spanish']==1 ? 'checked' : '');?>id='Spanish' />
                        </div>
                        <span><?=@$errors['Spanish']?></span>
                </div>
                <div class="form-group <?=isset($errors['SpecialEvent']) ? 'has-error' : ''?>">
                        <label for="SpecialEvent" class="col-sm-2 control-label">Special Event Planning</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='SpecialEvent' value='1' <?php echo ($model['SpecialEvent']==1 ? 'checked' : '');?> id='SpecialEvent' />
                        </div>
                        <span><?=@$errors['SpecialEvent']?></span>
                </div>
                <div class="form-group <?=isset($errors['Transportation']) ? 'has-error' : ''?>">
                        <label for="Transportation" class="col-sm-2 control-label">Transportation</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='Transportation' value='1' <?php echo ($model['Transportation']==1 ? 'checked' : '');?>id='Transportation' />
                        </div>
                        <span><?=@$errors['Transportation']?></span>
                </div>
                <div class="form-group <?=isset($errors['Tutoring']) ? 'has-error' : ''?>">
                        <label for="Tutoring" class="col-sm-2 control-label">Tutoring</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='Tutoring' value='1' <?php echo ($model['Tutoring']==1 ? 'checked' : '');?> id='Tutoring' />
                        </div>
                        <span><?=@$errors['Tutoring']?></span>
                </div>
                <div class="form-group <?=isset($errors['VideoPhoto']) ? 'has-error' : ''?>">
                        <label for="VideoPhoto" class="col-sm-2 control-label">Videograpy/Photography</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='VideoPhoto' value='1' <?php echo ($model['VideoPhoto']==1 ? 'checked' : '');?>id='VideoPhoto' />
                        </div>
                        <span><?=@$errors['VideoPhoto']?></span>
                </div>
                <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="form-control btn btn-primary" value="Save" />
                        </div>
                </div>
               </form>
